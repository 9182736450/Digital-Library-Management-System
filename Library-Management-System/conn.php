<?php
define("DBHOST","localhost");
define("DBUSERNAME","root");
define("DBPASSWORD","Ajay@1309"); // Replace 'Ajay@1309' with your actual root password
define("DB","lib");

// Establish MySQL database connection
$conn = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DB);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
