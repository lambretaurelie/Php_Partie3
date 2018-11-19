<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php
// on crée une boucle for 
        for ($number = 20; $number >= 0; $number--) {
            echo $number . ' C\'est presque bon ' . '<br />';
        }
        ?>
    </body>
</html>


