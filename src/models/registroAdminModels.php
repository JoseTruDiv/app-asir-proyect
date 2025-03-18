<?php

require_once '../db/database.php';

class RegistroAdminModels{

    function addUser($arrayUser){
        $query = "INSERT INTO usuarios (id,nombre,apellido,email,departamento,password,idRol)";

        $bbdd = db('usuarios');

        $stmp = $bbdd->prepare($query);

        $stmp->bind_param('isssssi',$arrayUser['id'],$arrayUser['nombre'],$arrayUser['apellido'],$arrayUser['email'],$arrayUser['departamento'],$arrayUser['password'],$arrayUser['idRol']);
    }
}