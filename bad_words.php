<?php
// salvo nelle variabili i parametri
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

// stampo in pagina il valore del parametro 'word'
// echo $_GET['word']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <!-- stampo il paragrafo -->
        <p><?php echo $paragraph; ?></p>
        <!-- stampo la lunghezza del paragrafo -->
        <span><?php echo strlen($paragraph); ?></span>
    </div>
</body>
</html>