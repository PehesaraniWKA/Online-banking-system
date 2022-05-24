<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "abc_bank";
    $conn=mysqli_connect($servername,$username,$password,$dbname);


    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
      
    // Taking all 5 values from the form data(input)
     $Company = $_POST['Company'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $Refno = $_POST['Refno'];
     $phone = $_POST['phone'];
     $paym = $_POST['paym'];
     $cardname = $_POST['cardname'];
     $cardnumber = $_POST['cardnumber'];
     $expmonth	 = $_POST['expmonth'];
     $expyear = $_POST['expyear'];
     $cvv = $_POST['cvv'];
      
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO payment  VALUES ('$Company','$name','$email','$Refno','$phone', '$paym', '$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
      
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