<?php

    class Ftp{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='FTP SERVER';
            $this->img='/app/imgs/apps/app_ftp.svg';
            $this->url='http://192.168.195.21:8200';
        }

    }