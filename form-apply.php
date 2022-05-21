<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/form-apply.css">
    
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>ABC Bank</title>
</head>
<body>
<div class="form-apply"> <h2> Apply Credit Card </h2>
<form method="post" action="submit-creditform.php">
        <br/><br/>
        <lable for="fullname">Full Name :</lable>
            <input type="text" name="fullname" placeholder="Full Name"> <br/><br/>
        <lable for="accnum">Account Number :</lable>
            <input type="text" name="accnum" placeholder="Account Number"> <br/><br/>
        <lable for="accbranch">Account Branch :</lable>
            <input type="text" name="accbranch" placeholder="Account Branch"> <br/><br/>
        <lable for="NIC/PP">NIC/PP Number :</lable>
            <input type="text" name="NIC/PP" placeholder="NIC/PP"> <br/><br/>
        <lable for="email">Email :</lable>
            <input type="email" name="email" placeholder="Email"><br><br>
        
        <input type="checkbox" id="checkbox" onclick="enableButton()"> Accept Bank Terms and Conditions
        <input name="Submit" id="submitBtn" type="submit" value="submit" disabled>
</form>
</div>
<script src="js files/form-apply.js"></script>
</body>
</html>