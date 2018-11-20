<?php
$departementArray = [
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme'
];

?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_9 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_9 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

        <p><?php
       foreach ($departementArray as $departement){   //foreach= pour parcourir un tableau
           echo $departement . '<br />';     // as $dept=clé du tableau $departement=valeur de la clé ds tableau     
        }
            ?></p>


    </body>
</html>