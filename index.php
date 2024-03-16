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


    <div name="WordMerger">
        <h1>Word Merge</h1>
        
        <form method="post" action="">
            <label for="word1">Enter Word 1: </label>
            <input type="text" id="word1" name="word1" required>
            <label for="word2">Enter Word 2: </label>
            <input type="text" id="word2" name="word2" required>
            <button type="submit">Merge</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["word1"]) && isset($_POST["word2"])) {
                $word1 = $_POST["word1"];
                $word2 = $_POST["word2"];
                require_once 'src/WordMerger.php';
                $checker = new WordMerger();
                echo '<p>Result: ' . $checker->mergeWords($word1, $word2) . '</p>';
            }
        }
        ?>
    </div>

    <div name="SuperDigit">
        <h1>Super Digit</h1>
        
        <form method="post" action="">
            <label for="superDigit">Enter Positive Integer:</label>
            <input type="number" id="superDigit" name="superDigit" required>
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["superDigit"])) {
                $superDigit = $_POST["superDigit"];
                require_once 'src/SuperDigit.php';
                $checker = new SuperDigit();
                echo '<p>Result: ' . $checker->calculateSuperDigit($superDigit) . '</p>';
            }
        }
        ?>
    </div>

</body>
</html>
