<?php
session_start();
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
    $_SESSION['message'] = "Guess the number between 1 and 100!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number Game</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Guess the Number Game</h1>
        <div class="alert alert-info text-center" role="alert">
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            } else {
                echo "Guess the number between 1 and 100!";
            }
            ?>
        </div>

        <form action="process.php" method="post" class="text-center">
            <div class="form-group">
                <label for="guess">Enter your guess:</label>
                <input type="number" id="guess" name="guess" class="form-control w-50 mx-auto" min="1" max="100" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Guess</button>
        </form>
        <form action="reset.php" method="post" class="text-center mt-3">
            <button type="submit" class="btn btn-danger">Start New Game</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
