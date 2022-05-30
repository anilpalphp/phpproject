<?php

/**
 * change plain number to formatted currency
 *
 * @param $number
 * @param $currency
 */
function callcurl($url, $method, $parameter = "") {

    $apiKey = "OoDa0bWMQ/LW614JRNnbFl+bgPN1ZuinTdJE8I3yM8SGTbkjH9iC+IxEUSwjDly3";
    $url = 'https://uisp-dev.ruralwisp.ca/crm/api/v1.0/' . $url;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if ($method == "GET") {
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    } else {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-Auth-App-Key: ' . $apiKey
    ));

    $response = curl_exec($ch);
    $err = curl_error($ch);  //if you need
    curl_close($ch);
    return $response;
}

function getWaveAppQueryData($url, $query) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(['query' => $query]),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer mfkArJM1vDMDl028JfQtrMtuk5ityH',
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}
function WaveAppMutation($url,$query,$variables) {
    $curl = curl_init();
    $payload = json_encode(['query' => $query, 'variables' => $variables]);
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer mfkArJM1vDMDl028JfQtrMtuk5ityH',
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}
?>