<?php

$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class GetLangUsersController{
    function getlang(){
       $UsersDB = new UsuariosModels();

       $arrayUsers = $UsersDB->getUsers();

       if ($arrayUsers==0) {
            return 0;
       }else{
            return $arrayUsers;
       }

    }

}

