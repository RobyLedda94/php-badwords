<?php
// recupero i dati inseriti nel campo input 
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content text-center">
                    <h1>Il tuo paragrafo :</h1>
                    <p><?php echo $paragrafo ?></p>
                    <h2>La tua parola :</h2>
                    <p><?php echo $parola ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>