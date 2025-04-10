<?php

    class Calendario{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='CALENDARIO';
            $this->img='/app/imgs/apps/app_calendar.svg';
            $this->url='https://calendar.google.com';
        }

    }