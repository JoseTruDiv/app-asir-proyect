<?php

    $path = $GLOBALS['path'];

    require_once $path->DATA.'/Childs-Apps/Notas.php';
    require_once $path->DATA.'/Childs-Apps/Sitios_webs.php';
    require_once $path->DATA.'/Childs-Apps/SSH.php';
    require_once $path->DATA.'/Childs-Apps/Calendario.php';
    require_once $path->DATA.'/Childs-Apps/Cloud.php';
    require_once $path->DATA.'/Childs-Apps/Ftp.php';
    require_once $path->DATA.'/Childs-Apps/Correo.php';
    require_once $path->DATA.'/Childs-Apps/Portainer.php';
    require_once $path->DATA.'/Childs-Apps/CRM.php';
    require_once $path->DATA.'/Childs-Apps/Analytics.php';
    require_once $path->DATA.'/Childs-Apps/Meets.php';
    require_once $path->DATA.'/Childs-Apps/Finance.php';
    require_once $path->DATA.'/Childs-Apps/Workspace.php';
    require_once $path->DATA.'/Childs-Apps/Admin.php';

    class Apps{

        public $Administrador;
        public $Usuario;
        public $Desarrollador;


        function __construct()
        {   
            $this->Administrador=[new Admin(),new CRM(),new Sitio_web(),new Notas(),new Cloud(),new Correo(),new Calendario(),new WorkSpace()];
            $this->Usuario=[new CRM(),new Sitio_web(),new Notas(),new Cloud(),new Ftp(),new Portainer(),new Correo(),new SSH(),new Calendario(),new Analytics(),new Meets(),new Finance(),new WorkSpace()];
            $this->Desarrollador=[new Sitio_web(),new Ftp(),new Portainer(),new SSH(),new Meets()];
        }
    }