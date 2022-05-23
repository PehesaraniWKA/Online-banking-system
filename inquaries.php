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
        <!--Horizontal line-->
        <hr style="width:100%">

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
        <br>
        <!--Horizontal line-->
        <hr style="width:100%">

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
        
        <a class="active" href="#inquaries">Inquaries</a>
        <a href="compliments.php">Compliments</a>
        <a href="feedback.php">Feedback</a>
        <a href="complains.php">Complains</a>
</div>
            </center>

<br/><br/>
    <!--inquaries form-->
    <div class="form-Help-sup">
    <form method="post" action="inq-data.php">
        <lable for="title">Title : </lable>
        <select name="title" required>
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
        <lable for="email">Email Address :</lable>
            <input type="email" name="email" required placeholder="Email"> <br/><br/>
        <lable for="NIC/PP">NIC/PP Number :</lable>
            <input type="text" name="NIC/PP" required placeholder="NIC/PP"> <br/><br/>
        <lable for="product">Yor Product :</lable> 
        <select name="product">
            <option value="Product-1">Product-1</option>
            <option value="Product-2">Product-2</option>
            <option value="Product-3">Product-3</option>
            <option value="Product-4">Product-4</option>
        </select><br/><br/>
        <lable for="branch">Nearest Branch</lable> 
            <select name="branch">
                <option value="Malabe">Malabe</option>
                <option value="Kottawa">Kottawa</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Galle">Galle</option>
            </select><br/><br/>
        <lable for="prefer-method">Prefered Method of Communication : </lable>
            <input type="radio" name="prefer-method" value="Mobile" checked="checked"> Mobile 
            <input type="radio" name="prefer-method" value="Email"> Email <br/><br/>
        <lable for="remarks">Remarks : </lable>
            <textarea name="remarks" rows="8" cols="80"></textarea>
        <br/><br/>
        <input type="checkbox" id="checkbox" onclick="enableButton()"> Confirm your inquary
        <input name="Submit" id="submitBtn" type="submit" value="submit" disabled>
</form>
</div>

<?php
include_once 'footer.php';
?>

    <script src="js files/helpNsup.js"></script>
</body>

</html>
