<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<h1>Tableau associatif</h1>

<?php

//Avec le tableau de l'exercice 4, afficher toutes les valeurs de ce tableau ainsi que les clés associées. Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département

//Déclaration des départements
$departement = ['Aisne'=> 02 , 'Nord' => 59 , 'Oise' => 60 , 'Pas-de-calais' => 62 , 'Somme' => 80];

foreach ($departement as $clef => $value)
echo '<pre>Le département '.$clef. ' a le numéro '.$value.'</pre>';
?>

</body>

</html>