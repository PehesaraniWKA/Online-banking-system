<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/payment.css">

</head>
<body>
<!--Biling info and Customer info form-->
<h2>Billing Information</h2>
<div class="row">
  <div class="col-75">
   <div class="container">
      <form action="insert.php" method="post">
      
        <div class="row">
          <div class="col-50">
		  
		  <div class="select">
            <label for ="Company">Select Company </label>
			<select name="Company" id="Company">
			<option value="Dialog">Dialog</option>
			<option value="Mobitel">Mobitel</option>
			<option value="Hutch">Hutch</option>
			<option value="AIA">AIA</option>
			</select>
			</div>
            <label for="name"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="name" name="name" placeholder="Dinakara" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Dinakara@example.com" required>
            <label for="Refno"><i class="fa fa-address-card-o"></i> Enter Reference No </label>
            <input type="text" id="Refno" name="Refno" placeholder="Optional">
            <label for="Phone"><i class="fa fa-institution"></i> Phone</label>
            <input type="phone" id="phone" name="phone" placeholder="0711233218" required>

            <div class="row">
              <div class="col-50">
                <label for="paym">Payment methord</label>
                <input type = "radio" name="methord"
                value="Credit card"> Credit card

                <input type = "radio" name="methord"
                value="Bank Tranfer"> Bank Tranfer
              </div>
            </div>
          </div>


         <!--Payment info form-->  

          <div class="col-50">
            <h3>Payment info</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="D.N.A.Perera" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2024" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="134" required>
              </div>
              <div>
                <img src="images/payment-image.png" width="250px" height="80px" required>
              </div>
            </div>
          </div>
          
        </div>
        <a href="Home.php"><input type="submit" value="Continue to checkout" class="btn"></a>
      </form>
    </div>
  </div>

</div>

</body>
</html>