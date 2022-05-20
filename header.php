<?php
session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <title> ABC BANK </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/Home.css">
        <!-- Load icon library (get a search icon)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="styles/financialCalculators.css">
        <link rel="stylesheet" href="styles/about us.css">
        <link rel="stylesheet" href="styles/loan and leasing.css">        
    </head>

    <body>

        <div id="main">
            <section id="top">
                <!--Avater image-->
                <img align="left" src="images/Bank logo.png" alt="Logo" width="400px" height="200px">
                
                <?php
                    if(isset($_SESSION["userimg"])) {
                        echo "<div align='right'><img src=uploadedimage/".$_SESSION['userimg']." alt='Avatar' class='avatar'></div>";
                    }
                    else {
                        echo "<div align='right'><img src='images/Avatar.png' alt='Avatar' class='avatar'></div>";
                    }
                ?>
                <?php
                    if(isset($_SESSION["useruid"])) {
                        echo "<div align='right'
                        <!--Login button-->
                        <button class='loginbt' type='button'><a href ='includes/logout.inc.php'>Logout</a></button>
                        </div>";
                    }
                    else {
                        echo "<div align='right'>
                        <!--Login button-->
                        <button class='loginbt' type='button'><a href ='Login.php'>Log in</a></button>
                        </div>"; 
                    }
                ?>
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
                <a href="payment.php">E-banking</a>
                <a href="#">Promotion</a>
                <a href="cards.php">Cards</a>
                <a href="Financial calculators.php">Financial Calculators</a>
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
            
