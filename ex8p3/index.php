<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <?php
// on crée une boucle for 
        for ($number = 200; $number >= 0; $number -= 12) {
            echo $number . ' Enfin !!!! ' . '<br />';
        }
        ?>
    </body>
</html>





