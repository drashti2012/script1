<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Initialize variables
$guess = null;
$message = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's guess from the form
    $guess = isset($_POST['guess']) ? intval($_POST['guess']) : null;

    // Validate the user's input
    if (is_numeric($guess) && $guess >= 1 && $guess <= 10) {
        // Compare the user's guess to the random number
        if ($guess == $randomNumber) {
            $message = 'Congratulations! You guessed the correct number.';
        } else {
            $message = "Sorry, the correct number was $randomNumber. Try again!";
        }
    } else {
        $message = 'Please enter a valid number between 1 and 10.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
</head>
<body>
    <h1>Number Guessing Game</h1>
    <p>Guess a number between 1 and 10:</p>
    <form method="POST">
        <input type="number" name="guess" min="1" max="10">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
