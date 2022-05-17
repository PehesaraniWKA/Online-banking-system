<?php 

//function to avoid user come to this page

if(isset($_POST["submit"])){
    
    $name = $_POST["name"]; //pass name of the form element
    $nic = $_POST["Nic"];
    $address = $_POST["addr"];
    $contactnum = $_POST["phone"];
    $profileimg = $_POST["pimage"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $notes = $_POST["snote"];

    //errors checking
    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php'; 
    
    //if user froget to fill form field

    if (emptyInputSignup($name, $nic, $address, $contactnum, $profileimg, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../Register.php?error=emptyinput");
        exit(); //stop running

    }

    //check usser name validity
    if (invalidUid($username) !== false){
        header("location: ../Register.php?error=invaliduid");
        exit(); //stop running

    }
 //check email address validity
    if (invalidEmail($email) !== false){
        header("location: ../Register.php?error=invalidemail");
        exit(); //stop running

    }

    //check password matches
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../Register.php?error=passwordsdontmatch");
        exit(); //stop running

    }
    
    //check username and email already exists by connecting to the server
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../Register.php?error=usernametaken");
        exit(); //stop running

    }

    //create function to check user done all things correctly above

    createUser($conn, $name, $nic, $address, $contactnum, $profileimg, $email, $username, $pwd, $notes);
     
}
else{

    header("location: ../Register.php");
    exit(); //stop running
}


