<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="bad_words.php" method="GET">
        <div>
            <label for="p">Enter text</label>
            <input type="text" name="paragraph" id="p">
        </div>
        <div>
            <label for="word">Enter word to censore</label>
            <input type="text" name="word" id="word">
        </div>
        <button>Send</button>
    </form>
</body>
</html>