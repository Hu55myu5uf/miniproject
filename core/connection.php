<?php

$server = 'localhost';
$username = 'hussmyusuf';
$password = '';
$db='BabyRegister';
$conn = mysqli_connect($server, $username, $password);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>