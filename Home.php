<?php
    include_once 'header.php'
?>

<head>
    
    <title>Home</title>
</head>

<body>
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
            <a  href="joinwithus.php">Join with us</a>
            <div class="search-container">
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" name="submit-search"><img src="images/Search icon.png" height="15px" width="20px"></button>
                </form>
            </div>
        </div></br>
        <!--Horizontal line-->
        <hr style="width:100%">
        <body>
            <?php
                echo "<div class='welcome'>";
                if(isset($_SESSION["useruid"])) {
                    echo "<p align='center'>Welcome " .$_SESSION["useruid"]." </p>";
                }
                echo "</div>";
            ?>
          
        </body>

    <?php
        include_once 'slide show.php'
    ?> 
    <br><br>
    <div class="h-row">
        <div class="h-column">
            <div class="h-card">
            <a href="accounts.php"><img src="images/home-account.png" alt="accounts" style="width:100%"></a>
            </div>
        </div>

        <div class="h-column">
            <div class="h-card">
            <a href="cards.php"><img src="images/home-cards.png" alt="cards" style="width:100%"></a>
            </div>
        </div>
        
        <div class="h-column">
            <div class="h-card">
            <a href="Login.php"><img src="images/home-Ebanking.png" alt="E-banking" style="width:100%"></a>
            </div>
        </div>
        
        <div class="h-column">
            <div class="h-card">
            <a href="loan & leasing.php"><img src="images/home-Loan&Leasing.png" alt="Loan&Leasing" style="width:100%"></a>
            </div>
        </div>
    </div>

    <br><br>
</body>

<?php
    //include_once 'boxmanu.php'
?>    

<?php
    include_once 'footer.php'
?>   

<?php
    include_once 'chatbot3.php'
?>           
