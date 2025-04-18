<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class DelUsersController{

    function index(){

        $arrayIdUsers = [];

        foreach ($_POST as $value) {
            array_push($arrayIdUsers,intval($value));
        }


        $MODEL = new UsuariosModels();

        $result = $MODEL->delUsers($arrayIdUsers);

        var_dump($result);

        if ($result==1) {
            $_SESSION['delUsers'] = true;
            header('Location: /admin');
        }
    }

}