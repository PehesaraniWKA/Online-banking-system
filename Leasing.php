<?php
    include_once 'header.php'
?>
    <head>
        <link rel="stylesheet" href="styles/loan and leasing.css">        
    </head>


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


    <div class="container-lole2">
        <h2 style="color:#408697">Leasing</h2>

        <p>
            <h4>Looking for a flexible repayment scheme for your Leasing Facility? ABC Leasing is ready to assist you and guide you with a competitive interest rate,<br> a package customized to suit your budget.Personal or business purchase, ABC Bank offer
                leasing for Vehicles or Equipment/ Machinery.</h4>
        </p>

        <h3 style="color:blue"><u>what to expect from us</u></h3>

        <ul style="list-style-type:circle">
            <h4>
                <li>Cash in Emergency</li>
                <li>Lease Transfer</li>
                <li>Vehicle Upgrade</li>
                <li>Easy Lease Rental</li>
                <li>No Early Settlement Fee</li>
                <li>Ability to Extend the Period</li>
            </h4>
        </ul><br>

        <h3 style="color:blue"><u>Leasing of Vehicles</u></h3>

        <ul style="list-style-type:circle">
            <h4>
                <li>Brand new vehicles:</li>
                <ul style="list-style-type:square">
                    <p>
                        <li>The invoice should be lended to the bank informing details of vehicle including engine and chassis number and the amount to be financed</li>
                    </p>
                </ul>
                <li>Unregistered, reconditioned, used vehicles:</li>
                <ul style="list-style-type:square">
                    <p>
                        <li>invoice need to addressed to the bank</li>
                        <li>A valuation should be addressed to the bank</li>
                    </p>
                </ul>
                <li>Registered vehicle:</li>
                <ul style="list-style-type:square">
                    <p>
                        <li>Vehicle should not exceed ten years after the manufacturing date</li>
                        <li>Invoice should be addressed to the bank</li>
                    </p>
                </ul>
            </h4>
        </ul><br>

        <h3 style="color:blue"><u>Leasing of Machinery</u></h3>

        <ul style="list-style-type:circle">
            <h4>
                <li>Equipment should be Brand new</li>
                <li>Invoice should be addressed to the bank</li>
                <li>Documents Required</li>
                <ul style="list-style-type:square">
                    <p>
                        <li>Copy of (NIC/PP/DL)</li>
                        <li>Salary slip</li>
                        <li>Letter from employer</li>
                        <li>Last six months bank statements</li>
                    </p>
                </ul>
            </h4>
        </ul><br>


    </div>

    <!--Horizontal line-->
    <hr style="width:100%">
    <?php
        include_once 'footer.php'
    ?>  