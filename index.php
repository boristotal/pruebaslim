<?php
require 'vendor/autoload.php';

$app = new Slim\App();

$app->post('/data', function ($request, $response, $args) {
    //$data = $request->getParsedBody();
    //return $response->withJson($data);
    return $response->write("So ? ? ");
});

$app->get('/', function ($request, $response, $args) {
    return $response->write("Aquel amor ? ");
});

$app->run();
?>