<?php

$url = 'https://api.seon.io/SeonRestService/fraud-api/v1.0';
$data = array(
	"license_key" => "8bbbe856-c498-4a70-b61c-ac0d990794ba",
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
$options = array(
		'http'  => array(
				'header'   => 'Content-type: application/json',
				'method'   => 'POST',
				'content'  => json_encode($data))
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result
?>