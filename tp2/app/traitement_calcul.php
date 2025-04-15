<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(is_numeric($_GET['nombre1']) && is_numeric($_GET['nombre2'])){

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