<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="traitement_calcul.php" method="get" class="w-50 m-auto mt-5 text-center">
            <div class="number1">
                <label class="form-label fs-1" for="nombre_1">Nombre 1</label>
                <input class="form-control" type="number" id="nombre_1" name="nombre1"/>
            </div>
            <div class="number2">
                <label class="form-label fs-1" for="nombre_2">Nombre 1</label>
                <input class="form-control" type="number" id="nombre_2" name="nombre2"/>
            </div>
            <button class="btn btn-primary fs-1 my-3" type="submit">Envoyer</button>
        </form>
    </main>
</body>
</html>