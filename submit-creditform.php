<?php 

    $FullName=$_POST['fullname'];
    $AccountNumber=$_POST['accnum'];
    $AccountBranch=$_POST['accbranch'];
    $NIC_PP=$_POST['NIC/PP'];
    $Email=$_POST['email'];
    
    require_once 'config.php';

    $sql="INSERT INTO Applycreditcard (Full_Name,Account_Number,Account_Branch,NIC,Email) 
    VALUES ('$FullName','$AccountNumber','$AccountBranch','$NIC_PP','$Email')";

    if ($conn->query($sql)) {
        echo "Your request has been sent!";
      } else {
        echo "error".$conn->error;
  }
$conn->close();
?>


