<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP BADWORDS</title>
</head>
<body>
    <div class="container mt-4 text-center">
        <div class="row">
            <div class="col-12">
                <form action="./form.php" method="GET">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <div class="control-label"><strong>Inserisci qui il paragrafo:</strong></div>
                                <textarea name="paragrafo" id="paragrafo" placeholder="Inserire paragrafo" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <div class="control-label"><strong>Inserisci qui la parola da censurare:</strong></div>
                                <input type="text" name="parola" id="parola" placeholder="Inserire parola" class="form-control">
                            </div>
                        </div>
                            <div class="col-12 mt-4 d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary">Invia</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>