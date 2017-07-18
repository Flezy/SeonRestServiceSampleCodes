<?php

$url = 'https://api.seon.io/SeonRestService/fraud-api/label/[id]';

$data = array("license_key" => "[license_key]",
     "label" => "fraud",

$options = array(
		'http' => array(
				'header'  => 'Content-type: application/json',
				'method'  => 'PUT',
				'content' => json_encode($data))
);

$ch = curl_init();
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HEADER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPGET => false,
    CURLOPT_CUSTOMREQUEST, "PUT",
    CURLOPT_POSTFIELDS => http_build_query($data)
));

$result = curl_exec($ch);
$err = curl_error($ch);
if (curl_errno($ch) && $err) $res = "CURL ERROR [".curl_errno($ch)."]: ".curl_error($ch);
else $res = $result;
echo $result;
echo $res;

?>