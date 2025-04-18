<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class AlterUsersController{

    function index(){

        $id = intval($_POST['editIdUser']);

        $email = htmlspecialchars($_POST['emailUser']);

        $passwd = password_hash($_POST['passwdUser'],PASSWORD_DEFAULT);

        $departamento = htmlspecialchars($_POST['departamentoUser']);

        $name = htmlspecialchars($_POST['nameUser']);

        $apellido = htmlspecialchars($_POST['lastNameUser']);

        $idRol = intval($_POST['rolUser']);

        
        $registro = ['id' => $id, 'nombre' => $name, 'apellido' => $apellido,'email' => $email, 'departamento' => $departamento, 'password' => $passwd, 'idRol' => $idRol];

        $MODEL = new UsuariosModels();

        $result = $MODEL->editUser($registro);

        if ($result==1) {
            $_SESSION['editUser'] = true;
            header('Location: /admin');
        }
    }

}