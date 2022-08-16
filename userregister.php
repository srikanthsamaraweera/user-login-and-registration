<?php include 'db/dbconnect.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$db = new Dbconnect();


$db->register_user($firstname, $lastname, $username, $password, $level) . '<br>';
echo $username;
