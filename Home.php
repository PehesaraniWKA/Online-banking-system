<?php
    include_once 'header.php'
?>

<!--Navigation bar-->
    <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a class="active" href="Home.php">Home</a>
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
        <body>
            <!--Horizontal line-->
            <hr style="width:100%">
            <?php
                echo "<div class='welcome'>";
                if(isset($_SESSION["useruid"])) {
                    echo "<p align='center'>Hello there " .$_SESSION["useruid"]." </p>";
                }
                echo "</div>";
            ?>
            
        </body>

<?php
    include_once 'slide show.php'
?>            

<?php
    include_once 'footer.php'
?>   

<?php
    include_once 'chatbot3.php'
?>           