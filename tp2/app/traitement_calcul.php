<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(!empty($_GET['nombre1']) || !empty($_GET['nombre2']) &&
        filter_var($_GET['nombre1'], FILTER_VALIDATE_INT) ||
        filter_var($_GET['nombre2'], FILTER_VALIDATE_INT)){

        $nombre1 = $_GET['nombre1'];
        $nombre2 = $_GET['nombre2'];

        $somme = $nombre1 + $nombre2;

        echo "La somme vaut : $somme";
    }else{
        echo 'Veuillez entre un nombre';
    }
}else{
    echo 'Mauvaise méthode détectée';
}