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
    <link rel="stylesheet" href="styles/debit-card.css">
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>ABC Bank</title>
</head>

<body>
    <?php include_once ('header.php');
    ?>
        <!--Navigation bar-->
        <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
            <?php
            if(isset($_SESSION["useruid"])) {
                echo "<a href='Profile.php'>Profile</a>";
                echo "<a href='includes/logout.inc.php'>Logout</a>";
            }
            else {
                echo "<a href='Register intro.php'>Register</a>";
                echo "<a href='Login.php'>Login</a>";
            }
            ?>
            <a href="contactus.php">Contact us</a>
            <a href="about us.php">About us</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <!-- Slide bar -->

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="account.php">Accounts</a>
            <a href="#">Loan&Leasing</a>
            <a href="#">E-banking</a>
            <a href="#">Promotion</a>
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

        <!--Debit cards-->

        <h2> Credit Cards </h2>
        <h4> For whom: Sri lankan citizens between the age of 18-65(For non-nationals: cards can be issued against a foreign country deposit)</h4>
        <p>ABC Visa Debit Card is available to any ABC Bank customer with a savings, current, NRFC, individual/join or proprietorship account. If you have any of these accounts, you are eligible for a PET card which can be used locally and internationally that accept visa cards </p>


        <br><h3>Special Benifits : </h3>
        <ul>
            <li>Withdraw cash 365 days a year, 24 hours a day with over 2 million ATM's and purchase points at over 20 million merchant outlets worldwide </li>
            <li>Debit card daily cash withdrawal limit - 200000.00</li>
            <li>(Foreign currency transaction limit is equivalent to the above limits after conversation)</li>
        <ul>
        
        <button type="button" class="collapsible">Card types</button>
        <div class="content">
            <ol>
                <li>Classic Cards (Visa/Mastercards)</li>
                 <h5>Features:</h5>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <li>Gold cards (Visa/Mastercards)</li>
                <h5>Features:</h5>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <li>Platinum cards</li>
                <h5>Features:</h5>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <li>Signature cards (Visa)</li>
                <h5>Features:</h5>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
        </div>

        <button type="button" class="collapsible">Card offers</button>
        <div class="content">
        <ol>
                <li>Online stores</li>
                 <div class="column-collapsible">
                    <img src="images/kapruka.png"><br>
                    <br>
                    <img src="images/Darazn.jpg"><br>
                 </div>
                <li>Super markets</li>
                <div class="column-collapsible">
                    <img src="images/foodcity.jpg"><br>
                    <br>
                    <img src="images/keels.jpg"><br>

                 </div>
                <li>Home care and electronics</li>
                <div class="column-collapsible">
                    <img src="images/Abans.jpg"><br>
                    <br>
                    <img src="images/Arpico_New.jpg"><br>
                </div>           
    </div>
    
    <button type="button" class="collapsible">Conditions for foreign transactions</button>
        <div class="content">
            <ul>
                <li>Cross border transaction mark-up fee is 10%</li>
                <li>Daily cross border card transaction limits have been temporary reduces as :
                    <ul>
                        <li type="square"> Debit cards - USD 100/- </li>
                        <li type="square"> Credit Cards - USD 150/- </li>
                    </ul>
                <li>For further details contact 1616</li>
            </ul>
        </div>

        <?php
            include_once 'footer.php';
        ?> 
    <script type="text/javascript" src="js files/debit-card.js"></script> 
</body>

</html>