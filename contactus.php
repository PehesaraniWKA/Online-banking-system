<!DOCTYPE html>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/contactus.css">
    
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
                echo "<a href='payment.php'>E-banking</a>";
            }
            else {
                echo "<a href='Register intro.php'>Register</a>";
            }
            ?>
            <a class="active" href="#contact">Contact us</a>
            <a href="about us.php">About us</a>
            <a  href="joinwithus.php">Join with us</a>
        </div>

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
        </div></br>
        <!--Horizontal line-->
        <hr style="width:100%"></br>

        <?php include_once('slide show.php');
        ?>  
        <hr>
        <!--Contact us-->
        <div class="row">
            <div class="column1">
                <br><br>
            <div class="post">
            <h3>Post</h3>
            <p>No: XX, <br>High Level Road, <br>Kottawa </p>
        </div>
            <br> 
        <div class="online">
            <h3>Online</h3>
            <p>info@abcbank.lk</p>
        </div>
            </div>
            <div class="column2">
            <br><br>
            <div class="contact-center">
            <h3>Card Contact Center</h3>
            <p>+94658741235</p>
        </div>
            <br>
        <div class="code">
            <h3>Swift Code</h3>
            <p>ABCXXXX</p>
        </div>
            </div>
            <div class="column3">
            <br><br>
            <div class="call-center">
            <h3>24 x 7 Call Center</h3>
            <p>+9754123624<br>+8452641268</p>
        </div>
            <br> 
        <div class="branch">
            <h3>Nearest Branches</h3>
            <p>Malabe</p>
            <p>Kaduwela</p>
        </div>
            </div>
            <div class="column4">
            <br><br>
            <div class="atm">
            <h3>Nearest ATM</h3>
                <p>Malabe-ATM</p>
                <p>Kaduwela-ATM</p>
                <p>Kottawa-ATM</p>
        </div>
            <br>
        <div class="location">
            <h3>Location</h3>
                <p>ABC Towers, No: XX,Galle Road, <br>Colombo XX, <br>Sri Lanka</p>
                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380991.33186985203!2d79.70523550080387!3d6.905129556441875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2591640b4e0b3%3A0x14fcac803e83edbd!2sBeira%20Lake!5e0!3m2!1sen!2slk!4v1652699424745!5m2!1sen!2slk"><img class="img-location" src="images/map.png" alt="Map_location"></a>
        </div>
            </div>
        </div>
        
</body>

        <?php 
            include_once('footer.php');
        ?>
<?php
    include_once 'chatbot3.php'
?>       
