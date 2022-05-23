<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/cards.css">
    
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
            <a href="contactus.php">Contact us</a>
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

        <h1> Cards </h1><br>
        <div class="row">
        <div class="column-credit">
            <h2>Credit Crads</h2>
            <p>Make life more rewarding with the freedom of a ABC "VISA" and "Mastercard" Credit Card, a great choice for everyday purcheses..!</p>
            <button id="btn-credit" class="credit-crd-button" ><span>See more</span></button>
        </div>

        <div class="column-debit">
            <h2>Debit Cards</h2>
            <p>Spend your own money when you want and where you want with ABC Visa Debit Card.</p>
            <br>
            <button id="btn-debit" class="debit-crd-button" ><span>See more</span></button>
        </div>
        </div>
        
        <?php 
            include_once('footer.php');
        ?>
        <script type="text/javascript" src="js files/cards.js"></script>
</body>

</html>
