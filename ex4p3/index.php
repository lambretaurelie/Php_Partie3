<!--<To change this template file, choose Tools | Templates
    and open the template in the editor.
-->
<!--Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
    l'afficher
    l'incrementer de la moitié de sa valeur-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice4</title>
    </head>
    <body>
        <?php
// on crée une boucle while 
        $number = '1';
        while ($number < 10) {
            echo 'Valeur de ma variable ' . $number . '<br />';
            $number = $number + $number / 2;
        }
        ?> 
    </body>
</html>
