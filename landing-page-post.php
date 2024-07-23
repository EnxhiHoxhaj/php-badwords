<?php 
    $testo= $_POST['testo'];
    $badwords= $_POST['badwords'];
    
    $testo_corretto= str_replace( $badwords, '***', $testo);

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
        <p>Il tuo testo è: <br> <strong><?php echo $testo?></strong></p>
        <p>la parola che vuoi censurare è: <br> <strong><?php echo $badwords?></strong> </p>
    </div>
    <div class="row">
        <p>Il tuo testo censurato è : <br> <strong><?php echo $testo_corretto?></strong></p>
    </div>
</div>

    
</body>
</html>