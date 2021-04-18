<?php
$message = "Hello, World"
$json_data = json_encode([
    // content
    "content" => $message,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
if($_POST['authorn'] = '') {
    $json_data['embeds']='';
}
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_close( $ch );
?>
