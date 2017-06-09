<?php

$url = 'https://api.seon.io/SeonRestService/proxy-api/v1.0';
$data = array("license_key" => "8bbbe856-c498-4a70-b61c-ac0d990794ba", "ip" => "213.1.156.1");
$options = array(
		'http' => array(
				'header'  => 'Content-type: application/json',
				'method'  => 'POST',
				'content' => json_encode($data))
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result
?>