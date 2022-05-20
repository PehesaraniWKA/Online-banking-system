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
    <link rel="stylesheet" href="styles/savingsAccount.css">
</head>
<body>

    <!--Navigation bar-->
    <div class="mainnav">
        <a class="openbtn" onclick="openNav()">&#9776; Services</a>
        <a href="Home.php">Home</a>
        <?php
        if(isset($_SESSION["useruid"])) {
            echo "<a href='Profile.php'>Profile</a>";
        }
        else {
            echo "<a href='Register intro.php'>Register</a>";
        }
        ?>
        <a href="#contact">Contact us</a>
        <a  href="about us.php">About us</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <!--Horizontal line-->
    <hr style="width:100%"> 

     <!--Slide show-->
     <?php
        include_once 'slide show.php'
    ?>

    <!--Saving Accounts cards-->
    <div class="saving-container">
        
        <div class="acc-table">
            <h3>Little One</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>Children from birth to 13 years old</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.1000</li>
                    <li>2% bonus interest.</li>
                    <li>Interest on daily balance.</li>
                    <li>Account automatically transfer for 14+ account.</li>
                </ul>
            </div>
        </div>

        <div class="acc-table">
            <h3>ABC Saving</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>For young adults of 18 years and above</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.2000</li>
                    <li>1% bonus interest.</li>
                    <li>Interest on monthly balance.</li>
                    <li>Loan, leasing ,credit ,debit card facilities and more more facilities for different needs.</li>
                </ul>
            </div>
        </div>

        <div class="acc-table">
            <h3>Senior Citizen</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>Over the age of 60 years</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.3000</li>
                    <li>Up to 500,000 LKR, 3% bonus interest.</li>
                    <li>24/7 banking facilities.</li>
                    <li>Online banking facilities.</li>
                </ul>
            </div>
        </div>
    </div>

    <br><br>

    <div class="saving-container">
        
        <div class="acc-table">
            <h3>14+</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>Children from 14-18 years old</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.2000</li>
                    <li>2% bonus interest.</li>
                    <li>Interest on daily balance.</li>
                    <li>Account automatically transfer for Youth saving account.</li>
                </ul>
            </div>
        </div>

        <div class="acc-table">
            <h3>Youth</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>For young adults of 18 years and above</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.2000</li>
                    <li>1% bonus interest.</li>
                    <li>Interest on monthly balance.</li>
                    <li>Loan, leasing ,credit ,debit card facilities and more more facilities for different needs.</li>
                    <li>After age of 30 account automatically transfer for ABC Saving account.</li>
                </ul>
            </div>
        </div>
        <div class="acc-table">
            <h3>Women</h3>
            <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
            <P>Women of 18 years old or above</P>

            <div class="features">
                <ul>
                    <li>Opening minimum deposit is Rs.3000</li>
                    <li>Free Life Infurance Cover.</li>
                    <li>Higher interest rate above normal savings interest rate.</li>
                    <li>Loans on low interest.</li>
                    <li>Online banking facilities.</li>
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