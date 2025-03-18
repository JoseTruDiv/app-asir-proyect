<?php

require_once '../models/registroAdminModels.php';

class RegistroController{

    function index(){

        $id = random_int(1,999999999);

        $name = 'Admin';

        $apellido = '';

        $email = $_POST['emailReg'];

        $passwd = $_POST['passReg'];

        $departamento = '';

        $idRol = 1;

        $registro = ['id' => $id, 'nombre' => $name, 'apellido' => $apellido,'email' => $email, 'departamento' => $departamento, 'password' => $passwd, 'idRol' => $idRol];

        $MODEL = new RegistroAdminModels();

        $MODEL->addUser($registro);
    }

}