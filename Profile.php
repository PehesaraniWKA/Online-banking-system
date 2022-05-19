<?php
include_once 'header.php'
?>
<!--Navigation bar-->
<div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
            <?php
            if(isset($_SESSION["useruid"])) {
                echo "<a class='active' href='Profile.php'>Profile</a>";
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
<body class="profile"> 
<?php echo "<p align='center'> <img src=uploadedimage/".$_SESSION['userimg']." alt='Avatar' class='profile-img'></p>"; ?>
        <section class="userprofile">
            <div class="proali">
                <div class="outputBox">
                    <span>User name : <?php echo $_SESSION["username"]; ?></span>
                    <span>NIC :<?php echo $_SESSION["usernic"]; ?></span>
                    <span>Home Address :<?php echo $_SESSION["useraddr"]; ?></span>
                </div>    
                <div class="outputBox">    
                    <span>Mobile Number :<?php echo $_SESSION["userphone"]; ?></span>
                    <span>Email Address :<?php echo $_SESSION["useremail"]; ?></span>
                    <span>Special Notes :<?php echo $_SESSION["usernote"] ; ?></span>
                </div>     
            </div>     
        </section>
        </body>                  
<?php
include_once 'footer.php'
?>       