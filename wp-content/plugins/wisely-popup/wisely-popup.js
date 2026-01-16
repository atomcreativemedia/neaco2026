jQuery(document).ready(function($) {
    var cookieName = 'wisely_popup_seen';
    var expiryTime = wiselyPopupSettings.cookieExpiry; // Already in milliseconds
    var triggerType = wiselyPopupSettings.triggerType;
    var triggerScroll = wiselyPopupSettings.triggerScroll;
    var triggerTimer = wiselyPopupSettings.triggerTimer; // Already in milliseconds
    
    // Log the values for debugging
    /*console.log("Cookie Expiry:", expiryTime);
    console.log("Trigger Type:", triggerType);
    console.log("Trigger Scroll:", triggerScroll);
    console.log("Trigger Timer:", triggerTimer);*/

    // Check if the cookie already exists
    if (!document.cookie.includes(cookieName)) {
        // Trigger logic based on the selected trigger type
        if (triggerType === 'scroll') {
            // Scroll-based trigger
            if (triggerScroll > 0) {
                $(window).scroll(function() {
                    var scrollPercent = $(window).scrollTop() / ($(document).height() - $(window).height()) * 100;
                    if (scrollPercent >= triggerScroll) {
                        showPopup();
                    }
                });
            }
        } else if (triggerType === 'timer') {
            // Timer-based trigger
            if (triggerTimer > 0) {
                setTimeout(showPopup, triggerTimer);
            }
        }
    }

    // Function to show the popup and set the cookie
    function showPopup() {
        $('.wisely-popup').fadeIn();
        document.body.classList.add('no-scroll');
        document.cookie = cookieName + "=true; max-age=" + expiryTime + "; path=/";
    }
    
    // Close button functionality
    $(document).on('click', '.wisely-popup__close', function() {
        $('.wisely-popup').fadeOut(); // Hide the popup when the close button is clicked
        document.body.classList.remove('no-scroll');
    });
});
