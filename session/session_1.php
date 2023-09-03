<?php

session_start();


$_SESSION['username'] = 'john_doe';
$_SESSION['email'] = 'john@example.com';



$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo "Username: " . $username . "<br>";
echo "Email: " . $email . "<br>";

if (true) (
    header("Location: https://www.example.com");
)

session_destroy();

