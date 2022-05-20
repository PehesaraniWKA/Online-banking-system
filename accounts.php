<!DOCTYPE html>
<html>

<?php
include_once 'header.php'
?>

<head>
<link rel="stylesheet" href="styles/account.css">
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
    <?php
        include_once 'slide show.php'
    ?>    
    <div class="a-row">
        <div class="a-column">
            <div class="account">
                <img src="images/img_snow.jpg" alt="Avatar" style="width:100%">
                <div class="acc-container">
                <p><a href="savingAccounts.php" target= new><button class="calbutton">Saving Accounts</button></a></p>
                </div>
            </div>
        </div>
        <div class="a-column">
            <div class="account">
                <img src="images/img_forest.jpg" alt="Avatar" style="width:100%">
                <div class="acc-container">
                    <p>Current Accounts</p> 
                </div>
            </div>
        </div>
    </div>
</body>       
    <?php
        include_once 'footer.php'
    ?>  
</html>