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
        <title>exercice_10 partie 5-php</title>  
    </head>

    <body>
        <h1>exercice_10 partie 5 php</h1>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
        Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département

        <p><?php
       foreach ($departementArray as $dept=>$departement){   //foreach= pour parcourir un tableau
           echo 'Le département'. ' ' .$departement . ' ' . 'le numéro'. ' ' .$dept  . '<br />';     // as $dept=clé du tableau $departement=valeur de la clé ds tableau     
        }
            ?></p>


    </body>
</html>