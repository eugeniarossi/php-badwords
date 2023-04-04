<?php
// salvo nelle variabili i parametri
$paragraph = $_GET['paragraph'];
$badword = $_GET['word'];
// salvo una funzione che sostituisce la parola con 3 asterischi
$censored_p = str_replace($badword, '***', $paragraph);

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
    <!-- testo non censurato -->
    <div>
        <h2>Testo non censurato</h2>
        <!-- stampo il paragrafo (prima lettera maiuscola) -->
        <p>Testo: <?php echo ucfirst($paragraph); ?></p>
        <!-- stampo la lunghezza del paragrafo -->
        <span>Numero dei caratteri del testo: <?php echo strlen($paragraph); ?></span>
    </div>
    <!-- /testo non censurato -->
    <hr>
    <!-- testo censurato -->
    <div>
        <h2>Testo censurato</h2>
        <!-- stampo il paragrafo censurato -->
        <p>Testo: <?php echo ucfirst($censored_p); ?></p>
        <!-- stampo la lunghezza del paragrafo censurato -->
        <span>Numero dei caratteri del testo: <?php echo strlen($censored_p); ?></span>
    </div>
    <!-- /testo censurato -->
</body>
</html>