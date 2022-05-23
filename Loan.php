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
            <a  href="about us.php">About us</a>
        </div>
	<br>
	<!--Horizontal line-->
     <hr style="width:100%">

<div class="container-lole2">
		<h2 style="color:#408697">Personal Loans</h2>
		<p><h4>you no longer need to wait to fulfill your aspirations, with Seylan Bank Personal Loans in Sri Lanka.<br>
			   We are here to help you at your financial needs by providing our personal loan</h4></p>
	    
		<ul class="ulist-ploan" style="list-style-type:circle"><h4>
			<li>Loans are available from LKR 150,000 to LKR 10,000,000</li>
			<li>Repayment period maximum 7 years</li>
			<li>stunning interest rates</li>
			<li>Minimum Documentation</li>
		</h4></ul>
		
		<h3 style="color:blue"><u>Eligibility</u></h3>
		
		<ul class="ulist-ploan"style="list-style-type:circle"><h4>
			<li>Age must be between 20-60 years</li>
			<li>minimum monthly income of LKR 50,000</li>
			<li>Monthly salary to be remitted to ABC bank account</li>
		</h4></ul><br>
		
		<h3 style="color:blue"><u>how to apply</u></h3><br>
		
		<h3>option 1:</h3><h4>submit your Request Form. Bank will contact you less than 48hrs.</h4>
		<h3>option 2:</h3><h4>Visit nearest ABC branch</h4>
		<h3>option 3:</h3><h4>call our hotline +9411 222 33 44</h4><br>
		
		<h3 style="color:blue"><u>Documentation Requirement</u></h3>
		
		<ul class="ulist-ploan" style="list-style-type:circle"><h4>
			<li>national ID/Driving License/Passport</li>
			<li>Conformation letter from employer</li>
			<li>Pay slips and last 3 bank statement</li>
			<li>utility bill</li>
		</h4></ul><br>
		<section class="loantable">
		<table class="ploan" style="width:75%">
			<tr>
				<th>Tenure</th>
				<th>Salary LKR 300,00 & above ~ Rate %p.a.</th>
				<th>Salary LKR 100,00 to LKR 299,999 ~ Rate %p.a.</th>
				<th>Salary LKR 100,00 & above ~ Rate %p.a.</th>
			</tr>
			<tr>
				<td>01 Year</td>
				<td>18.00</td>
				<td>18.50</td>
				<td>20.00</td>
			</tr>
			<tr>
				<td>02 Year</td>
				<td>21.00</td>
				<td>21.50</td>
				<td>22.00</td>
			</tr>
			<tr>
				<td>03 Year</td>
				<td>22.00</td>
				<td>22.50</td>
				<td>23.00</td>
			</tr>
			<tr>
				<td>04 Year</td>
				<td>22.50</td>
				<td>22.75</td>
				<td>23.00</td>
			</tr>
				<tr>
				<td>05 Year</td>
				<td>23.50</td>
				<td>24.00</td>
				<td>24.25</td>
			</tr>
				<tr>
				<td>06 Year</td>
				<td>24.50</td>
				<td>25.00</td>
				<td>25.25</td>
			</tr>
				<tr>
				<td>07 Year</td>
				<td>24.50</td>
				<td>25.00</td>
				<td>25.25</td>
			</tr>
		</table><br><br>
		</section>
	</div>	
	 <!--Horizontal line-->
     <hr style="width:100%">
	 
	<div class="container-lole2">
		<h2 style="color:#408697">Home Loan</h2>
		
		<p><h4>A Seylan home loan can range from rupees five hundred thousand to one hundred million (Rs. 500,000 – Rs.100, 000,000)<br>
			   by submitting minimum documentation. Seylan home loans are offered at a competitive interest rate along with special Advisory Services.</h4></p>
		
		<ul style="list-style-type:circle"><h4>
			<li>Attractive interest rate</li>
			<li>Balance tranfer facility</li>
			<li>Minimum Rs.500,000 loan amount</li>
			<li>Condominium Apartment</li>
		</h4></ul>
		
		<h3 style="color:blue"><u>Eligibility</u></h3>
		
		<ul style="list-style-type:circle"><h4>
			<li>Professionals</li>
			<li>parents with child over 18 years old</li>
			<li>businessmen</li>
			<li>Sri Lankans employed abroad</li>
		</h4></ul><br>
		
		<table class="ploan" style="width:75%">
			<tr>
				<th>Tenure(fixed)</th>
				<th>Salary above LKR 200,00 ~ Rate %p.a.</th>
				<th>other Rate Rate %p.a.</th>
			</tr>
			<tr>
				<td>01 Year</td>
				<td>18.00</td>
				<td>18.50</td>
				
			</tr>
			<tr>
				<td>02 Years</td>
				<td>21.00</td>
				<td>21.50</td>
			
			</tr>
			<tr>
				<td>05 Years</td>
				<td>22.00</td>
				<td>22.50</td>
		
			</tr>
			
		</table><br><br>
	</div>
		 <!--Horizontal line-->
        <hr style="width:100%">
		
	<div class="container-lole2">
		<h2 style="color:#408697">Term Loan</h2>
		
		<p><h4>A term loan is a monetary loan that is repaid in regular payments over a set period of time.<br>
				Term loans are granted for specific purposes and are fixed as to, currency, amount, and period.</h4></p>
		
		<ul style="list-style-type:circle"><h4>
			<li>Financial and other Benefits</li>
			<li>Costs (Interest, Fees, Charges, Commissions)</li>
			<li>Procedure to be followed to obtain the service</li>
		</h4></ul>
		
		<h3 style="color:blue"><u>Terms and conditions</u></h3>
		
		<ul style="list-style-type:circle"><h4>
			<li>When applying for a loan, the lender should specify what the loan terms are before finalizing any borrowing agreement. </li>
			<li>The bank reserves the right to reject any application without assigning reasons</li>
			<li>Term loans will be considered for a client having a satisfactory monthly income acceptable to the bank.</li>
		</h4></ul>
	</div>
	 <!--Horizontal line-->
        <hr style="width:100%">
	
	<div class="container-lole2">
		<h2 style="color:#408697">Education/Scholar Loan</h2>
		
		<p><h4>ABC Scholar Education Loan provide, financial assistance for local and foreign higher education.</h4></p>
		
		<h3 style="color:blue"><u>Benefits</u></h3>
		
		<ul style="list-style-type:circle"><h4>
			<li>Joint Loans are available</li>
			<li>Can borrow from any islandwide branch</li>
			<li>Local education such as CIMA, CIM, SLIM, IPM, AAT, Fashion Degrees & MBA.</li>
			<li>Overseas education</li>
			<li>Repayment period up to 7 years</li>
		</h4></ul><br>
		<h3 style="color:blue"><u>Eligibile Persons</u></h3>
		
		<ul style="list-style-type:circle"><h4>
			<li>Parents or Guardians of students</li>
			<li>Working Professionals</li>
			<li>Self employed persons with a regular income</li>
		</h4></ul><br>
		<h3 style="color:blue"><u>Documents required</u></h3>
		
		<ul style="list-style-type:circle"><h4>
			<li>income details with pay slips</li>
			<li>Bank Account Statements</li>
			<li>University or Institute offer Letter with course details / Cost Details.</li>
		</h4></ul><br>
		
		<table class="ploan" style="width:75%">
			<tr>
				<th>Tenure</th>
				<th>Secured (CAT A) Rate %p.a.</th>
				<th>Unsecured (CAT B) Rate %p.a.</th>
			</tr>
			<tr>
				<td>01 Year</td>
				<td>18.00</td>
				<td>19.00</td>
				
			</tr>
			<tr>
				<td>02 Year</td>
				<td>20.50</td>
				<td>21.50</td>
				
			</tr>
			<tr>
				<td>03 Year</td>
				<td>21.50</td>
				<td>22.50</td>
			
			</tr>
			<tr>
				<td>04 Year</td>
				<td>22.00</td>
				<td>23.00</td>
				
			</tr>
				<tr>
				<td>05 Year</td>
				<td>24.00</td>
				<td>25.00</td>
			
			</tr>
				<tr>
				<td>06 Year</td>
				<td>25.00</td>
				<td>26.00</td>
				
			</tr>
				<tr>
				<td>07 Year</td>
				<td>25.00</td>
				<td>26.00</td>
				
			</tr>
		</table><br><br>
		
	</div>	

 <!--Horizontal line-->
 <hr style="width:100%">
 	<?php
        include_once 'footer.php'
    ?>  