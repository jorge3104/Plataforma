<?php
$server="localhost";
$user="root";
$pass="";
$bd="acuerdos";
$mysqli= new mysqli ($server,$user,$pass,$bd);

if(!$mysqli){
    echo "error";
    exit;
}