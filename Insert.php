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
     $Refno = $_POST['Refno'];
     $phone = $_POST['phone'];
     $cardname = $_POST['cardname'];
     $cardnumber = $_POST['cardnumber'];
     $expmonth	 = $_POST['expmonth'];
     $expyear = $_POST['expyear'];
     $cvv = $_POST['cvv'];
      
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO payment  VALUES ('$name','$email','$Refno','$phone','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
      
    if(mysqli_query($conn, $sql)){

        echo nl2br("$name\n $email\n $Refno\n $phone\n $cardname\n $cardnumber\n $expmonth\n $expyear\n $cvv");
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);
    ?>