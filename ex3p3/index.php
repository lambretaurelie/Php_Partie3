<!--To change this template file, choose Tools | Templates
    and open the template in the editor.-->

<!--Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieure ou égale à 10 :
    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variable-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice3</title>
    </head>
    <body>
        <?php
// on crée une boucle while 
        $number = '100';
        $numbers = '4';
        while ($number >= 10) {
            $result = $number * $numbers;
            echo 'Valeur de ma variable ' . $result . '<br />';
            $number--;
        }
        ?> 
    </body>
</html>

