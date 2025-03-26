<?php
require_once __DIR__.'/../routes/path.php';
$path = new Path();
require_once $path->MODELS.'/UsuariosModels.php';

class RegistroAdminController{

    function index(){

        $id = random_int(1,999999999);

        $name = 'Admin';

        $apellido = '';

        $email = $_POST['emailReg'];

        $passwd = password_hash($_POST['passReg'],PASSWORD_DEFAULT);

        $departamento = '';

        $idRol = 1;

        $registro = ['id' => $id, 'nombre' => $name, 'apellido' => $apellido,'email' => $email, 'departamento' => $departamento, 'password' => $passwd, 'idRol' => $idRol];

        $MODEL = new UsuariosModels();

        $MODEL->addUser($registro);
    }

}