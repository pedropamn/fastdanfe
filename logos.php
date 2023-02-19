<?php
function base64_to_jpeg($base64_string, $output_file) {
    // open the output file for writing
    $fp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $fp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $fp ); 

    return $output_file; 
}

$id = $_POST['id'];
$base64 = $_POST['base64'];

base64_to_jpeg($base64, "logos/{$id}.jpg");
?>