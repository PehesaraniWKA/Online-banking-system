<?php 

    $Title=$_POST['title'];
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $MobileNumber=$_POST['mobileNum'];
    $Email=$_POST['email'];
    $NIC_PP=$_POST['NIC/PP'];
    $Product=$_POST['product'];
    $Branch=$_POST['branch'];
    $Remarks=$_POST['remarks'];

    require_once 'config.php';

    $sql="INSERT INTO Inquaries (Title, First_Name, Last_Name, Mobile, Email , NIC, Product, Nearest_Branch, Remarks) 
    VALUES ('$Title','$FirstName','$LastName','$MobileNumber','$Email','$NIC_PP','$Product','$Branch','$Remarks')";

    if ($conn->query($sql)) {
        echo "Thank you! We'll catchup with you soon!";
      } else {
        echo "error".$conn->error;
  }
$conn->close();
?>


