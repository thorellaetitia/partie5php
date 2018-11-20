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
        <title>exercice_5 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_5 partie 5 php</h1>
        <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>


        <p><?php
            echo nl2br(print_r($departementArray,true));
            ?></p>


    </body>
</html>