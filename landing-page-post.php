<?php 

    // paragrafo di testo
    $testo= $_POST['testo'];
    // parola da censurare
    $badwords= $_POST['badwords'];
    // lunghezza del paragrazo inserito
    $paragrafo_len= strlen($testo);
    // paragrafo censurato
    $testo_corretto= str_replace( $badwords, '***', $testo);
    // lunghezza del paragrafo censurato 
    $len_corretto= strlen($testo_corretto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
</head>
<body>
<div class="container-fluid">
    <h1 class= "my-3">Form Badwords</h1>
    <div class="row">
        <!-- paragrafo di testo -->
        <p>Il tuo testo è: <br> <strong><?php echo $testo?></strong></p>
        <!-- parola da censurare -->
        <p>la parola che vuoi censurare è: <br> <strong><?php echo $badwords?></strong> </p>
        <!-- lunghezza del paragrazo inserito -->
        <p>il tuo testo ha questa lunghezza: <br> <strong><?php echo $paragrafo_len?></strong></p>
    </div>
    <div class="row">
        <!-- paragrafo censurato -->
        <p>Il tuo testo censurato è : <br> <strong><?php echo $testo_corretto?></strong></p>
        <!-- lunghezza del paragrafo censurato -->
        <p>il tuo testo ha questa lunghezza: <br> <strong><?php echo $len_corretto?></strong></p>
    </div>
</div>

    
</body>
</html>