<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class RegistroUsersController{

    function index(){

        $id = random_int(1,999999999);

        var_dump($_POST['emailUser']);


        $email = htmlspecialchars($_POST['emailUser']);

        $passwd = password_hash($_POST['passwdUser'],PASSWORD_DEFAULT);

        $departamento = htmlspecialchars($_POST['departamentoUser']);

        $name = htmlspecialchars($_POST['nameUser']);

        $apellido = htmlspecialchars($_POST['lastNameUser']);

        $idRol = intval($_POST['rolUser']);

        
        $registro = ['id' => $id, 'nombre' => $name, 'apellido' => $apellido,'email' => $email, 'departamento' => $departamento, 'password' => $passwd, 'idRol' => $idRol];

        $MODEL = new UsuariosModels();

        $result = $MODEL->addUser($registro);

        if ($result==1) {
            $_SESSION['registroUser'] = true;
            header('Location: /addUsers');
        }
    }

}