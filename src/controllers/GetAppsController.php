<?php
$path = $GLOBALS['path'];
require_once $path->DATA.'/Apps.php';

class GetAppsController{

    function getApps($idRol){
        $APPS = new Apps();
        switch ($idRol) {
            case 1:
                return $APPS->Administrador;
                break;
            case 2:
                return $APPS->Usuario;
                break;
            case 3:
                return $APPS->Desarrollador;
                break;
        }
    }

}