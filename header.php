<!DOCTYPE html>
<html>

<head>
    <title> ABC BANK </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/Home.css">
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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