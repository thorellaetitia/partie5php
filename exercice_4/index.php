<?php
$monthsArray = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_4 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_4 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
        <?php
        $monthsArray[7] = 'Août';
        ?>
        <p><?= $monthsArray[7]; ?></p>


    </body>
</html>