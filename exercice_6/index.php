<?php
$departementArray = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_6 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.

        <p><?php
            echo $departementArray[59];
            ?></p>


    </body>
</html>