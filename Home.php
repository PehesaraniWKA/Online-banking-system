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
                echo "<a href='payment.php'>E-banking</a>";
            }
            else {
                echo "<a href='Register intro.php'>Register</a>"; 
            }
        ?>
            <a href="contactus.php">Contact us</a>
            <a  href="about us.php">About us</a>
            <div class="search-container">
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">
                
        <body>
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
