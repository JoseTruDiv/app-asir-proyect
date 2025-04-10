<?php

    class Contactos{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='CONTACTOS';
            $this->img='/app/imgs/apps/app_contact.svg';
            $this->url='/contactos';
        }

    }