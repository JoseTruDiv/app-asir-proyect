<?php

require_once __DIR__.'/path.php';
$path = new Path();
require_once $path->CONTROLLERS.'/RegistroAdminController.php';
$RegistroAdminController = new RegistroAdminController();

$rutas = [
    "/" => $path->LOGIN,
    "/registro" => $path->REGISTRO,
    'POST' => [
        "/registroAdminController" => [$RegistroAdminController, 'index'],
    ],
];

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$uri = strtok($uri, '?');

if (isset($rutas[$method][$uri])) {
    $handler = $rutas[$method][$uri];
    if (is_callable($handler)) {
        call_user_func($handler);
    } elseif (is_array($handler) && count($handler) === 2 && is_object($handler[0]) && method_exists($handler[0], $handler[1])) {
        call_user_func_array([$handler[0], $handler[1]], $_POST);
    } 
} 

?>