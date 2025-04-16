<?php

    class Admin{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='ADMIN';
            $this->img='/app/imgs/apps/app_admin.png';
            $this->url='/admin';
        }

    }