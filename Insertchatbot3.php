<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "abc_bank";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");


    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
      
    // Taking all 5 values from the form data(input)
    $name =  $_REQUEST['name'];
    $tellus = $_REQUEST['tellus'];
      
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO chatbot  VALUES ('$name','$tellus')";
      
    if(mysqli_query($conn, $sql)){

        header("Location: Home.php");
        exit();
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);
    ?>