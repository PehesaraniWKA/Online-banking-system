<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="popupjoinnew.css"> <!-- css sheet-->
</head>

<body>

    <input type="submit" value="Test" id="testboutton">
    <script src="popupjoin.js"></script>
        <div class = "bgpayment">  
        <div class="popupwin">



<div class="prow">
  <div class="col-75p">
   <div class="containerpay">
    <h2>Join With ABC Team | Better Future </h2>

   <form action="insert.php" method="post">  <!-- Php databass connection-->
      

         <!--page divaider (need to fix dinakara)-->
          <div class="prow">
          <div class="col-50p">

             <label class ="payla" for="name"><i class="fa fa-user"></i> Your Name</label>
            <input class ="payin" type="text" id="name" name="name" placeholder="Dinakara" required>
            <label class ="payla" for="email"><i class="fa fa-envelope"></i> Email</label>
            <input class ="payin" type="Email" id="email" name="email" placeholder="Dinakara@example.com" required>
            <label class ="payla" for="Vecancie"><i class="fa fa-address-card-o"></i> Vacancie </label>
            <input class ="payin" type="text" id="Refno" name="Refno" placeholder="IT Manager" required>
            <label class ="payla" for="phone"><i class="fa fa-institution"></i> Phone</label>
            <input class ="payin" type="phone" id="phone" name="phone" placeholder="0711233218" required>
			 <label class ="payla" for="about"><i class="fa fa-institution"></i> Tell us about you</label>
            <input class ="payin" type="text" id="about" name="phone" placeholder="Optional" rows="6" maxlength="3000px" >

		     <input type="submit" value="Send" class="btnpay">    <!--submit btn / fixed php and databass issu by dinakara-->
		
          </div>


              </div>
            </div>
          </div>
         </input>
        </div>
                                  
     </form> 
    </div>
  </div>
  
</div>

        </div>
        
    </div>


    

</body>