<?php

$url = 'https://api.seon.io/SeonRestService/email-api/v1.0/';
$data = array(
	"license_key" => "8bbbe856-c498-4a70-b61c-ac0d990794ba",
    "email" => "example@seon.io"
);

$curl = curl_init($url);

$ch = curl_init();
curl_setopt_array($ch,array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HEADER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPGET => false,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query($data)
));

$result = curl_exec($ch);

$err = curl_error($ch);
if (curl_errno($ch) && $err) $res = "CURL ERROR [".curl_errno($ch)."]: ".curl_error($ch);
else $res = $result;
echo $result;
echo $res;



?>