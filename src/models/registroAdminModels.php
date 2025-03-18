<?php

require_once __DIR__.'/../routes/path.php';
$path = new Path();
require_once __DIR__.'/../db/database.php';

class RegistroAdminModels{
    function addUser($arrayUser){

        var_dump($arrayUser);
        $query = "INSERT INTO usuarios (nombre,apellido,email,departamento,password,idRol) VALUES (?,?,?,?,?,?)";

        $bbdd = db();

        $stmp = $bbdd->prepare($query);

        $stmp->bind_param('sssssi',$arrayUser['nombre'],$arrayUser['apellido'],$arrayUser['email'],$arrayUser['departamento'],$arrayUser['password'],$arrayUser['idRol']);

        $stmp->execute();

        $stmp->close();

        session_start();

        $_SESSION['registroUser']=true;
        
        header('Location: /');
    }
}