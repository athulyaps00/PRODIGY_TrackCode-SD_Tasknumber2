<?php
session_start();

// Check if the game is ongoing
if (!isset($_SESSION['random_number'])) {
    header('Location: index.php');
    exit();
}

// Process the user's guess
if (isset($_POST['guess'])) {
    $user_guess = intval($_POST['guess']);
    $_SESSION['attempts']++;

    if ($user_guess < $_SESSION['random_number']) {
        $_SESSION['message'] = "Too low! Try again.";
    } elseif ($user_guess > $_SESSION['random_number']) {
        $_SESSION['message'] = "Too high! Try again.";
    } else {
        $_SESSION['message'] = "Congratulations! You guessed the number in " . $_SESSION['attempts'] . " attempts.";
        // Clear the random number and attempts after a correct guess
        unset($_SESSION['random_number']);
        unset($_SESSION['attempts']);
    }
}

// Redirect back to the game page
header('Location: index.php');
exit();
