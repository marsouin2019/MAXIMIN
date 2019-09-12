<?php

//c'est un commentaire

/*
 c'est un commentaire sur plusieurs lignes 
 */

 //On utilise echo pour afficher du texte etc
 //echo"Bonjour c'est Madingo";
 //echo'Bonjour c\'est Madingo'; //AltGr + 8
 //echo"<p>Bonjour c'est Madingo</p>";
 ?>
<h1>Mon titre</h1>

 <?php

 //phpinfo(); sert a savoir les infos php

 //une variable est un objet repérer par son nom, pouvant contenir des données, qui pourront etre modifiers lors de l'exécution du programme

 //Comment déclarer une variable en php?

 $nom_variable = "";
 $_nomVariable = ""; //CamelCase
 $nomVariable = ""; //CamelCase
 $NomVariable = ""; //Non conseillé

 // Ne pas faire:

      /*$NOMVARIABLE;
        $$1variable;
        $nom-variable;
        $ nom variable;
        $ nomvariable;
        $nomFilière;
        */

$nomFiliere = "D-WEB";

//echo "Bonjour la $nomFiliere";
//echo 'Bonjour la $nomFiliere'; // a ne pas faire 
//echo "Bonjour la ".$nomFiliere;
//echo 'Bonjour la '.$nomFiliere."c'est l'heure de manger";

$nomFiliere = "PMSPA";
echo "Bonjour la $nomFiliere";

/* variable et les chiffres / nombres / additions*/
$a = 1;
$b = 100;
$c = $a + $b;

// echo $c;
// echo "Le résultat est : $c.";

// echo $c;

// echo $c += $c;

// les comparaisons

if($a == $b)
{
    echo 1;
    echo 'true';
} else {
    echo 0;
    echo 'false';
}


// Une soustraction 
$d = $b - $c;
// echo $d;

// multiplication
$e = $d * $c;
// echo $e;

// division
$f = $d / $e;
// echo $f;

// afficher informations variable
// var_dump($nomFiliere);
// var_dump($e);

// afficher informations lisibles variable
// print_r($nomFiliere);

// tableaux
$tab = array();
$tab = [];

// donnees dans un tableau
$tab = array("d-web",  "pmspa");
// var_dump($tab);
// nbr colonne 
// index // valeur correspondant index +
// longueur de chaine

$tab2 = array ($tab, $c, $e);
// var_dump($tab2);

// tableau de 3 elements = array (3)
// qui sont :
/*
-index 0 = un tableau qui contient 2 elements
-index 1 = une variable 
-index 2 = une variable
*/

// pour afficher un tableau
// echo $tab2[0];

// compter le nombre elements dans un tableau
$nbrElement = count($tab);

// boucle for
for($i=0;$i < $nbrElement;$i++)
{
    // echo $i;
    echo $tab[$i];
}

// boucle foreach
foreach($tab as $filière)
{
    // afficher valeur tableau
    // echo $filière;
}

// afficher valeur avec index
foreach($tab as $index => $filière)
{
    // echo "L'index : $index,correspond à la filère : $filère.";
}

// afficher contenu de $tab2
foreach($tab as $filière)
{
    echo $filière;
}
{
    // les elements restants
}

// afficher contenu de $tab2
// trouver comment afficher les valeurs de tab2
foreach($tab2 as $value)
{
    

}
   


// afficher autre boucle
$tab3 = ["un" , "deux" , "trois" , "cinq" , "stop" ,];
foreach($tab as $value);
{
    // afficher l'un des elements du tableau
    // echo $tab3[2]; // trois
    if($value == "trois")
    {
        echo $value;
    }
}

//déclarer un tableau dans une variable
// qui contient les léments suivants
/*
janvier,février,mars,2019,2018,2017,
"fin" , "stop" , "recommencer"
*/

$tab4 = array();
$tab4 =[];

$tab4 = array("janvier","février" , "mars", 2019, 2018, 2017, "fin" , "stop" ,"recommencer"); 


// Afficher le contenu du tableau $tabMois
$tabMois = ["Janvier" , "Février" , "Mars" , "Avril" , "Mai" , "Juin" , "Juillet" , "Aout" , "Septembre" , "Octobre" , "Novembre" , "Décembre" ,];
foreach($tabMois as $value);
{
    echo $value;
}

// choisir /paramettrer/personnaliser index de tableau
$tabVS = ["id-850" => "VERROUX" , 
"id-851" => "RENAY" , "id-852" => "VITULIN" ,
"id-853" => "TERRINE"];

foreach($tabVS as $ID => $nomVS)
{
    //afficher id et nom VS
    echo "<pre>" ;
    echo "L'identifiant : $ID est attribué au VS $nomVS" ;
    echo "</pre>";
}

$a = 100;
$a += 200;
echo $a;
$a -= 50;
echo $a;

// une variable constante

// déclarer une variable constante
define("JOURNEE" , "24h");
echo JOURNEE;

echo "A la fin de cette journée, nous aurons JOURNEE de plus";
echo "A la fin de cette journée, nous aurons ".JOURNEE."de plus.";
echo 'A la fin de cette jounée , nous aurons '.JOURNEE.'de plus';

// addition de variable constante
define("NBR1", 50);
define("NBR2", 150);

$résultat = NBR1 + NBR2;
echo $résultat;

define("INFO" , NBR1);
echo INFO;

define("URL", "https://www.nomdedomaine.com");
echo URL."/css/fichierStyle.css";

// structures de controle
$a = 10;
$b = -15;
$c = 0.50;
$e = $a + $c;

// IF
if($a == $e)
{
    // si c'est vrai,affiche une réponse 
    echo "La réponse est vrai";

    // et mettre d'autres actions
    $e = $a;

    // si c'et faut, il ne se passe rien
}

// ELSE 
if($a == $e)
{
    // si c'est vrai affiche quelque chose
   
}else{
    // si c'est faut affiche autre chose
    echo "La réponse est fausse";

    // mettre des actions
    $e = 0;
}

// ELSE IF / ELSEIF
$a = 5;
$b = 6;


if( $a > $b)
{
    // si c'et vrai
    echo "a est plus grand que b";
}elseif( $a == $b){
    echo "a est plus petit que b.";
}

// Syntaxe alternative

?>

<?php if( $a == 5 ) : ?>
<p>A est égal 5 </p>
<?php endif; ?>

<?php
$a = 7;
$b = 6;

if ($a == 5):  // c'est faux
    echo "a égale 5";
    echo "...";
elseif ($a == 6): // c'est faux
    echo "!!!";
else:            // si c'est vrai
    echo "a ne vaut ni 5 ni 6";
endif;

// opérateur ternaire = condition ternaire
// ?

// résultat ? si c'est vrai : si c'est faux
echo $résultat ? $a == $b : "c'est faux";

// c'est égal
if( $a == $b)
{
    // affiche rien
}else{
    // affiche 
    echo $result = "c'est faux";
}

// exercices
/*
- Mettre en place un script pour autoriser les hommes d'un age
supérieur à 35ans à écrire un livre.

- Mettre en place un script permettant de lister les personnes ayant 
réussie l'examen du code de la route. Voici les notes.

35,37,25,4,40,36,40,12,34,22,20,10,10
*/

$a = 36;
if( $a > 35) 
{
    // si c'est vrai
    echo "a supérieur à 35";
}
  
else{
    echo "Il est autoriser à écrire un livre";
}
    
$codes = [35,37,25,4,40,36,40,12,34,22,20,10,10] ;

foreach($codes as $value)
{
    if($value > 34)
    {
        echo $value;
    }
}

    





