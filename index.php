<?php
session_start(); // starts the session
if (isset($_SESSION["username"])) { //checks if username session is set
    echo "logged in as " . $_SESSION["username"]; //if session is set displays username 
} else {
    echo 'user not logged in '; //else displays user not logged in 
}
