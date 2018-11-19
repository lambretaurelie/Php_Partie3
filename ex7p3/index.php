<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
<!--En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.-->
<!DOCTYPE html>
<html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Exercice7</title>
        </head>
        <body>
        <?php
// on crée une boucle for 
        for ($number = 1; $number <= 100; $number+=15) {
            echo $number . ' On tient le bon bout ' . '<br />';
        }
        ?>
        </body>
    </html>




