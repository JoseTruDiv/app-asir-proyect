<?php

class ClosedSessionController{
    function index(){
       session_destroy();
       header('Location: /');
    }

}

$closedSession = new ClosedSessionController();

$closedSession->index();
