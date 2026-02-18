<?php
require 'vendor/autoload.php';

$app = new Slim\App();
$app->get('/', function ($request, $response, $args) {
    return $response->write("Hello, World!");
});

$app->post('/data', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    return $response->withJson($data);
});

$app->run();


?>