<!DOCTYPE html>
<html>
<head>
<title>CreditCard</title>



         <div class="centerref">
                    <?php
                        $servername = "localhost";
                        $username = "php";
                        $password = "fer123";
                        $dbname = "creditcard";
                        $CC = ($_GET['creditnumber'])
                        $CVV = ($_GET['CCV'])
                        $firstname = ($_GET['firstname'])
                        $lastname = ($_GET['lastname'])
                        $emonth = ($_GET['ExpiryMonth'])
                        $eyear = ($_GET['ExpiryMonth'])


                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }


                            $sql_insert= "INSERT INTO ccinfo (firstname, lastname, creditcard,CVV,'month','year') VALUES ($firstname,$lastname,$CC,$CVV,$month,$year);";
                            

                            if ($conn->query($sql) === TRUE) {
                                echo "New record created successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();
                        ?> 
                    </div> 
                </body>
            </html>
        </div> 
    </body>
</html>