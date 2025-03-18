<?php


function db($db){
    $PORT = '10023';
    $host = 'localhost:'.$PORT;
    $username = 'root';
    $password = 'root';
    $db = $db;


    return new mysqli($host,$username,$password,$db);
}