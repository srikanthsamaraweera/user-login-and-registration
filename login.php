<?php session_start(); // starts session
include 'db/dbconnect.php'; // imports dbconnection class file

/* this file gets username and password from form values and checks the user database.
Then returns the record count which username and password is in users table.
If the record count is equal to 1 only it considers the user as valid. if the login is valid it sets the session*/

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new Dbconnect(); // create an instance of Dbconnect class
$record_count = $conn->user_login($username, $password); // gets record count


if ($record_count == 1) { // if record count is equal to 1 sets the sesson name variable to username
    $_SESSION["username"] = $username;
    echo 'hello ' . $_SESSION["username"];
}
