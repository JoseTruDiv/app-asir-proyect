<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class LoginController{

    function index(){
        $loginController = new LoginController();
        $function = htmlspecialchars($_POST['funcion']);
        if ($function == 'setUser') {
            $name = htmlspecialchars($_POST['nameLogin']);
            $loginController->setUser($name);
        }elseif($function == 'authUser'){
            session_start();
            $password = htmlspecialchars($_POST['passLogin']);
            $name = $_SESSION['nameLogin'];
            unset($_SESSION['nameLogin']);
            $loginController->authUser($name,$password);
        }
    }

    function setUser($name){
        session_start();
        $_SESSION['nameLogin'] = $name;
        header('Location: /loginpass');
    }

    function authUser($user,$password){
        $MODEL = new UsuariosModels();
        $bool = $MODEL->getLoginUsers($user,$password);
        if ($bool == 1) {
            header('Location: /home');
        }else{
            session_start();
            $_SESSION['inicio'] = 'ErrorPass';
            header('Location: /');
        }
    }
}