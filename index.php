<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "logged in as " . $_SESSION["username"];
} else {
    echo 'user not logged in ';
}
