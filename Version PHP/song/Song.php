<?php


class Song {

    // Méthode qui affichera la chanson
    public function playSong() {
        // L'entré est sécurisée
        $number = htmlspecialchars($_POST['number']); 
    
        // L'entrée est 0
        if ($number == 0) {
            echo '<p id="song">Plus de bolées de cidre sur le mur, plus de bolées sans alcool.</br>Vas au supermarché pour en acheter, 99 bolées de cidre sur le mur.</p>';
        // L'entrée est 1
        } elseif ($number == 1) {
            echo '<p id="song">' . $number . ' bolée de cidre sur le mur, ' . $number . ' bolée sans alcool.</br>Bois en un et au suivant ! Plus de bolées de cidre sur le mur.</p>';
        // L'entrée est 2
        } elseif ($number == 2) {
            echo '<p id="song">' . $number . ' bolées de cidre sur le mur, ' . $number . ' bolées sans alcool.</br>Bois en un et au suivant ! ' . ($number - 1) . ' bolée de cidre sur le mur.</p>';
        // L'entrée est entre 3 et 99
        } elseif ($number > 2 && $number <= 99) {
            echo '<p id="song">' . $number . ' bolées de cidre sur le mur, ' . $number . ' bolées sans alcool.</br>Bois en un et au suivant ! ' . ($number - 1) . ' bolées de cidre sur le mur.</p>';
        // L'entrée est vide
        } elseif (empty($number)) {
            echo '<p id="blank">Choissisez un nombre pour afficher le couplet de votre choix !</p>';
        // Au cas ou le formulaire est modifié en mode développeur
        } elseif ($number < 0 || $number > 99 || ($number % 1) != 0 || $number != is_numeric($number))
            echo '<p id="alert">Vous avez touché quelque chose dans le HTML, n\'est ce pas ?</p>';
    }
}