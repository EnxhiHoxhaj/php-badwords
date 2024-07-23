<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <h1 class= "my-3">Form Badwords</h1>
        <form action="landing-page-post.php" method="POST">
            <textarea name ="testo" placeholder= "inserisci il tuo testo" class= "my-2">
            </textarea> <br>
            <input type="text" name ="badwords" placeholder= "parola da censurare" class= "my-2"> <br>
            <button class= "my-2">Invia</button>
        </form>
    </div>
</body>
</html>