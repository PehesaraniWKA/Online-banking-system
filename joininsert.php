<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "iwt_project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");


    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
      
    // Taking all 5 values from the form data(input)
     $name = $_POST['name'];
     $email = $_POST['email'];
     $vecancie = $_POST['vacancie'];
     $phone = $_POST['phone'];
     $about = $_POST['about'];
  
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO payment  VALUES ('$name','$email','$vacancie','$phone','$about')";
      
    if(mysqli_query($conn, $sql)){

        echo nl2br("$name\n $email\n");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);
    ?>