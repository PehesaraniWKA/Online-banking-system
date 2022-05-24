<?php
    include_once 'header.php'
?>
<!--Navigation bar-->
<div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home.php">Home</a>
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
            <a href="about us.php">About us</a>
            <a class="active" href="joinwithus.php">Join with us</a>
            <div class="search-container">
                <form action="search.php" method="POST">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" name="submit-search"><img src="images/Search icon.png" height="15px" width="20px"></button>
                </form>
            </div>
        </div>
        <br>
        <!--Horizontal line-->
        <hr style="width:100%">

    <body>

        
        <!-- Baner image for new tab-->

        <!-- <Body background=" bk1.png">    Background image for new tab-->
        <div class="body-join">
        <div class="container-join">
            
            <!-- Bank job panal-->
            <div class="box">
                <span class="hovertext" data-hover="What we are loking for? The ability to consult with our clinets, advising on better processes/systemes">   <!-- hover popup window-->
                 <div class = "content" id = "d1">
                    <img src="images/d1.png" width="270px" height="250px">
                </span>
            </div> 
                </div>
                 <div class="box">
                 <span class="hovertext" data-hover="Proven work experience as a field officer, loan agent or similar role">   <!-- hover popup window-->
                 <div class = "content" id = "d2">
                 <img src="images/d2.png" width="270px" height="250px">
                 </span>
             </div>
            </div>
                 <div class="box">
                 <span class="hovertext" data-hover="An ability and experience with account managment systems">   <!-- hover popup window-->
                 <div class = "content" id = "d3">
                 <img src="images/d3.png" width="270px" height="250px">
                 </span>
            </div>
            </div>
                 <div class="box">
                 <span class="hovertext" data-hover="Work experience as a field officer, loan agent or similar role">   <!-- hover popup window-->
                 <div class = "content" id = "d4">
                 <img src="images/d4.png" width="270px" height="250px">
                 </span>
           </div>



           
      </div>
     </div>
     </div>



     <!--   Form Content-->
     
     <div class = "pagebox">
         <h2> Join with ABC team </h2>
         <form action="joininsert.php" method="post">

        
              <input type="text" id="name" name="name" class="inputj" placeholder="  Enter your name" required>
            
              <input type="email" id="email" name="email" class="inputj" placeholder="Enter Your Email">

              <input size="1" type="text" id="about" name="about" class="inputj" placeholder="Tell us about you" required>

              
               <select id="vacancy" name="vacancy">
                <option value="Marketing">Marketing Representative</option>
                <option value="loan">Loan Officer</option>
                <option value="bank">Bank Tellers</option>
                <option value="analyst">Investment Analyst</option>
               </select>

               <a href="Home.php"><input type="submit"  class="joinbtn" value="Submit"></a>

            </form>
          </div>


     

    </body>
 

    <?php
        include_once 'footer.php'
    ?>  
    <?php
    include_once 'chatbot3.php'
    ?>