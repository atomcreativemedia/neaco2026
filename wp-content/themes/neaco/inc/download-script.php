<?php
if(isset($_GET['config'])) {
    $configJson = $_GET['config'];
    $config = json_decode($configJson, true);
    
    // Determine the zip file name based on $config
    // This is where we map the selections to zip files
    $zipFileName = determineZipFileName($config);

    // Check if the file exists
    if(file_exists($zipFileName)) {
        // Serve the file for download
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="'.basename($zipFileName).'"');
        header('Content-Length: ' . filesize($zipFileName));
        flush(); // Flush system output buffer
        readfile($zipFileName);
        exit;
    } else {
        echo "File not found.";
    }
}

// A placeholder for our logic to determine the zip file name based on selections
function determineZipFileName($config) {
    // Implement logic here based on $config
    // For example, concatenating selected option codes to form a filename
    // Return the path to the zip file
    return get_template_directory() . "/product-packs/product_pack_test.zip";
}
