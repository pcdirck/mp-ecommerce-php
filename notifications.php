<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

$info = json_decode($this->input->raw_input_stream);
$payment = new MercadoPago\Payment();
$or_collection_id = $info->data->id;
$find_info = MercadoPago\Payment::find_by_id($or_collection_id);
$or_number = $find_info->external_reference;


var_dump($find_info);


?>