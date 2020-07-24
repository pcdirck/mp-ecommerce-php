<?php

// Recibirmos el cuerpo de la petición.
$input = file_get_contents('php://input');
$input = json_decode($input, TRUE);
file_put_contents('cuerpoJSON.log', json_encode($input).PHP_EOL, FILE_APPEND);


// Respondemos con un OK
http_response_code(200);

// pero verifiquen que esten presentes el ID y el Topic.
// si no es asi responden con el 400
// Luego filtrar con un switch segun sea caso
// recomiendo usar el source_news=webhooks en la notifications_url
//
// PCDirck

?>