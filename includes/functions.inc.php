<?php
//if user froget to fill form field
function emptyInputSignup($name, $nic, $address, $contactnum, $profileimg, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($nic) || empty($address) || empty($contactnum) || empty($profileimg)|| empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
//check usser name validity
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
//check email address validity using build in function
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
//check password matches
function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
//check username and email already exists by connecting to the server
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); //prevent sql injection to database

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Register.php?error=stmtfailed");
        exit(); //stop running

    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email ); 
    mysqli_stmt_execute($stmt); //execute functiom

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        return false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

//create function to check user done all things correctly above
function createUser($conn, $name, $nic, $address, $contactnum, $profileimg, $email, $username, $pwd, $notes) {
    $sql = "INSERT INTO users (usersName, userdNIC, usersAddress, usersPhone, usersIMG, usersEmail, usersUid, userspwd, usersNote) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Register.php?error=stmtfailed");
        exit(); //stop running

    }
    //transform password to hide from database hackers
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sssssssss", $name, $nic, $address, $contactnum, $profileimg, $email, $username, $hashedPwd, $notes); //s count means how many datas pass to database
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../Register.php?error=none");
    exit(); //stop running
   
}

//login
//empty fields
function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

//connection with database
function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username); //one username for email

    if ($uidExists === false) {
        header("location: ../Login.php?error=wronglogin");
        exit(); //stop running

    }

    $pwdHashed = $uidExists["userspwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false ) {
        header("location: ../Login.php?error=wronglogin");
        exit(); //stop running
    }
    else if ($checkPwd === true) {

        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];

        header("location: ../Home.php");
        exit(); //stop running
    }
}