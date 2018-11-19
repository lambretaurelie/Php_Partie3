<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <?php
// on crée une boucle for 
        $number = 1;
        $max = 15;
        for ($number; $number <= $max; $number++) {
            echo $number . ' On y arrive presque ' . '<br />';
        }
        ?>
    </body>
</html>



