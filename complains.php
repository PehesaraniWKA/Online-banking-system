<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/helpNsup.css">
    
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>ABC Bank</title>
</head>

<body>
    
    <div id="main">
        <section id="top">
            <!--Avater image-->
            <img align="left" src="images/banklogo.png" alt="Logo" width="400px" height="200px">
            <div align="right">
            </div>

            <!--<center>
                <h1> ABC BANK</h1>
            </center>-->
        </section>
        
        <!-- Slide bar -->

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="accounts.php">Accounts</a>
                <a href="loan and leasing.php">Loan&Leasing</a>
                <a href="cards.php">Cards</a>
                <a href="Financial calculators.php">Financial Calculators</a>
            <?php
                if(isset($_SESSION["useruid"])) {
                    echo "<a href='openNewbankAcc.php'>Open New Bank Account</a>";
                }
            ?>
            <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>

            <!--Calender-->
            <section>
                <div class="box">
                    <div class="container">
                        <div id="mycalendar"></div>
                    </div>
                </div>
            </section>
            <script src="js files/mycalendar.js"></script>
            <script>
                mycalendar.draw({
                    target: '#mycalendar',
                    type: 'month',
                    dayformat: 'full',
                    monthformat: 'full',
                    highlighttargetdate: true,
                    prevnextbutton: 'show' //enable prevnextbutton

                })
            </script>
        </div>

        <!--Horizontal line-->
        <hr style="width:100%">
        <br>

        <!--Navigation bar-->
        <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            
            <a class="active" href="#helpandsupport">Help and Support</a>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">
        <br>

    <!--Nav bar-->
    <center>
        <hr>
    <div class="helpNsup-nav">
        
        <a href="inquaries.php">Inquaries</a>
        <a href="compliments.php">Compliments</a>
        <a href="feedback.php">Feedback</a>
        <a class="active" href="#complains">Complains</a>
</div>
            </center>
<br/><br/> 

<h2> We are listening to you </h2>
<h3> Raising you concerns </h3>
<p>We have customer service staff at our branches and 24/7 Call Cener to handle your concerns. They will make every effort to resolve issues efficiently to your satisfaction. However, in the event that you are not entriely satisfied with the manner in which you have been served, or if our products do not match your expectations, you may provide your feedback in the following manner </p>

<div class="form-Help-sup">
    <!--Complains form-->
<form method="post" action="fdbc-data.php">
        <lable for="title">Title :</lable>
        <select name="title">
            <option value="accounts">Accounts</option>
            <option value="loan-leasing">Loan and Leasing</option>
            <option value="E-banking">E-banking</option>
            <option value="Promotions">Promotions</option>
        </select>
        <br/><br/>
        <lable for="fname">First Name :</lable>
            <input type="text" name="fname" placeholder="First Name"> <br/><br/>
        <lable for="lname">Last Name :</lable>
            <input type="text" name="lname" placeholder="Last Name"> <br/><br/>
        <lable for="mobileNum">Mobile Number :</lable>
            <input type="text" name="mobileNum" placeholder="Mobile Number"> <br/><br/>
        <lable for="email">Email :</lable>
            <input type="email" name="email" placeholder="Email"> <br/><br/>
        <lable for="NIC/PP">NIC/PP Number :</lable>
            <input type="text" name="NIC/PP" placeholder="NIC/PP"> <br/><br/>
        
        <lable for="cust">Are you a bank customer :</lable> 
            <input type="radio" name="cust" value="Yes" checked="checked"> Yes 
            <input type="radio" name="cust" value="No"> No <br/><br/>
        <lable for="comment">Your comments :</lable>
            <textarea name="comment" rows="8" cols="80"></textarea>
            <br/><br/>
            <input type="checkbox" id="checkbox" onclick="enableButton()"> Confirm your complain
            <input name="Submit" id="submitBtn" type="submit" value="submit" disabled>
        
</form>
</div>
<h3> Submit your complain online or </h3>
<br>
<p class="helpNsup-lastpara"><em> Email us: customerexperience@ABC.lk </p>
<p class="helpNsup-lastpara"> write us: No:XX, Galle Road, Colombo XX, SriLanka. </em></p>

<?php
include_once 'footer.php';
?>

    <script src="js files/helpNsup.js"></script>
</body>

</html>
