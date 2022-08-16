<?php session_start();
include 'db/dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new Dbconnect();
$record_count = $conn->user_login($username, $password);


if ($record_count == 1) {
    $_SESSION["username"] = $username;
    echo 'hello ' . $_SESSION["username"];
}
