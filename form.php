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
    <title>Document</title>
</head>
<body>
    <!-- mostro a video i valori inseriti nei campi input -->
    <?php echo $paragrafo." ".$parola; ?>
</body>
</html>