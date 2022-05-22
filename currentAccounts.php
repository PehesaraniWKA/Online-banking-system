<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once 'header.php'
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/currentAccounts.css">
</head>
<body>

    <!--Navigation bar-->
    <div class="mainnav">
        <a class="openbtn" onclick="openNav()">&#9776; Services</a>
        <a href="Home.php">Home</a>
        <?php
        if(isset($_SESSION["useruid"])) {
            echo "<a href='Profile.php'>Profile</a>";
            echo "<a href='payment.php'>E-banking</a>";
        }
        else {
            echo "<a href='Register intro.php'>Register</a>";
        }
        ?>
        <a href="contactus.php">Contact us</a>
        <a  href="about us.php">About us</a>
    </div>

    <!--Horizontal line-->
    <hr style="width:100%"> 

    <!--Slide show-->
    <?php
        include_once 'slide show.php'
    ?>

    <!--Current Accounts cards-->
    <div class="current-container">
        
        <div class="current-table">
            <h3>ABC Business</h3>
            <img src="images/BwomenMen.jpg" alt="Avatar" style="width:100%">
            <P>Individuals</P>
            <p>(Business women or Business men)</p>

            <div class="current-features">
                <ul>
                    <li>Opening minimum deposit is depend on requirements</li>
                    <li>Loan facilities.</li>
                    <li>Provides monthly account details.</li>
                    <li>Self banking, moblie, internet & voice banking services.</li>
                    <li>Customized cheque books.</li>
                </ul>
            </div>
        </div>

        <div class="current-table">
            <h3>Current Account Personal</h3>
            <img src="images/individuals.jpg" alt="Avatar" style="width:100%">
            <P>Individuals</P>
            <p>(Salaried)</p>

            <div class="current-features">
                <ul>
                    <li>Opening minimum deposit is Rs.5000</li>
                    <li>Minimum charges (service charge and other relevent charges).</li>
                    <li>An internationally vaild debit card is on offer to access your account.</li>
                    <li>Self banking, moblie, internet & voice banking services.</li>
                    <li>Customized cheque books.</li>
                </ul>
            </div>
        </div>
    </div>   

    <!--Footer-->
    <?php
        include_once 'footer.php'
    ?> 

</body>
</html>