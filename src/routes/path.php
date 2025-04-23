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
    public $MODELS;
    public $DB;
    public $LOGINPASS;
    public $DATA;
    public $HOMEMOBILE;
    public $HEADER;
    public $WIDGETS;
    public $ADMIN;
    public $ERROR_PAGE;
    public $CLOSEDSESSION;
    public $TABLEUSER;
    public $ADDUSERS;
    public $CONFIG;

    public function __construct() {
      $this->SRC = realpath(__DIR__ . '/..');
      $this->HOME = realpath(__DIR__ . '/../../app/components/Home.php');
      $this->INDEX = realpath(__DIR__ . '/../../');
      $this->JS = realpath(__DIR__ . '/../../app/js');
      $this->CSS = realpath(__DIR__ . '/../../app/css');
      $this->COMPONENTS = realpath(__DIR__ . '/../../app/components/');
      $this->LOGIN = realpath(__DIR__ . '/../../app/components/auth/login.php');
      $this->LOGINPASS = realpath(__DIR__.'/../../app/components/auth/loginPasswd.php');
      $this->REGISTRO = realpath(__DIR__ . '/../../app/components/auth/registro.php');
      $this->IMG = realpath(__DIR__.'/../../app/imgs');
      $this->FOOTER = realpath(__DIR__.'/../../app/components/pages/footer.php');
      $this->CONTROLLERS = realpath(__DIR__ . '/../controllers/');
      $this->MODELS = realpath(__DIR__ . '/../models/');
      $this->DB = realpath(__DIR__ . '/../db/');
      $this->DATA = realpath(__DIR__ . '/../../app/data');
      $this->HOMEMOBILE = realpath(__DIR__.'/../../app/components/pages/HomeMobile.php');
      $this->HEADER = realpath(__DIR__.'/../../app/components/pages/Header.php');
      $this->WIDGETS = realpath(__DIR__.'/../../app/components/widgets/');
      $this->ADMIN = realpath(__DIR__.'/../../app/components/pages/Administrador.php');
      $this->ERROR_PAGE = realpath(__DIR__.'/../../app/components/pages/404.php');
      $this->CLOSEDSESSION = realpath(__DIR__ . '/../controllers/ClosedSessionController.php');
      $this->TABLEUSER = realpath(__DIR__.'/../../app/components/widgets/tables/TableUsers.php');
      $this->ADDUSERS = realpath(__DIR__ . '/../../app/components/pages/AddUsers.php');
      $this->CONFIG = realpath(__DIR__.'/../../app/components/pages/Config.php');
  }

}
