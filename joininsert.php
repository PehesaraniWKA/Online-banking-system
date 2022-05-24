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
     $name = $_POST['name'];
     $email = $_POST['email'];
     $about = $_POST['about'];
     $vacancy = $_POST['vacancy'];
  
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO vacancy  VALUES ('$name','$email','$about','$vacancy')";
      
    if(mysqli_query($conn, $sql)){

        echo file_get_contents('joinwithus.php');
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);
    ?>