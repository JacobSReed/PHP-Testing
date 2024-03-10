<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Letters Checker</title>
</head>
<body>
    <h1>Unique Letters Checker</h1>
    
    <form method="post" action="">
        <label for="wordInput">Enter a word:</label>
        <input type="text" id="wordInput" name="word" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = $_POST["word"];
        require_once 'src/UniqueLettersChecker.php';
        $checker = new UniqueLettersChecker();
        echo '<p>Result: ' . ($checker->hasUniqueLetters($word) ? 'True' : 'False') . '</p>';
    }
    ?>
</body>
</html>
