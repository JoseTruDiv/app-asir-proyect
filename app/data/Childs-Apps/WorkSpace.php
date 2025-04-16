<?php

    class WorkSpace{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='WORKSPACE';
            $this->img='/app/imgs/apps/app_workspace.svg';
            $this->url='https://calendar.google.com';
        }

    }