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
        <div>
            <h2>Message</h2>
            <p><?php  ;?></p>
        </div>
        <form action="traitement_salutation.php" method="post" class="text-center w-50 m-auto">
            <div class="name mb-3">
                <label class="form-label fs-1" for="name">Nom </label>
                <input class="form-control" type="text" id="name" name="username">
            </div>
            <button class="btn btn-primary fs-1" type="submit">Envoyer</button>
        </form>
    </main>
</body>
</html>