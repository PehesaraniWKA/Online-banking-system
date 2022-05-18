<?php
include_once 'header.php'
?>
<head>
<!--link rel="stylesheet" href="styles/account.css"-->
</head>
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
    <?php
        include_once 'slide show.php'
    ?>    

            <p>amamamamamamamamamamamamamammammamamamammamamamamammamamamamamamamamammamamamammam</p>
            
    <?php
        include_once 'footer.php'
    ?>  