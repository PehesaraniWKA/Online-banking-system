<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/helpNsup.css">
    
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>ABC Bank</title>
</head>

<body>
    
    <div id="main">
        <section id="top">
            <!--Avater image-->
            <img align="left" src="images/Bank logo.png" alt="Logo" width="400px" height="200px">
            <div align="right">
            </div>

            <!--<center>
                <h1> ABC BANK</h1>
            </center>-->
        </section>
        <!--Horizontal line-->
        <hr style="width:100%">
        

        <!-- Slide bar -->

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="account.php">Accounts</a>
            <a href="#">Loan&Leasing</a>
            <a href="#">E-banking</a>
            <a href="#">Promotion</a>
            <a href="cards.php">Cards</a>
            <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>

            <!--Calender-->
            <section>
                <div class="box">
                    <div class="container">
                        <div id="mycalendar"></div>
                    </div>
                </div>
            </section>
            <script src="js files/mycalendar.js"></script>
            <script>
                mycalendar.draw({
                    target: '#mycalendar',
                    type: 'month',
                    dayformat: 'full',
                    monthformat: 'full',
                    highlighttargetdate: true,
                    prevnextbutton: 'show' //enable prevnextbutton

                })
            </script>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">

        <!--Navigation bar-->
        <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            
            <a class="active" href="#helpandsupport">Help and Support</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        
    <!--Nav bar-->
    <center>
        <hr>
    <div class="helpNsup-nav">
        
        <a href="inquaries.php">Inquaries</a>
        <a class="active" href="#compliments">Compliments</a>
        <a href="feedback.php">Feedback</a>
        <a href="complains.php">Complains</a>
</div>
<center>
<br/><br/>
    <h2> Pay Someone A Complement </h2>
    <p> Share your positive experience you had with ABC team made something special for you. Saying "Thank you" goes a long way and can make someone's day. Tell us about your experience so we can make sure the person or team you are complimenting hears about it, and gets the recognition they deservie. </p>

    <!--Compliments form-->
    <div class="form-Help-sup">
    <form method="post" action="complim-data.php">
        <labe for="title"> Title :</lable>
        <select name="title">
            <option value="accounts">Accounts</option>
            <option value="loan-leasing">Loan and Leasing</option>
            <option value="E-banking">E-banking</option>
            <option value="Promotions">Promotions</option>
        </select>
        <br/><br/>
        <lable for="fname">First Name : </lable>
            <input type="text" name="fname" placeholder="First Name"> <br/><br/>
        <lable for="lname">Last Name : </lable>
            <input type="text" name="lname" placeholder="Last Name"> <br/><br/>
        <lable for="mobileNum">Mobile Number :<lable>
            <input type="text" name="mobileNum" placeholder="Mobile Number"> <br/><br/>
        <lable for="email">Email Address :</lable>
            <input type="email" name="email" placeholder="Email"> <br/><br/>
        <lable for="NIC/PP">NIC/PP Number :</lable>
            <input type="text" name="NIC/PP" placeholder="NIC/PP"> <br/><br/>
        
        <lable for="cust">Are you a bank customer :</lable>
            <input type="radio" name="cust" value="Yes" checked="checked"> Yes 
            <input type="radio" name="cust" value="No"> No <br/><br/>
        <lable for="comment">Your comments :</lable>
            <textarea name="comment" rows="8" cols="80"></textarea>
        <br/><br/>
        <input type="checkbox" id="checkbox" onclick="enableButton()"> Confirm your feedback
        <input name="Submit" id="submitBtn" type="submit" value="submit" disabled>
</form>
</div>

<h3> Submit your complemenet online or </h3>
<br>
<p class="helpNsup-lastpara"><em> Email us: customerexperience@ABC.lk </p>
<p class="helpNsup-lastpara"> write us: No:XX, Galle Road, Colombo XX, SriLanka. </em></p>

    <!--Horizontal line-->
    <hr style="width:100%"> 
        <!--Footer-->
        <section id="bottom">
            <footer>
                <table width="100%">
                    <tr>
                        <td><img src="" alt="QR code" width="500px" height="300px"></td>
                        <td>
                            <h3>Careers</h3>
                        </td>
                        <td>
                            <h3>News & Evenets</h3>
                        </td>
                        <td>
                            <h3>Get in touch</h3>
                        </td>
                        <td>
                            <h3>Find us</h3>
                        </td>
                        <td></td>
                        <td>
                            <h3>Call us</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Scan for mobile application</td>
                        <td>
                            <ul>
                                <li>Internships</li>
                                <li>Management Trainer</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Central Bank New policies</li>
                                <li>"Husma" Charity Funds</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Address: No.90/A, Flower road, Colombo 7</li>
                                <li>Emails: <a href="" id="footerlink">info@abcbank.lk</a></li>
                                <li>Fax: <a href="" id="footerlink">+94658741235</a></li>
                                <li>Call us: <a href="" id="footerlink">+94754123624</a></li>
                            </ul>
                        </td>
                        <td class="column">
                            <p><img src="images/img_snow.jpg" alt="Snow" style="width:100%"></p>
                            <p><img src="images/img_forest.jpg" alt="Forest" style="width:100%"></p>
                            <p><img src="images/img_mountains.jpg" alt="Mountains" style="width:100%"></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                        <td class="srch-icon">
                            <p><img src="images/Search icon.jpg" alt="Call icon" style="width:100%">1616</p>
                        </td>
                    </tr>
                </table>
                <hr style="width:100%">
                <center>
                    <p>2022 ABC Bannk PLC.ALL Rights Reserved|Customer Charter & Disclaimer|Solution by:NamsriSolution</p>
                </center>
            </footer>
        </section>
        <script src="js files/Home.js"></script>
    </div>
        
    <script src="js files/helpNsup.js"></script>
</body>

</html>
