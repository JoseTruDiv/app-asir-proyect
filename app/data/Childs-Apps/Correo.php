<?php

    class Correo{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='CORREO';
            $this->img='/app/imgs/apps/app_email.svg';
            $this->url='https://mail.google.com';
        }

    }