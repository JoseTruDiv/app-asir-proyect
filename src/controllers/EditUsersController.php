<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class EditUsersController{

    function index(){

        $array_data = ['email' => htmlspecialchars($_POST['emailUser'])];

        if (isset($_POST['newEmailUser'])) {
            $newEmail = htmlspecialchars($_POST['newEmailUser']);
            $array_data['newEmail'] = $newEmail;
        }

        if (isset($_POST['newPasswdUser'])) {
            $passwd = password_hash($_POST['newPasswdUser'],PASSWORD_DEFAULT);
            $array_data['newPassword'] = $passwd;
        }


        if (isset($_POST['newNameUser'])) {
            $nameUser = htmlspecialchars($_POST['newNameUser']);
            $array_data['newName'] = $nameUser;
        }  
  
        $MODEL = new UsuariosModels();

        if (!isset($_POST['newEmailUser'])&&!isset($_POST['newPasswdUser'])&&!isset($_POST['newEmail'])) {
            var_dump('Result es 0');
            $result = 0;
        }else{
            $result = $MODEL->editUserConfig($array_data);
        }
        
        if ($result==1) {
            $_SESSION['editUser'] = true;
            header('Location: /config');
        }
    
    }

}