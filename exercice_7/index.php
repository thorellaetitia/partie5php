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
        <title>exercice_7 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_7 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

        <p><?php
        $departementArray[51]='Reims';
            echo $departementArray [51];
            ?></p>


    </body>
</html>