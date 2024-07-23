<?php 
    $testo= $_GET['testo'];
    $badwords= $_GET['badwords'];



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
        <p>Il tuo testo è: <br> <strong><?php echo $testo?></strong></p>
        <p>la parola che vuoi censurare è: <br> <strong><?php echo $badwords?></strong> </p>
    </div>

    
</body>
</html>