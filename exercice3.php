<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exercice3.php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <h1>Tableau des mois</h1>
        <ul>
        <?php
        //Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

        $months= array('January','February','March','April','May','June','July','August','September','October','November','December');
        //pour chaque mois je donne une valeur.
        foreach($months as $value){  
        echo '<li>';
        echo $value ;
        echo '</li>';
    }
        
        ?>
        </ul>
    </body>
</html>