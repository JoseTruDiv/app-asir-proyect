<?php

$path = $GLOBALS['path'];
require_once __DIR__.'/../db/database.php';

class UsuariosModels{
    function addUser($arrayUser){
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


    function getUserAdmin(){

        $resultado = 0;

        $usuarios = db()->query("SELECT idRol FROM usuarios");

        $row = $usuarios->num_rows;

        for ($i=0; $i < $row; $i++) { 
            $rows = $usuarios->fetch_array(MYSQLI_NUM);
            if ($rows[0] == 1) {
                $resultado = $rows;
            }
        }

        return $resultado;
    }


    function getLoginUsers($name,$pass){
        try {
            $idUser = db()->query("SELECT id FROM usuarios WHERE email='$name'")->fetch_array(MYSQLI_NUM)[0];

            $passQuery = db()->query("SELECT password FROM usuarios WHERE id=$idUser")->fetch_array(MYSQLI_NUM)[0];

            if (password_verify($pass,$passQuery)) {
                $arrayUser = db()->query("SELECT nombre, email, idRol FROM usuarios WHERE id = $idUser");
                
                $usuario = $arrayUser->fetch_assoc();

                $_SESSION['nameUser'] = $usuario['nombre'];

                $_SESSION['emailUser'] = $usuario['email'];

                $_SESSION['idRol'] = $usuario['idRol'];
                
                return 1;
            }else{
                return 0;
            }

        } catch (\Throwable $th) {
            return 0;
        }
    }
}