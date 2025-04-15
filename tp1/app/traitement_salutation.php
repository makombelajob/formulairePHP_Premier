<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['username']) || strlen($_POST['username']) < 5){
        echo 'Vous devez entre un nom valid';
    }else{
        $nomUtilisateur = htmlspecialchars($_POST['username']);
        echo "Bienvenu $nomUtilisateur sur mon site";
    }
}else{
    echo 'Mauvaise methode détecter';
}