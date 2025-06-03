<?php


function db(){
    $PORT = '10033';
    $host = 'localhost:'.$PORT;
    $username = 'root';
    $password = 'root';
    $db = 'salesmaster';


    return new mysqli($host,$username,$password,$db);
}