<?php

    $path = $GLOBALS['path'];

    require_once $path->DATA.'/Childs-Apps/Contactos.php';
    require_once $path->DATA.'/Childs-Apps/Proyectos.php';
    require_once $path->DATA.'/Childs-Apps/Notas.php';
    require_once $path->DATA.'/Childs-Apps/Sitios_webs.php';
    require_once $path->DATA.'/Childs-Apps/SSH.php';
    require_once $path->DATA.'/Childs-Apps/Calendario.php';
    require_once $path->DATA.'/Childs-Apps/Cloud.php';
    require_once $path->DATA.'/Childs-Apps/Ftp.php';
    require_once $path->DATA.'/Childs-Apps/Correo.php';
    require_once $path->DATA.'/Childs-Apps/Portainer.php';

    class Apps{

        public $Administrador;
        public $Usuario;
        public $Desarrollador;


        function __construct()
        {   
            $this->Administrador=[new Contactos(),new Proyectos(),new Sitio_web(),new Notas(),new Cloud(),new Ftp(),new Portainer(),new Correo(),new SSH(),new Calendario()];
        }
    }