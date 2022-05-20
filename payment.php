<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/payment.css"> <!-- css sheet/payment-->

</head>

<body class = "payment">
  
 <!--php hedder-->
<?php
include_once 'header.php'
?>


<!-- customer iformation form / billing information form/php tabal name-payment/-->
<h2>Billing Information</h2>
<div class="prow">
  <div class="col-75p">
   <div class="containerpay">

   <form action="insert.php" method="post">  <!-- Php databass connection-->
      

         <!--page divaider (need to fix dinakara)-->
          <div class="prow">
          <div class="col-50p">
		  
		   <!--Drop down menu for company selection / fixed by dinakara need to check animation js-->

      <label class="payla"  for ="Company">Select Company </label>
			<select class="payse" name="Company" id="Company">
			<option value="Dialog">Dialog</option>
			<option value="Mobitel">Mobitel</option>
			<option value="Hutch">Hutch</option>
			<option value="AIA">AIA</option>
			</select>
			
             <!--Customer info form-->

            <label class ="payla" for="name"><i class="fa fa-user"></i> Full Name</label>
            <input class ="payin" type="text" id="name" name="name" placeholder="Dinakara">
            <label class ="payla" for="email"><i class="fa fa-envelope"></i> Email</label>
            <input class ="payin" type="text" id="email" name="email" placeholder="Dinakara@example.com">
            <label class ="payla" for="Refno"><i class="fa fa-address-card-o"></i> Enter Reference No </label>
            <input class ="payin" type="text" id="Refno" name="Refno" placeholder="Optional">
            <label class ="payla" for="phone"><i class="fa fa-institution"></i> Phone</label>
            <input class ="payin" type="text" id="phone" name="phone" placeholder="0711233218">


             <!--payment methord redio button / need to connect php-->

            <div class="prow">
              <div class="col-50p">
                <label class ="payla" for="paym">Payment methord</label>
                <input class ="payin" type = "radio" name="methord"
                value="Credit card"> Credit card

                <input class ="payin"type = "radio" name="methord"
                value="Bank Tranfer"> Bank Tranfer
              </div>
            </div>
          </div>


         <!--Payment info form-->  

          <div class="col-50p">
            <h3>Payment info</h3>
            
            <label class ="payla" for="cardname">Name on Card</label>
            <input class ="payin" type="text" id="cardname" name="cardname" placeholder="D.N.A.Perera">
            <label class ="payla" for="cardnumber">Credit card number</label>
            <input class ="payin" type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label class ="payla" for="expmonth">Exp Month</label>
            <input class ="payin" type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="prow">
              <div class="col-50p">
                <label class ="payla" for="expyear">Exp Year</label>
                <input class ="payin" type="text" id="expyear" name="expyear" placeholder="2024">
              </div>
              <div class="col-50p">
                <label class ="payla" for="cvv">CVV</label>
                <input class ="payin" type="text" id="cvv" name="cvv" placeholder="134">
              </div>
            </div>
          </div>
         </input>
        </div>
        <input type="submit" value="Continue to checkout" class="btnpay">      <!--submit btn / fix php and databass issu by dinakara-->
     </form> 
    </div>
  </div>
  
</div>
<?php
include_once 'footer.php'
?>   

</body>
</html>