<?php
// recupero i dati inseriti nel campo input 
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];

// dichiaro variabile lunghezzaparagrafo e le assegno il valore di paragrafo
$lunghezza_paragrafo = strlen($paragrafo);

// mostrare nuovamente la lunghezza del paragrafo e la parola da censurare
$paragrafo_censurato = str_replace($parola, '***', $paragrafo);
$lunghezza_censurato = strlen($paragrafo_censurato);

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
            <div class="col-12 col-sm-6">
                <div class="content text-center">
                    <h1>Il tuo paragrafo :</h1>
                    <p><?php echo $paragrafo ?></p>
                    <h2>Di seguito la lunghezza del tuo paragrafo :</h2>
                    <!-- mostro a video la lunghezza del paragrafo -->
                    <p>Il tuo paragrafo è lungo : <?php echo $lunghezza_paragrafo ?> caratteri</p>
                    <h2>La tua parola :</h2>
                    <p><?php echo $parola ?></p>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="content text-center">
                    <h1>Paragrafo censurato:</h1>
                    <p><?php echo $paragrafo_censurato ?></p>
                    <h2>Di seguito la lunghezza del tuo paragrafo :</h2>
                    <!-- mostro a video la lunghezza del paragrafo -->
                    <p>Il tuo paragrafo è lungo : <?php echo $lunghezza_paragrafo ?> caratteri</p>
                    <h2>Lunghezza del paragrafo censurato :</h2>
                    <p><?php echo $lunghezza_censurato; ?> caratteri</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>