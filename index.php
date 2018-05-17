<?php
$headers = apache_request_headers();
//
//    [HTTP_AUTHORIZATION] => SSWS 00DYgBl8DaEu9kbGy1dtq_aN1VoWAFxxcxw2XrfQOK


header('Access-Control-Allow-Origin: https://fiddle.jshell.net');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Max-Age: 604800');
header("Content-type: application/json");
//$array = array("ok" => $_POST["x"]);
//echo json_encode($array);

echo '{"status":"good"}';
die();


print_r ( $_SERVER );

foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
}

?>



