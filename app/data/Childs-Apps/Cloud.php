<?php

    class Cloud{
        public $name;
        public $img;
        public $url;

        function __construct() {
            $this->name='CLOUD';
            $this->img='/app/imgs/apps/app_cloud.svg';
            $this->url='http://financelimitserver.duckdns.org:8067';
        }

    }