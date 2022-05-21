<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Currency converter</title>
        <link rel="stylesheet" href="styles/currency converter.css">
    </head>
    <body>

        <div class="currency-form">
                <h2>Currency Converter</h2>

                <form action="Currency converter.php" method="get">
                    Enter currency :
                    <input type="text" name="input" /><br><br>
                    Select Currency :
                    <select name="dropdown">
                        <option value="us">US dollar</option>
                        <option value="eur">Euro</option>
                        <option value="gbp">British Pound</option>
                    </select><br><br>
                    <input class="form-btn" type="submit" name="sbmt" value="Convert" />
                   
                    <?php 
                        if (isset ($_GET['sbmt']))
                        {
                            $cc_input = $_GET['input'];
                            $cc_dropdown = $_GET['dropdown'];

                            if ($cc_dropdown == 'us')
                            {
                                $output = $cc_input * 0.00277783;
                                echo "<p>" . number_format($cc_input, 2) . " Sri Lankan Rupees =" . "<p>";
                                echo "<h2>" . number_format($output, 2) . " Dollar" . "<h2>";
                                echo "<h6>" . "1 LKR = 0.00277786 USD" . "</h6>";
                            }
                            else if ($cc_dropdown == 'eur')
                            {
                                $output = $cc_input * 0.00264297;
                                echo "<p>" . number_format($cc_input, 2) . " Sri Lankan Rupees =" . "<p>";
                                echo "<h2>" . number_format($output, 2)  . " EUR" . "<h2>";
                                echo "<h6>1 LKR = 0.00264629 EUR</h6>";
                            }
                            else if ($cc_dropdown == 'gbp')
                            {
                                $output = $cc_input * 0.00223773;
                                echo "<p>" . number_format($cc_input, 2) . " Sri Lankan Rupees =" . "<p>";
                                echo "<h2>" . number_format($output, 2)  . " British Pound" . "<h2>";
                                echo "<h6>" . "1 LKR = 0.00223693 GBP" . "</h6>";
                            }
                        }
                    ?>
                </form>
                <a href="Financial calculators.php"><button class="form-btn">Exit</button></a>
        </div>
        
    </body>
</html>
