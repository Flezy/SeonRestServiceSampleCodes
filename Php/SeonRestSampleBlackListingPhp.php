<?php

$url = 'https://api.seondev.space/SeonRestService/fraud-api/user/123-123';

$data = array("license_key" => "550e8400-e29b-41d4-a716-446655440000",
     "state" => "blacklist",
     "label_email" => true,
     "label_address" => true,
     "label_fingerprints" => true,
     "label_ip" => true,
     "label_phone" => true,
     "comment" => "this is a fake user",);

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