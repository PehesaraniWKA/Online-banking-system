<?php


if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //check for empty fields
    if (emptyInputLogin($username, $pwd) !== false){
        header("location: ../Login.php?error=emptyinput");
        exit(); //stop running

    }
//connection with database
    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../Login.php");
        exit(); //stop running
}