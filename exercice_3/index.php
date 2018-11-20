<?php
$monthsArray = array(
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'août',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
);

?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_3 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_3 partie 5 php</h1>
        <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
        <p><?= $monthsArray [5]; ?></p>


    </body>
</html>