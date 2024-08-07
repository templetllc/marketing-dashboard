<?php

$_posts = $_GET['posts'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://prod-90.westus.logic.azure.com:443/workflows/e35593cf8bdf4cff87ab89e8b5500de0/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=dPnVPbgP77YK7Vk1HEVWSvB2ux98H9TxTGoqBUahWGY',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "selectedPost": "'.$_posts.'",
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Cookie: ARRAffinity=55af0aa9d1042a9062cf39d6800f79adc8da60404d5f07a99b58afc8e1b04a15; ARRAffinitySameSite=55af0aa9d1042a9062cf39d6800f79adc8da60404d5f07a99b58afc8e1b04a15'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response, true);

$data = $response['sidebar'];

$data = json_encode($data);

echo $data;

?>