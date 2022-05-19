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
                    <span>Full Name : </span>
                        <p class="box"><?php echo $_SESSION["username"]; ?></p>
                    <span>NIC :</span>
                        <p class="box"> <?php echo $_SESSION["usernic"]; ?></p>
                    <span>Home Address :</span>
                        <p class="box"><?php echo $_SESSION["useraddr"]; ?></p>
                </div>    
                <div class="outputBox">    
                    <span>Mobile Number :</span>
                        <p class="box"><?php echo $_SESSION["userphone"]; ?></p>
                    <span>Email Address :</span>
                        <p class="box"><?php echo $_SESSION["useremail"]; ?></p>
                    <span>Special Notes :</span>
                        <textarea disabled rows="2" cols="50" class="boxnote"><?php echo $_SESSION["usernote"] ; ?></textarea>
                </div>     
            </div>     
        </section>
        </body>                  
<?php
include_once 'footer.php'
?>       