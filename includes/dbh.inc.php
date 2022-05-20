<?php

$serverName ="localhost";
$dBUsername ="root";
$dBPassword ="";
$dBName ="abc_bank";

//connection with database
$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);


//identify connection errors

if(!$conn){
    die("Connection failed :". mysqli_connect_error());
}