<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Letters Checker</title>
</head>
<body>
    <div name=UniqueLettersChecker>
        <h1>Unique Letters Checker</h1>
        
        <form method="post" action="">
            <label for="wordInput">Enter a word:</label>
            <input type="text" id="wordInput" name="word" required>
            <button type="submit">Check</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["word"])) {
                $word = $_POST["word"];
                require_once 'src/UniqueLettersChecker.php';
                $checker = new UniqueLettersChecker();
                echo '<p>Result: ' . ($checker->hasUniqueLetters($word) ? 'True' : 'False') . '</p>';
            }
        }
        ?>
    </div>

    <div name=LiteralDateParser>
        <h1>Literal Date Parser</h1>
        
        <form method="post" action="">
            <label for="dateDescription">Enter a date:</label>
            <input type="text" id="dateDescription" name="date" required>
            <button type="submit">Check</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["date"])) {
                $date = $_POST["date"];
                require_once 'src/LiteralDateParser.php';
                $checker = new LiteralDateParser();
                echo '<p>Result: ' . $checker->parseLiteralDate($date) . '</p>';
            }
        }
        ?>
    </div>
</body>
</html>
