<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $number = 43;
    if(is_numeric($_POST['devinette'])){
        $userNumber = (int) $_POST['devinette'];
        if($userNumber === $number){
            echo 'Bien trouver';
        }else{
            echo 'Veuillez continuer';
        }
    }else{
        echo 'Vous devez entre un nombre';
    }
}