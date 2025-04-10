<?php

    class Portainer{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='PORTAINER';
            $this->img='/app/imgs/apps/app_portainer.svg';
            $this->url='http://192.168.195.21:9000';
        }

    }