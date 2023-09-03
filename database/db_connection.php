<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_gantorn";
$prot = "3306";



$conn = mysqli_connect($servername, $username, $password, $dbname, $prot);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connection successfully";
}   