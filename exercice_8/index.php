<?php
$monthsArray = [ 
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
];

?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_8 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_8 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

        <p><?php
       foreach ($monthsArray as $month){
           echo $month .'<br />';          
        }
            ?></p>


    </body>
</html>