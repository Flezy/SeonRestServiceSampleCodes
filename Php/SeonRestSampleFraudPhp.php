<?php

$url = 'https://api.seondev.space/SeonRestService/fraud-api/v1.0/';
$data = array(
	"license_key" => "f5ee07ab-481c-4a72-93f6-051d4decac1e",
    "ip" => "123.123.123.123",
    "javascript" => "true",
    "action_type" => "",
    "transaction_id" => "",
    "affiliate_id" => "",
    "affiliate_name" => "",
    "user_order_memo" => "",
    "run_email_api" => "true",
    "email" => "",
    "email_domain" => "",
    "password_hash" => "",
    "user_fullname" => "",
    "user_name" => "",
    "user_id" => "",
    "user_created" => "",
    "user_country" => "",
    "user_city" => "",
    "user_region" => "",
    "user_zip" => "",
    "user_street" => "",
    "user_street2" => "",
    "session_id" => "2FCFA7EFB3300428CE27D4D1CF35E76D",
    "device_id" => "",
    "payment_mode" => "",
    "card_fullname" => "",
    "card_bin" => "",
    "card_hash" => "",
    "card_last" => "",
    "avs_result" => "",
    "cvv_result" => "",
    "phone_number" => "",
    "transaction_type" => "",
    "transaction_amount" => 354.55,
    "transaction_currency" => "",
    "items" => array(
      "item_id" => "",
      "item_quantity" => "",
      "item_name" => "",
      "item_price" => "",
      "item_store" => "",
      "item_store_country" => "",
      "item_categories" => "",
      "item_url" => "",
      "item_user_label" => ""
    ), array(
      "item_id" => "",
      "item_quantity" => "",
      "item_name" => "",
      "item_price" => "",
      "item_store" => "",
      "item_store_country" => "",
      "item_categories" => "",
      "item_url" => "",
      "item_user_label" => ""
    ),
    "shipping_country" => "",
    "shipping_city" => "",
    "shipping_region" => "",
    "shipping_zip" => "",
    "shipping_street" => "",
    "shipping_street2" => "",
    "shipping_phone" => "",
    "shipping_fullname" => "",
    "shipping_method" => "",
    "billing_country" => "",
    "billing_city" => "",
    "billing_region" => "",
    "billing_zip" => "",
    "billing_street" => "",
    "billing_street2" => "",
    "billing_phone" => "",
    "discount_code" => "",
    "gift" => "",
    "gift_message" => "",
    "merchant_id" => "",
    "merchant_created_at" => "",
    "merchant_country" => "",
    "details_url" => "",
    "user_label" => array("is_intangible_item" => "true","is_pay_on_delivery" =>"true","departure_airport" =>"BUD","days_to_board" =>1,"arrival_airport" =>"MXP")
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