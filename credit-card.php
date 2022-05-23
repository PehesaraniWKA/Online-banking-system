<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/credit-card.css">
    
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
        <br>
        <!--Horizontal line-->
        <hr style="width:100%">
        <br>
        
        <!--Credit cards-->

        <h1> Credit Cards </h1><br>
        <div class="for-whome-box">
            <h3> For whom:</h3><h4> Sri lankan citizens between the age of 18-65(For non-nationals: cards can be issued against a foreign country deposit)</h4>
        </div>
        <br>
        <div class="div-row">
            <div class="div-column">
                        <p>ABC Bank is issuing two types of credit cards joining hands with word's biggest card industry service provides under the brands of "VISA" and "mastercard". Customer is given the oppotunity for choose the prefered brand and even both products can be issued for one customer on request. )Fees will be applied for both cards) </p>   
                            <br>
                        <h4>Special benifits : </h4><br>
                            <ul>
                                <li>Purchases: 100% of the credit limit</li>
                                <li>Cash advances: 50% of the credit limit</li>
                            </ul>
            </div>
            <div class="div-column">
                            <br>
        
                        <h3> Onine Application form </h3><br>
                        <a href="form-apply.php" button id="btn-apply" class="apply-btn">Apply Now</button></a></div>
            </div>
        </div>
        <br><br>
        <button type="button" class="collapsible">Card types</button>
        <div class="content">
            <ol>
                <h3><li>Classic Cards (Visa/Mastercards)</li></h3><br>
                 <h3>Features:</h3>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <h3><li>Gold cards (Visa/Mastercards)</li></h3><br>
                <h3>Features:</h3>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <h3><li>Platinum cards</li></h3><br>
                <h3>Features:</h3>
                 <ul>
                    <li>Credit limit : from 100000-199999</li>
                    <li>Seasonal DIscounts & Offers</li>
                    <li>Easy settlement plan</li>
                    <li>24 hours customer service</li>
                    <li>Interest free credit period days</li>
                 </ul>
                <h3><li>Signature cards (Visa)</li><h3><br>
                <h3>Features:</h3>
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
                <h3><li>Online stores</li><h3><br>
                 <div class="column-collapsible">
                    <img src="images/kapruka.png"><br>
                    <br>
                    <img src="images/Darazn.jpg"><br>
                 </div>
                <h3><li>Super markets</li></h3><br>
                <div class="column-collapsible">
                    <img src="images/foodcity.jpg"><br>
                    <br>
                    <img src="images/keels.jpg"><br>

                 </div>
                <h3><li>Home care and electronics</li></h3><br>
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

    <br><br>            
    <?php
    include_once 'footer.php';
    ?> 
    <script type="text/javascript" src="js files/credit-card.js"></script> 
</body>

</html>
