<?php
// un commentaire

/*
bloc de commentaire
qui peut être sur
plusieurs lignes
*/

echo 'Hello world'; // echo affiche du texte

echo '<hr>';

echo '<p>Du texte dans un paragraphe</p>';
?>
<h2>Variables</h2>
<?php
$a = 1; // déclaration de la variable $a valant 1
echo $a; // affiche 1
$a = 2;
echo $a;
// $a est de type INTEGER
$b = 1.5; // variable de type FLOAT
$c = 'Bonjour'; // variable de type STRING
$d = true; // variable de type BOOLEAN
echo '<br>';
var_dump($c); // pour avoir une information sur une variable
?>
<hr><h2>Concaténation</h2>
<?php
$a = 'Hello';
$b = ' world';
echo $a . $b; // le point sert à concaténer
echo '<br>';
$c = 'Bonjour';
$d = 'monde';
echo $c . ' le ' . $d;
?>
<hr><h2>Guillements</h2>
<?php
echo '$c le monde'; // $c n'est pas remplacé par sa valeur
echo '<br>';
// la variable est interprétée dans la chaîne de caractère
// entre guillemets doubles
echo "$c le monde";
?>
<hr><h2>Constantes</h2>
<?php
// déclaration d'une constante qui s'appelle VILLE et qui vaut Paris
define('VILLE', 'Paris');
echo VILLE;
echo '<br>';
// constante "magique" qui donne le nom du fichier dans lequel on se trouve
echo __FILE__;
echo '<br>';
// la ligne sur laquelle on se trouve
echo __LINE__;
echo '<br>';
// le répertoire dans lequel on se trouve
echo __DIR__;
?>
<hr><h2>Opérateurs arithmétiques</h2>
<?php
$a = 2;
$b = 6;
echo $a + $b;
echo '<br>';
echo $a - $b;
echo '<br>';
echo $a * $b; // multiplication
echo '<br>';
echo $b / $a; // division
echo '<br>';
$c = 5 % 2; // opérateur modulo : reste de la division
// si le reste vaut 0, le 1er nombre est divisible par le 2e
var_dump($c);
echo '<br>';
// affectation
$a += $b; // $a = $a + $b

$a = 'bonjour';
$b = ' le monde';
$a .= $b; // $a vaut 'bonjour le monde'

$i = 1;
$i++; // $i += 1 ou $i = $i + 1
?>
<hr><h2>Conditions</h2>
<?php
$vrai = true;

if ($vrai) { // on entre dans la condition
	echo '$vrai est vrai';
}

echo '<br>';

$faux = false;

if ($faux) { // on entre pas dans la condition
	echo '$faux est vrai'; // cette instruction n'est pas exécutée
} else { // le code qui s'exécute si on ne rentre pas
	echo '$faux est faux';
}

echo '<br>';

if ($faux) { // on entre pas dans la condition
	echo '$faux est vrai'; // cette instruction n'est pas exécutée
// si on n'est pas entré dans le if et que $vrai est vrai
} elseif ($vrai) {
	echo '$faux est faux et $vrai est vrai';
} else {
	echo '$faux et $vrai sont faux';
}

echo '<br>';

$str = 'test';

if ($str == 'test') { // teste l'égalité de valeur
	echo '$str vaut test';
}

echo '<br>';

if ($str != 'bonjour') { // teste l'inégalité de valeur
	echo '$str ne vaut pas bonjour';
}

echo '<br>';

$a = 10; // INTEGER
$b = '10'; // STRING

var_dump($a == $b);

echo '<br>';

// stricte égalité : à la fois de valeur et de type
var_dump($a === $b);
echo '<br>';

// opérateur inverse
var_dump($a !== $b);

echo '<br>';

$a = 1;
$b = 2;

var_dump($a > $b); // $a supérieur à $b (faux)
echo '<br>';
var_dump($a < $b); // $a inférieur à $b (vrai)
echo '<br>';

var_dump($a >= $b); // $a supérieur ou égal à $b (faux)
echo '<br>';
var_dump($a <= $b); // $a inférieur ou égal à $b (vrai)
echo '<br>';

// $a est défini (set)
if (isset($a)) {
	echo '$a existe et n\'est pas NULL';
}

echo '<br>';

// $a n'est pas vide (empty)
if (!empty($a)) {
	echo '$a existe et n\'est pas vide';
}
// sont vides : NULL, 0, 0.0, false, '0', '', un tableau vide

$c = 3;
$d = 4;

// ET logique : &&
if ($b > $a && $c > $b) {
	echo '$b > $a ET $c > $b';
}
echo '<br>';
// OU logique : ||
if ($b > $a || $c > $d) {
	echo '$b > $a OU $c > $d';
}

// OU exclusif
if ($b > $a XOR $c > $b) {
	echo 'Soit $b > $a, soit $c > $b, MAIS PAS les 2 conditions à la fois';
}
echo '<br>';

if ($b > $a || $c > $b && $c > $d) { // priorité du ET sur le OU
	echo '$b > $a OU ($c > $b ET $c > $d)';
}
echo '<br>';

if (($b > $a || $c > $b) && $c > $d) { // parenthèses pour forcer la priorité
	echo '($b > $a OU $c > $b) ET $c > $d';
}
?>
<hr><h2>Opérateur ternaire</h2>
<?php
echo ($a == 1)
	? '$a vaut 1'
	: '$a ne vaut pas 1'
;

// équivaut à :
if ($a == 1) {
	echo '$a vaut 1';
} else {
	echo '$a ne vaut pas 1';
}
?>
<hr><h2>Switch</h2>
<?php
$couleur = 'bleu';

switch ($couleur) {
	case 'rouge':
		echo 'La couleur est rouge';
		break;
	case 'bleu':
		echo 'La couleur est bleu';
		break; // le code s'exécute jusqu'au break;
	case 'jaune':
		echo 'La couleur est jaune';
		break;
	default: // optionnel
		echo 'La couleur est inconnue';
		break;
}

echo '<br>';

// refaire ce switch avec une structure conditionnelle
// (if ... elseif ... else)
if ($couleur == 'rouge') {
	echo 'La couleur est rouge';
} elseif ($couleur == 'bleu') {
	echo 'La couleur est bleu';
} elseif ($couleur == 'jaune') {
	echo 'La couleur est jaune';
} else {
	echo 'La couleur est inconnue';
}
?>
<hr><h2>Boucle WHILE</h2>
<?php
$i = 0;

while ($i < 3) { // tant que $i est inférieur à 3
	if ($i == 2) {
		echo '@';
	} else {
		echo '#';
	}

	echo $i;
	$i++;
}
echo $i; // $i vaut 3

echo '<br>';

$j = 1;

while ($j < 5) {
	// si $j est divisible par 3, on sort de la boucle
	if ($j % 3 == 0) {
		break; // break dans une boucle arrête la boucle
	}

	echo $j;
	$j++;
}
?>
<hr><h2>Boucle FOR</h2>
<?php
// équivalent avec FOR de la 1ère boucle WHILE ci-dessus
// valeur initiale; condition d'arrêt; incrémentation
for ($i = 0; $i < 3; $i++) {
	if ($i == 2) {
		echo '@';
	} else {
		echo '#';
	}

	echo $i;
}

// écrire un select HTML pour le jour du mois, qui va donc de 1 à 31
/*
<select>
	<option value="1">1</option>
	<option value="2">2</option>
	...
</select>
*/

echo '<select>';

for ($i = 1; $i <= 31; $i++) {
	echo '<option value="' . $i . '">' . $i . '</option>';
	// ou bien :
	// echo "<option value=\"$i\">$i</option>";
}

echo '</select>';

// écrire avec une boucle un tableau HTML d'une ligne et huit cases
echo '<table border="1"><tr>';
for ($i = 1; $i <= 8; $i++) {
	echo "<td>$i</td>";
}

echo '</tr></table>';
?>
<table border="1">
	<tr>
		<?php
		for ($i = 1; $i <= 8; $i++) {
			echo "<td>$i</td>";
		}
		?>
	</tr>
</table>
<?php
// écrire un tableau HTML de 8 lignes sur 8 cases
echo '<table border="1">';
for ($i = 1; $i <= 8; $i++) {
	echo '<tr>';
	for ($j = 1; $j <= 8; $j++) {
		echo "<td>$i $j</td>";
	}
	echo '</tr>';
}
echo '</table>';

// pour faire un damier :
echo '<table border="1">';
for ($i = 1; $i <= 8; $i++) {
	echo '<tr>';
	for ($j = 1; $j <= 8; $j++) {
		$style = (($i + $j) % 2 == 0)
			? 'style="background-color: grey"'
			: ''
		;

		echo "<td $style>$i $j</td>";
	}
	echo '</tr>';
}
echo '</table>';
?>
<hr><h2>Array</h2>
<?php
$tab = array(); // un tableau vide
$tab = []; // même chose en notation courte
$tab = array('a', 2, false); // un tableau de 3 éléments
$tab = ['a', 2, false]; // même chose en notation courte
var_dump($tab);
echo '<br>';
// $tab[1] est le 2e élément du tableau (le 1er est $tab[0])
var_dump($tab[1]); 