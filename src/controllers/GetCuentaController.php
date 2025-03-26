<?php
$path = $GLOBALS['path'];
require_once $path->MODELS.'/UsuariosModels.php';

class GetCuentaController{

    function index(){

        $MODEL = new UsuariosModels();

        $result = $MODEL->getUserAdmin();

        return $result;
    }

}