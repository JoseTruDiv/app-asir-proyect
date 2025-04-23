<?php


require_once __DIR__.'/path.php';



/**********************************************************************************************************************VARIABLES-GLOBALES***************************************************************************************** */

$path = new Path();

$GLOBALS['path'] = $path;





require_once $path->CONTROLLERS.'/RegistroAdminController.php';
require_once $path->CONTROLLERS.'/LoginController.php';
require_once $path->CONTROLLERS.'/RegistroUsersController.php';
require_once $path->CONTROLLERS.'/AlterUsersController.php';
require_once $path->CONTROLLERS.'/DelUsersController.php';
$RegistroAdminController = new RegistroAdminController();
$LoginController = new LoginController();
$RegistroUsersController = new RegistroUsersController();
$AlterUsersController = new AlterUsersController();
$DelUsersController = new DelUsersController();

$rutas = [
    "/" => $path->LOGIN,
    "/registro" => $path->REGISTRO,
    "/loginpass" => $path->LOGINPASS,
    "/home" => $path->HOME,
    "/admin" => $path->ADMIN,
    "/404" => $path->ERROR_PAGE,
    "/closed_session" => $path->CLOSEDSESSION,
    "/addUsers" => $path->ADDUSERS,
    "/config" => $path->CONFIG,
    'POST' => [
        "/registroAdminController" => [$RegistroAdminController, 'index'],
        "/loginController" => [$LoginController, 'index'],
        "/regstroUserController" => [$RegistroUsersController,'index'],
        "/alterUserController" => [$AlterUsersController,'index'],
        "/delUsersController" => [$DelUsersController,'index'],
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