<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo5php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <h1>Tableau des départements des Hauts de France</h1>
        <ul>
       <?php
//Avec le tableau de l'exercice 4, afficher toutes les valeurs de ce tableau.

$departement = ['Aisne' => 02 , 'Nord' => 59 , 'Oise' => 60 , 'Pas-de-calais' => 62 , 'Somme' => 80];
//Pour chaque départements, je donne une valeur.
foreach ($departement as $value)
//Qui sera affiché.
echo '<li>'.$value .'</li>';

?>
</ul>
    </body>
</html>