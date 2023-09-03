<?php
require_once '../database/db_connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$Email    = $_POST['Email'];
$Phone    = $_POST['Phone'];


$sql = "INSERT INTO
        users
            (username,password,Email,Phone)
        VALUES
            ('$username','$password','$Email','Phone')
        ";
if (mysqli_query($conn, $sql)){
    header("Location:../admin/userShow.php");
    echo "New record create successfully.";
} else {
    echo "Error: " . $sql . '<br>'. mysqli_error($conn);
}
mysqli_close($conn);