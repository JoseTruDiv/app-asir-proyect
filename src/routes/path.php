<?php

class Path{
    public $INDEX;
    public $HOME;
    public $SRC;
    public $JS;
    public $CSS;
    public $COMPONENTS;
    public $LOGIN;
    public $REGISTRO;
    public $IMG;
    public $FOOTER;
    public $CONTROLLERS;

    public function __construct() {
      $this->SRC = realpath(__DIR__ . '/..');
      $this->HOME = realpath(__DIR__ . '/../../app/Home.php');
      $this->INDEX = realpath(__DIR__ . '/../../');
      $this->JS = realpath(__DIR__ . '/../../app/js');
      $this->CSS = realpath(__DIR__ . '/../../app/css');
      $this->COMPONENTS = realpath(__DIR__ . '/../../app/components/');
      $this->LOGIN = realpath(__DIR__ . '/../../app/components/auth/login.php');
      $this->REGISTRO = realpath(__DIR__ . '/../../app/components/auth/registro.php');
      $this->IMG = realpath(__DIR__.'/../../app/imgs');
      $this->FOOTER = realpath(__DIR__.'/../../app/components/footer.php');
      $this->CONTROLLERS = realpath(__DIR__ . '/../controllers/');
  }

}
