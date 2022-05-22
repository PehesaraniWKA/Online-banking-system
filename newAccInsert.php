<?php

    $serverName = 'localhost' ;
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = "abc_bank";

    //create connection
    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, "$dbname");

    if($conn === false) {
        die("Could not connect "
        . mysqli_connect_error());
    }
    $account = $_POST['account'];
    $name = $_POST['name'];
    $NIC = $_POST['NIC'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $phone = $_POST['phone'];
    $citizen = $_POST['citizen'];
    $tax = $_POST['tax'];
    $taxNo = $_POST['taxNo'];
    $language = $_POST['language'];
    $status = $_POST['status'];

    $sql = "INSERT INTO opennewaccount  VALUES ('$account','$name','$NIC','$email','$address','$city','$gender','$DOB','$phone','$citizen', '$tax', '$taxNo', '$language', '$status')";

    if(mysqli_query($conn, $sql)){

        echo nl2br("$account\n");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
?>