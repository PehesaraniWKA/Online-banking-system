<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Open New Bank Account</title>
  <link rel="stylesheet" href="styles/openNewbankAcc.css">
</head>
<body>
  <div class="new-row">
    <div class="new-col-75">
      <div class="new-container">
        <form action="newAccInsert.php" method="POST">
        
          <div class="new-row">
            <div class="new-col-50">
              <h3>Account Opening</h3>
              <label for="accType">Account Type</label>
              <input type="radio" id="acc" name="account" value="saving">Savings Account
              <input type="radio" id="acc" name="account" value="current">Current Account
              <p></p>
              <label for="fname">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Weththewe Kankanmge Ama Pehesarani" required>
              <label for="fname">NIC No</label>
              <input type="text" id="nic" name="NIC" placeholder="Enter National ID Card Number" required>
              <label for="email"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="ama@example.com">
              <label for="adr">Address</label>
              <input type="text" id="adr" name="address" placeholder="No.73, Stage 3, Colombo 3 " required>
              <label for="city">City</label>
              <input type="text" id="city" name="city" placeholder="Colombo" required>
              <label for="city">Gender</label>
              <input type="radio" id="gender" name="gender" value="m">Male
              <input type="radio" id="gender" name="gender" value="f">Female
              <p></p>
              <label for="dob">Date of Birth</label>
              <input type="text" id="DOB" name="DOB" placeholder="dd/mm/yyyy" required>
              <p></p>
              
            </div>
  
            <div class="new-col-50">
              <br><br><br> <br><br><br><br>
              <label for="phone">Phone number:</label>
              <input type="text" id="phone" name="phone" placeholder="0771232313" required>
              <label for="citizen">Citizenship</label>
              <input type="text" id="citizen" name="citizen" placeholder="SRI LANKAN">
              <label for="Taxpayer">Tax Payer</label>
              <p></p>
              <select name="tax" id="tax" required>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
              </select>
              <input type="text" id="taxNo" name="taxNo" placeholder="Tax No">
              <label for="cname">Language</label>
              <input type="text" id="language" name="language" placeholder="Exp: Sinhala" required>
              <label for="Mstatus">Marital Status</label>
              <p></p>
              <select name="status" id="status" required>
                <option selected hidden value="">Please select your Marital status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divoced">Divoced</option>
                <option value="notKnown">Not Known</option>
              </select>
            </div>
            
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr" required> I agree to the terms and conditions
          </label>
          <input type="submit" value="Submit" class="new-btn">
        </form>
      </div>
    </div>
</body>
</html>