<?php

require_once __DIR__.'/path.php';

$path = new Path();

$rutas = [ 
  "/" => $path->LOGIN,
  "/registro" => $path->REGISTRO,
  "/registroAdminController" => $path->CONTROLLERS.'ReginstroAdminController.php',
];