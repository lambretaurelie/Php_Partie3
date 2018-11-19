<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :
    l'afficher
    l'incrementer-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <?php
// on crée une boucle for 
        $number = 0;
        $max = 10;
        for ($number; $number <= $max; $number++) {
            echo 'Valeur de ma variable ' . $number . '<br />';
        }
        ?>
        <?php
// on crée une boucle while 
        $number = '0';
        while ($number <= 10) {
            echo 'Valeur de ma variable ' . $number . '<br />';
            $number++;
        }
        ?> 
    </body>
</html>

