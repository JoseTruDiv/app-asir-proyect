<?php

$path = $GLOBALS['path'];
require_once __DIR__.'/../db/database.php';

class UsuariosModels{
    function addUser($arrayUser){

        try {
                $query = "INSERT INTO usuarios (nombre,apellido,email,departamento,password,idRol) VALUES (?,?,?,?,?,?)";
            $bbdd = db();

            $stmp = $bbdd->prepare($query);

            $stmp->bind_param('sssssi',$arrayUser['nombre'],$arrayUser['apellido'],$arrayUser['email'],$arrayUser['departamento'],$arrayUser['password'],$arrayUser['idRol']);

            $stmp->execute();

            $stmp->close();

            $_SESSION['registroUser']=true;

            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
        
    }


    function editUser($arrayUser){

        try {
                $query = "UPDATE usuarios SET nombre = ?, apellido=?, email=?, departamento=?, password=?, idRol=? WHERE id=?";
            $bbdd = db();

            $stmp = $bbdd->prepare($query);

            $stmp->bind_param('sssssii',$arrayUser['nombre'],$arrayUser['apellido'],$arrayUser['email'],$arrayUser['departamento'],$arrayUser['password'],$arrayUser['idRol'],$arrayUser['id']);

            $stmp->execute();

            $stmp->close();

            $_SESSION['editUser']=true;

            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
        
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


    function getUser($idUser){
        try {

        $arrayUser = [];

        $query = db()->query("SELECT nombre,apellido,email,departamento,idRol FROM usuarios WHERE id=$idUser");

        $arrayUser = $query->fetch_assoc();

        return $arrayUser;

    } catch (\Throwable $th) {
        return 0;
    }
}


    function getUsers(){
            try {

            $arrayUsers = [];

            $query = db()->query("SELECT id,nombre,apellido,email,departamento,idRol FROM usuarios");

            $row = $query->num_rows;

            for ($i=0; $i < $row; $i++) { 
                array_push($arrayUsers,$query->fetch_row());
            }

            return $arrayUsers;

        } catch (\Throwable $th) {
            return 0;
        }
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

                $_SESSION['idUser'] = $usuario['id'];
                
                return 1;
            }else{
                return 0;
            }

        } catch (\Throwable $th) {
            return 0;
        }
    }



    function delUsers($arrayUsers){

        try {
            foreach ($arrayUsers as $value) {
                db()->query("DELETE FROM usuarios WHERE id=$value");
            }
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
    }



    function editUserConfig2($email,$newValueArray,$valueSet){

        $bbdd = db();

        $queryID = $bbdd->query("SELECT id FROM usuarios WHERE email=\"$email\"");

        $id = $queryID->fetch_array(MYSQLI_NUM)[0];

        $query = "UPDATE usuarios SET $valueSet = ? WHERE id=?";
       

        $stmp = $bbdd->prepare($query);

        $stmp->bind_param('si',$newValueArray,$id);

        $stmp->execute();

        $stmp->close();
    }



    function editUserConfig($arrayUser){

        try {
            $userModal = new UsuariosModels();

            if (isset($arrayUser['newName'])) {
                $userModal->editUserConfig2($arrayUser['email'],$arrayUser['newName'],'nombre');
                $_SESSION['nameUser'] = $arrayUser['newName'];
            }

            if (isset($arrayUser['newPassword'])) {
                $userModal->editUserConfig2($arrayUser['email'],$arrayUser['newPassword'],'password');
            }

            if (isset($arrayUser['newEmail'])) {
                $userModal->editUserConfig2($arrayUser['email'],$arrayUser['newEmail'],'email');
                $_SESSION['emailUser'] = $arrayUser['newEmail'];
            }

            $_SESSION['editUser']=true;

            return 1;
        } catch (\Throwable $th) {
            return $th;
        }
        
    }

}