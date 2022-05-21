<?php
include_once 'header.php'
?>
	<head>
        <link rel="stylesheet" href="styles/loan and leasing.css">        
    </head>

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
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
<!--Horizontal line-->
<hr style="width:100%">
<body>
<h1><center>Loan & Leasing</center></h1>
		<div class="column-lole">
			<div class="card-lole">
				<div class="container-lole">
					<h2 style="color:#408697"><center>Loans<center></h2>
					<div class="title-lole">
						<p><h4>ABC Bank offers different kind of loans. loan terms are agreed to by each party before
						any money is advanced. A loan may be secured by collateral such as mortgage or it may be
						unsecured such as a credit card.<h4></p><br>
				
				<div class="loan-ul">
					<h3 style="color:blue">ABC offers:</h3>
					<ul class="ulist"><h4>
						<li>Personal Loans</li>
						<li>Home Loans</li>
						<li>Term Loans</li>
						<li>Educational Loans</li>
					</h4></ul>
				</div>
                <div class="loan-ul">			
					<h3 style="color:blue">Specific Features:</h3>					
					<ul class="ulist"><h4>
						<li>0% interest for your very first loan</li>
						<li>Quick cash loan in 3 minutes</li>
						<li>Fully online</li>
						<li>No hidden charges</li>
						<li>Guarantors are not required</li>
					</h4></ul>
					</div>
					
					<h2>You can enjoy our FAST and EASY loan approvals</h2>
				
					<a href="Loan.php"><center><h3>See More Here</h3></center></a>
				
				    </div>
			    </div>
		    </div>
		</div>	
			<div class="column-lole">
				<div class="card-lole">
					<div class="container-lole">
					<h2 style="color:#408697"><center>Leasing<center></h2>
					<div class="title-lole">
						<h4>Looking for a hassle free, flexible repayment scheme for your Leasing Facility? 
						ABC Bank is ready to assist you with a competitive interest rate, a package customized to
						suit your budget.</h4><br>
					<h3 style="color:blue">ABC Bank offers leasing for</h3>
					<ul><h4>
						<li>Vehicles - both registered and unregistered</li>
						<li>machinery</li>
					</h4></ul>
				
					<a href="Leasing.php"><center><h3>See More Here</h3></center></a>
				
					</div>
				    </div>
			    </div>
		    </div>
    </body>	
<?php
include_once 'footer.php'
?>  	