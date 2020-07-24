<?php
// Recibir el cuerpo de la petición.
$input = @file_get_contents("php://input");
// Parsear el contenido como JSON.


file_put_contents(
    'registro.log',
    json_encode($input) . PHP_EOL,
    FILE_APPEND
);

// Usar los datos del Webhooks para alguna acción.

// Responder
http_response_code(200);

/*
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
//MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


switch($_POST["type"]){
	case "payment":
		$payment = MercadoPago\Payment.find_by_id($_POST["id"]);
	break;
	case "plan":
		$plan = MercadoPago\Plan.find_by_id($_POST["id"]);
	break;
	case "subscription":
		$plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
	break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
    break;
}

echo "<hr>";
print_r($payment);
*/

?>