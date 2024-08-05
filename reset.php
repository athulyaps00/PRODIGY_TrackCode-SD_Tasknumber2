<?php
session_start();

// Clear the random number and attempts
unset($_SESSION['random_number']);
unset($_SESSION['attempts']);
$_SESSION['message'] = "Game has been reset. Guess the number between 1 and 100!";

// Redirect to index.php
header('Location: index.php');
exit();
