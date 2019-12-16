<!DOCTYPE html>
<html>
    <head>
        <title>Next Page</title>
    </head>
    <body>
            <?php 
                //login credentials to db
                $servername = "localhost";
                $username = "php";
                $password = "password";
                $dbname = "final";
                //store form inputs to variables
                $search = htmlspecialchars($_POST['search']);
                $ip = $_SERVER['REMOTE_ADDR'];
            ?>
            <?php
                //connection to db
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                //insert data to db
                $sql = "INSERT INTO inputs (search, ip)
                    VALUES ('{$search}', '{$ip}')";
                //confirmation
                if (mysqli_query($conn, $sql)) {
                    header('Location: https://www.google.com/search?&q='.$search);
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                //close connection 
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>