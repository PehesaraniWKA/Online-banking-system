<?php
include_once 'header.php'
?>
<!--Navigation bar-->
<div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
            <a class="active" href="#Register">Register</a>
            <a href="#contact">Contact us</a>
            <a href="about us.php">About us</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <br><br><br>
        <p align="center" style="font-size:20px; font-weight:bold; font-color:">Click Here for online Registration
        <button class="registbt" type="button"><a href =Register.php>Register</a></button></p>
<?php
include_once 'slide show.php'
?>            

<?php
include_once 'footer.php'
?>       