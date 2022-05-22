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
            <a class="active" href="#about">About us</a>
        </div></br>
 <!--Horizontal line-->
 <hr style="width:100%"></br>
        <body>
	<div class="vm">
		<div class="about-section">
			
			<div class="intro">
				<img src="images/au intro.jpeg" alt="intro">
			</div> 
		</div>
		<br>
		<br>
		
		<!--Vision and Mission-->
		
		<div class="column-vm">
			<img src="images/vision.jpeg" alt="vision" style="width:100%">
		</div>
		<div class="column-vm">
			<img src="images/mission.jpeg" alt="mission" style="width:100%">
		</div>
	</div>
		<br>
	
		 <!--Horizontal line-->
        <hr style="width:100%">
		
		<br>
		<!--awards and achievements-->
		<h1 style="text-align:center"><b>Awards & Achievements</b></h1><br>
		<h3 style="text-align:center"> Year after year we are awarded with new awards by local and foreign independent<br> 
					organizations which have recognized ABC Bank for its outstanding contribution<br> to the Banking Industry. 
					few Sri Lankan banks have won such awards for excellence</h3>
		<br><br>	
		
			<div class="column-awa">
				<div class="card-awa">
					<div class="container-awa">
					<h2>HRM awards</h2>
					<div class="title-awa">
						<p>ABC Bank awarded Gold at National HRM Awards in 2017</p>
					</div>
				    </div>
			    </div>
		    </div>
			<div class="column-awa">
				<div class="card-awa">
					<div class="container-awa">
					<h2>Rated by Fitch Ratings</h2>
					<div class="title-awa">
						<p>In recognition of its strong franchise, good profitability, sound asset quality and capitalization 
						   ABC Bank has been rated AA (lka) by Fitch Ratings Lanka Ltd.</p>
					</div>
				    </div>
			    </div>
		    </div>
			<div class="column-awa">
				<div class="card-awa">
					<div class="container-awa">
					<h2>Best Sri Lankan Trade Bank 2015’ by Trade Finance</h2>
					<div class="title-awa">
						<p>The ABC Bank has been adjudged the ‘Best Trade Bank’ in Sri Lanka by 
						   Trade Finance magazine of the UK. The 2015 Award won by ABC Bank is its fourth Best
						   Trade Bank Award since Trade Finance began presenting such an award in 2009.</p>
					</div>
				    </div>
			    </div>
		    </div>
			<div class="column-awa">
				<div class="card-awa">
					<div class="container-awa">
					<h2>JASTECA CSR Award</h2>
					<div class="title-awa">
						<p>The ABC Bank began 2016 on a winning note,
						taking Gold and Silver for its corporate social responsibility initiatives in
						Education and Healthcare respectively at the JASTECA CSR Awards presented by
						the Japan Sri Lanka Technical & Cultural Association.</p>
					</div>
				    </div>
			    </div>
		    </div>
					
		 <!--Horizontal line-->
        <hr style="width:100%">
		
		<!--director board-->
	   
		<h1 style="text-align:center"><b>Board of Directors</b></h1>
		
			<div class="column-mem">
				<div class="card-mem">
				<img src="images/chairman.jfif" alt="Nisal" class="center-mem">
					<div class="container-mem">
					<h2>Prof.Nisal Narasinghe</h2>
					<div class="title-mem"><h4>Chairman</h4>
					<p>Prof. Nisal Narasinghe has been serving as a Non-Executive Independent Director of the ABC Bank since July 2013 and 
					   He obtained BSc It Degree in Software Engineering with first class honours from the SLIIT university.</p>
					<p>nisal@example.com</p>
					</div>
				</div>
			</div>
		  </div>

		  <div class="column-mem">
			<div class="card-mem">
			  <img src="images/director.jpg" alt="Ama" class="center-mem">
			  <div class="container-mem">
				<h2>Mrs.Ama Pahesarani</h2>
				<div class="title-mem"><h4>Managing Director</h4>
				<p>Mrs. Ama Pahesarani joined the ABC Bank as the Managing Director in 2002.
				   she obtained BSc Eng degree in Civil Engineering with first class honours from the SLIIT University.</p>
				<p>ama@example.com</p>
				</div>
			  </div>
			</div>
		  </div>

		  <div class="column-mem">
			<div class="card-mem">
			  <img src="images/executive director.jpg" alt="Dinakara" class="center-mem">
			  <div class="container-mem">
				<h2>Mr.Dinakara Chathuranga</h2>
				<div class="title-mem"><h4>Executive Director</h4>
				<p>Mr. Dinakara Chathuranga is a senior banker with over 15 years of banking experience 
				   with ABC Bank and is appointed as Executive Director from 10th june, 2021. hes fully qualified in CIMA
				   and holds an MBA in Banking from university of London.</p>
				<p>dinakara@example.com</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="column-mem">
			<div class="card-mem">
			  <img src="images/manager22.jpg" alt="Pathum" class="center-mem">
			  <div class="container-mem">
				<h2>Dr.Pathum Dilhari</h2>
				<div class="title-mem"><h4>Director</h4>
				<p>Dr. Pathum Dilhari is a director in ABC Bank since 2011 and holds an MBBS degree and a Master’s Degree.
				   and she is a former Senior Lecturer in the Faculty of Medicine, University of Kelaniya for 10 years.</p>
				<p>pathum@example.com</p>
				</div>
			  </div>
			</div>
		  </div>
		  
		 <!--Horizontal line-->
        <hr style="width:100%">
		  <br>
		  
		 <!--senior management-->
		
		  <h1 style="text-align:center"><b>Senior Management</b></h1>
		
			<div class="column-mem">
				<div class="card-mem">
				<img src="images/Acting Chief Risk Officer.jpg" alt="senior1" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Nishantha Priyasooriya</h2>
					<div class="title-se">
					<h4>Acting Chief Risk Officer</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		  <div class="column-mem">
				<div class="card-mem">
				<img src="images/Chief Information Officer.jfif" alt="senior2" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Ranawaka Priyasad</h2>
					<div class="title-se">
					<h4>Chief Information Officer</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		    <div class="column-mem">
				<div class="card-mem">
				<img src="images/Company Secretary.jpg" alt="senior3" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Uthpala Dias</h2>
					<div class="title-se">
					<h4>Company Secretary</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		   <div class="column-mem">
				<div class="card-mem">
				<img src="images/Assistant General Manager IT.jfif" alt="senior4" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Kasun Premarathne</h2>
					<div class="title-se">
					<h4>Assistant General Manager IT</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		   <div class="column-mem">
				<div class="card-mem">
				<img src="images/Head of Compliance.jpg" alt="senior5" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Piyal Kodithuwakku</h2>
					<div class="title-se">
					<h4>Head of Compliance</h4>
					</div>
				</div>
			</div>
		  </div>
		  <div class="column-mem">
				<div class="card-mem">
				<img src="images/Head of Audit.jpg" alt="senior6" class="center-mem">
					<div class="container-mem">
					<h2>Mr.Sunil Perera</h2>
					<div class="title-se">
					<h4>Head of Audit</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		    <div class="column-mem">
				<div class="card-mem">
				<img src="images/Chief Financial Officer.jpg" alt="senior7" class="center-mem">
					<div class="container-mem">
					<h2>Mrs.Kanthi Jeewani</h2>
					<div class="title-se">
					<h4>Chief Financial Officer</h4>
					</div>
				</div>
			</div>
		  </div>
		  
		    <div class="column-mem">
				<div class="card-mem">
				<img src="images/Deputy General Manager HR.jpg" alt="senior8" class="center-mem">
					<div class="container-mem">
					<h2>Mrs.Prema Shanthi</h2>
					<div class="title-se">
					<h4>Deputy General Manager HR</h4>
					</div>
				</div>
			</div>
		  </div>
		 
		 <!--Horizontal line-->
        <hr style="width:100%">
		
		<h1 style="text-align:center"><b>Our History</b></h1><br>
		<h3 style="text-align:center"><p>ABC Bank has 75 years of unparalleled growth and achievement<span id="points">...</span><span id="moreText"> Having made a distinctive mark<br>
                                	  in Sri Lankan banking history, we stand out for our superior service and technological superiority.<br>
									  ABC Bank was Sri Lanka’s pioneer development bank incorporated in 1947 under an Act of World War 2. <br>
									  The proposal to set up ABC was first presented by the first World Bank mission.<br>
									  The unique structure that was created at the incorporation of ABC was designed through a collaborative effort between<br>
									  the Government of Sri Lanka and the World Bank. ABC became one of the first Development Banks to be instituted in South Asia.<br>
									  Throughout our history we gave marvelous experience to our customers. With an open mind-set, we are dedicated to helping every <br>
									  individual reach our customers goals in life</span></p></h3>
									  
									    <center><button onclick="toggleText()" id="textButton">
											Show More
									    </button></center>
			
				<p><center>The 75 of years history of ABC bank until today... </center><br>
		<div class="history">		
			<div class="history-ul">	
		        <ul><h4><li>1947 - The Western Bank Ltd. (WBL) opened a branch in Bancho Street.</li><br><br>
						<li>1969 - The ABC Bank Ltd. was incorporated with western Bank holding 45% of its equity.</li><br><br>
						<li>1973 - First ABC Bank Branch was opened at GalenBidunuWewa.</li><br><br>
						<li>1979 - The Foreign Currency Banking Unit (FCBU) was formed.</li><br><br>
						<li>1985 - Opening of the ABC Development Company New Building.</li><br><br>
						<li>1988 - western Bank Ltd. changed its name to Standard Chartered (UK) Holdings Ltd.</li><br><br>
						<li>1991 - Introduced ATM facilities to its customers.</li><br><br>
						<li>1999 - Opening of ABC Bank's 40th Branch in Nugegoda.</li><br><br>
						<li>2000 - Won the Best Bank in Sri Lanka award.</li><br><br>
			</div>
		</div>
		<div class="history">	
			<div class="history-ul">			
				<ul><h4><li>2001 - Online Banking was launched</li><br><br>
						<li>2005 - Opened 150th branch at Kegalle.</li><br><br>
						<li>2010 - Became the first Sri Lankan bank to be ranked among the ‘Top 100 Banks in the World’</li><br><br>
						<li>2012 - Installation of 450th ATM at the pettah Railway Station.</li><br><br>
						<li>2015 - Adjudged as Sri Lanka’s ‘Bank of the Year’ by the UK-based ‘The Banker’ Magazine.</li><br><br>
						<li>2015 - Received FinanceAsia Best Bank Country Award.</li><br><br>
						<li>2017 - Reached 800 ATMs in Sri Lanka.</li><br><br>
						<li>2020 - Launched fully-automated cheque deposit machine at City Office Branch in fork Street Colombo 05.</li><br><br>
						<li>2022 - Celebrating the 75th Anniversary.</li></h4></ul></span></p>
			</div>			
		</div>
        </body>

    <?php
        include_once 'footer.php'
    ?>           
	<?php
    	include_once 'chatbot3.php'
	?>       