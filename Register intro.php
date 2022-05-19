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
<!--Horizontal line-->
 <hr style="width:100%">
<?php
include_once 'slide show.php'
?>            
        <p align="center" style="font-size:20px; font-weight:bold; font-color:"><input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()" /> Accept privacy policy and terms</p>
        <p align="center" style="font-size:15px; font-weight:bold; font-color:" class="p"><a href = "regform/Pricacy statement.pdf" download>Download Privacy statement</a></p>
        <p align="center" style="font-size:20px; font-weight:bold; font-color:">Click Register for Registration Form
        <button class="registbt"  type="button" id="regbtn" disbled><a href =Register.php>Register</button></p></a>
        

<?php
include_once 'footer.php'
?>              