<?php 

    $Title=$_POST['title'];
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $MobileNumber=$_POST['mobileNum'];
    $Email=$_POST['email'];
    $NIC_PP=$_POST['NIC/PP'];
    $Comments=$_POST['comment'];

    require_once 'config.php';

    $sql="INSERT INTO compliments (Title, First_Name, Last_Name, Mobile, Email , NIC, Comments) 
    VALUES ('$Title','$FirstName','$LastName','$MobileNumber','$Email','$NIC_PP','$Comments')";

    if ($conn->query($sql)) {
        echo "Thank you for your compliment";
      } else {
        echo "error".$conn->error;
  }
$conn->close();
?>


