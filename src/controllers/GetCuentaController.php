<?php
require_once __DIR__.'/../routes/path.php';
$path = new Path();
require_once $path->MODELS.'/UsuariosModels.php';

class GetCuentaController{

    function index(){

        $MODEL = new UsuariosModels();

        $result = $MODEL->getUserAdmin();

        return $result;
    }

}