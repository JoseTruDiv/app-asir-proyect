<?php


function db(){
    $PORT = '10023';
    $host = 'localhost:'.$PORT;
    $username = 'root';
    $password = 'root';
    $db = 'salesmaster';


    return new mysqli($host,$username,$password,$db);
}