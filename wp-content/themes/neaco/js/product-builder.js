// Holds user selections
let productConfig = {};

// Get the part order from the data attribute
const componentsOrder = $(".page-builder__product-builder__main-content").data("components-order").split("_");

// Initialise the slider
$('.page-builder__product-builder__slider').on('init', function(event, slick) {
    var dots = $('.page-builder__product-builder__slider-dots li');
    dots.each(function(k, v) {
        $(this).find('button').addClass('pb-heading-' + k);
    });
    var items = slick.$slides;
    items.each(function(k, v) {
        var pb_component_title = $(this).find('.page-builder__product-builder__component-title').text();
        $('.pb-heading-' + k).text(pb_component_title);
    });

    initializeDots();
});

// Disable a specific Slick dot
function disableDot(index) {
    $('.pb-heading-' + index).attr('disabled', 'disabled').addClass('disabled');
}

// Enable a specific Slick dot
function enableDot(index) {
    $('.pb-heading-' + index).removeAttr('disabled').removeClass('disabled');
}

// Initialize all dots except the first as disabled
function initializeDots() {
    componentsOrder.forEach((partId, index) => {
        if (index === 0) {
            enableDot(index);
        } else {
            disableDot(index);
        }
    });
}

// Update the dots based on current selections
function updateDots() {
    let foundIncomplete = false;
    
    componentsOrder.forEach((partId, index) => {
        if (productConfig[partId]) {
            enableDot(index);
        } else if (!foundIncomplete) {
            enableDot(index);
            foundIncomplete = true;
        } else {
            disableDot(index);
        }
    });
}

$(".spec-category-thumb").click(function() {
    var partId = $(this).data('component-code');
    var selectedSpecItemId = $(this).attr("id");
    var selectedSpecDisplayItem = $(".spec-display[showdata='" + selectedSpecItemId + "']");
    
    $(".spec-display[data-component-code='" + partId + "']").removeClass('show');
    selectedSpecDisplayItem.addClass('show');
    
    var specAddButton = $(".spec-add[showdata="+selectedSpecItemId+"]");
    $(selectedSpecDisplayItem).siblings(".spec-display").children(".spec-add").removeClass("show");
    
    $(".spec-category-thumb[data-component-code='" + partId + "']").removeClass("active");
    $(this).addClass("active");
    
    var descriptionsContainer = $("#option-descriptions");
    var specItemDesc = $(".page-builder__product-builder__spec-desc[showdata='" + selectedSpecItemId + "']");
    var specItemDescHeight = specItemDesc.outerHeight();
    descriptionsContainer.css("height", specItemDescHeight);
});

$(".spec-add").click(function() {
    var partId = $(this).attr("showdata");
    var dataPartId = $(this).data("component-code");
    var selectionCode = $(this).data("spec-code");
    
    //console.log("Selected partId: ", partId);
    //console.log("Selected dataPartId: ", dataPartId);
    //console.log("Selected selectionCode: ", selectionCode);
    
    updateProductConfig(dataPartId, selectionCode);
    
    $(".spec-category-thumb[data-component-code='" + dataPartId + "']").removeClass("selected");
    $(".spec-category-thumb[id='" + partId + "']").addClass("selected");
    
    updateDots();
    handleDependencies(dataPartId, selectionCode);
    
    // Handle backward navigation with full reset
    const currentPartIndex = componentsOrder.indexOf(dataPartId);
    //console.log("Current part index: ", currentPartIndex);
    
    const invalidatedSelections = [];
    componentsOrder.slice(currentPartIndex + 1).forEach(partId => {
        if (productConfig[partId]) {
            const selectedOption = productConfig[partId].selectionCode;
            const previousPartId = componentsOrder[currentPartIndex];
            const previousSelectedOption = productConfig[previousPartId].selectionCode;

            const compatibleOptions = $(".spec-category-thumb[data-component-code='" + previousPartId + "'][data-spec-code='" + previousSelectedOption + "']").data("compatible");
            const compatibleOptionsArray = compatibleOptions ? compatibleOptions.split(",") : [];

            if (!compatibleOptionsArray.includes(selectedOption)) {
                //console.log("Invalidating partId: ", partId);
                invalidatedSelections.push(partId);
                //delete productConfig[partId];
                $(".spec-category-thumb[data-component-code='" + partId + "']").removeClass("selected active");
                $(".spec-display[data-component-code='" + partId + "']").removeClass("show");
            }
        }
    });
    //console.log("Invalidated selections: ", invalidatedSelections);
    
    updateProductPackStringDisplay();
    reapplyDependencies();
});

function setCookie(name, value, days, instanceId) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "_" + instanceId + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name, instanceId) {
    var nameEQ = name + "_" + instanceId + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function updateProductConfig(dataPartId, selectionCode) {
    productConfig[dataPartId] = {
        selectionCode: selectionCode
    };
    
    //console.log("Updated productConfig: ", productConfig);

    // Update the cookie with the new product configuration
    setCookie("productBuilderConfig", JSON.stringify(productConfig), 1, builderInstanceId); // Expires in 1 day
    
    updateProductPackStringDisplay();
}

function updateProductPackStringDisplay() {
    var packString = Object.values(productConfig).map(config => config.selectionCode).join("_");
    var filename = `${packString}.zip`;

    if (availablePacks.includes(filename)) {
        $("#downloadProductPack a").show().html('Download Your Product Pack<span></span>').attr('href', `/product-packs/${filename}`);
        $("#unavailableNotification").hide();
    } else {
        $("#downloadProductPack a").hide();
        $("#unavailableNotification").show().text('You must select a compatible option for each component in order to download.');
    }
    $("#packString").text(packString ? packString : "No options selected");
}

$("#downloadProductPack a").click(function(event) {
    event.preventDefault(); // Prevent the default action
    var productCode = $("#downloadProductPack").data("main-product-code");
    var packString = Object.values(productConfig).map(config => config.selectionCode).join("_");
    var filename = packString ? `${packString}.zip` : "";
    
    if (filename) {
        // Construct the full URL to the product pack
        var downloadUrl = `/product-packs/${filename}`;
        
        // Redirect to initiate the download
        window.location.href = downloadUrl;
    } else {
        alert("Please select options before downloading your product pack.");
    }
});

function handleDependencies(dataPartId, selectionCode) {
    //console.log("Handling dependencies for part: " + dataPartId + ", selection: " + selectionCode);
    
    const nextPartIndex = componentsOrder.indexOf(dataPartId) + 1;
    if (nextPartIndex < componentsOrder.length) {
        const nextPartId = componentsOrder[nextPartIndex];
        
        // Get compatible options for the selected option
        const compatibleOptions = $(".spec-category-thumb[data-component-code='" + dataPartId + "'][data-spec-code='" + selectionCode + "']").data("compatible");
        //console.log("Compatible options for " + selectionCode + ": " + compatibleOptions);
        
        const compatibleOptionsArray = compatibleOptions ? compatibleOptions.split(",") : [];
        //console.log("Compatible options array: ", compatibleOptionsArray);

        // Show/hide options based on compatibility
        $(".spec-category-thumb[data-component-code='" + nextPartId + "']").each(function() {
            const optionCode = $(this).data("option-code");
            //console.log("Checking option code: " + optionCode);
            if (compatibleOptionsArray.includes(optionCode)) {
                //console.log("Showing option: " + optionCode);
                $(this).closest(".col-4.col-md-6").removeClass("d-none");
            } else {
                //console.log("Hiding option: " + optionCode);
                $(this).closest(".col-4.col-md-6").addClass("d-none");
            }
        });
    }
}

// Function to reapply dependencies based on stored configuration
function reapplyDependencies() {
    //console.log("Reapplying dependencies...");
    for (let partId in productConfig) {
        if (productConfig.hasOwnProperty(partId)) {
            const selectionCode = productConfig[partId].selectionCode;
            //console.log("Reapplying dependency for partId: ", partId, " with selectionCode: ", selectionCode);
            handleDependencies(partId, selectionCode);
        }
    }
}

$(".login-click a").click(function(event) {
    event.preventDefault();
});

$(document).ready(function() {
    // Your existing initialization code
    updateProductPackStringDisplay();  // Initial check if pre-selected options match available packs
});

$(document).ready(function() {
    
    //var configJson = getCookie("productBuilderConfig");
    var configJson = getCookie("productBuilderConfig", builderInstanceId);
    
    if (configJson) {
        productConfig = JSON.parse(configJson);
        updateProductPackStringDisplay();
        
        var config = JSON.parse(configJson);
        $.each(config, function(partId, selectionInfo) {
            var selectionCode = selectionInfo.selectionCode;
            
            var matchingThumb = $(".spec-category-thumb[data-component-code='" + partId + "'][data-spec-code='" + selectionCode + "']");
            $(matchingThumb).addClass("selected active");
            
            var matchingDisplay = $(".spec-display[data-component-code='" + partId + "'][data-spec-code='" + selectionCode + "']");
            $(matchingDisplay).addClass("show");
        });
        
        // Reapply dependencies based on stored configuration
        reapplyDependencies();
    }
    
    $('.page-builder__product-builder__slider').on('init', function(event, slick) {
        var dots = $( '.page-builder__product-builder__slider-dots li' );
        dots.each( function( k, v) {
            $(this).find('button').addClass('pb-heading pb-heading-'+ k );
        });
        var items = slick.$slides;
        items.each( function( k, v) {
            var pb_component_title = $(this).find( '.page-builder__product-builder__component-title').text();
            $( '.pb-heading-' + k ).text(pb_component_title);
        });
    });

    $('.page-builder__product-builder__slider').on('init', function(event, slick) {
        // Append the clear button after slick dots are initialized
        $('<li/>', {
            html: 'Clear Selection <i class="fa-regular fa-circle-xmark"></i>', // text of the button
            id: 'clearSelections', // ID for the button for easy access
            class: 'clear-btn', // class for styling the button
            click: function() {
                clearProductSelections();
            }
        }).appendTo('.page-builder__product-builder__slider-dots'); // Assuming this is your dots container
    }).slick({
        autoplay: false,
        arrows: false,
        adaptiveHeight: true,
        dots: true,
        draggable: false,
        appendDots: '.page-builder__product-builder__slider-pager',
        dotsClass: 'page-builder__product-builder__slider-dots',
    });
    
    initializeDots();
    updateDots();
    
    function clearProductSelections() {
        // Clearing the cookie
        document.cookie = 'productBuilderConfig_' + builderInstanceId + '=; Max-Age=-99999999; path=/;';  // Ensure path matches where the cookie was set
        
        // Optionally reset any visual cues in the UI
        $('.spec-display').removeClass('show');
        $('.spec-category-thumb').removeClass('selected active');
        
        // If using a variable to track selections, clear it
        productConfig = {};
        
        // Reset other UI elements as needed
        resetSliderAndDots();
    }
    
    function resetSliderAndDots() {
        // Go back to the first slide
        $('.page-builder__product-builder__slider').slick('slickGoTo', 0);
        
        // Reset dots - disable all except the first one if needed
        $('.page-builder__product-builder__slider-dots button').attr('disabled', true);
        $('.page-builder__product-builder__slider-dots button').addClass('disabled');
        $('.page-builder__product-builder__slider-dots button').first().removeAttr('disabled');
        $('.page-builder__product-builder__slider-dots button').first().removeClass('disabled');
        
        $("#downloadProductPack a").hide();
        $("#unavailableNotification").show().text('You must select a compatible option for each component in order to download.');
    }
});
