<?php
    include_once 'header.php'
?>

<!--Navigation bar-->
<div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a  href="Home.php">Home</a>
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
                    <button type="submit" name="submit-search"><img src="images/Search icon.png" height="15px" width="20px"></button>
                </form>
            </div>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">
<div class="article-container">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult =mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                </div>";
                }
            } else {
                echo "There are no results matching your search";
            }
        }
    ?>

</div>
<?php
    include_once 'slide show.php'
?>            

<?php
    include_once 'footer.php'
?>  