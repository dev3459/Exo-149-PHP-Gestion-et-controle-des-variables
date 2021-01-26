<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.
if(empty($var)) {
    echo "Variable vide <br>";
}
else {
    echo "variable est différent de vide <br>";
}

/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.
unset($eraseMe);

/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.
$array = ["Max", "Wyl", "Theo", "Raphael"];
echo "<br>";
var_dump($array);

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.
echo "<br>";
print_r($array);
echo "<br>";
/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
// TODO Votre code ici.
if(isset($tab["doNotExists"])) {
    echo "Existe <br>";
}
else {
    echo "N'existe pas <br>";
}

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.
$boolean = false;
$int = 34;
$float = 18.8;
$string = "Hello I'm Gaetan";

maFunct($boolean, $int, $float, $string);

function maFunct(...$item) {
   for($i = 0; $i < count($item); $i++){
    if(is_bool($item[$i])) {
        echo "Type boolean<br>";
    }
    if(is_int($item[$i])) {
        echo "Type entier<br>";
    }
    if(is_float($item[$i])) {
        echo "Type nombre flottant<br>";
    }
    if(is_string($item[$i])) {
        echo "Type chaîne de caractère<br>";
    }
   }
}