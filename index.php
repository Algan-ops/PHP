<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>EXO 1</h1>
<?php
                         // <!-- EXO 2  -->
for ($nombrezebi = 0; $nombrezebi < 25; $nombrezebi++) {
    echo $nombrezebi;
    if ($nombrezebi < 24) {
        echo "-";
    }
}
?>
<h2>EXO 2</h2>
                        <!-- // EXO 2 // -->
<?php

$nombre = 25;
while ($nombre > 0) {
    echo $nombre;
    if ($nombre > 1) {
        echo "-";
    }
    $nombre--;
}
?>
<h2>EXO 3</h2>
                        <!-- EXO 3 -->
                        <?php
for ($i = 1; $i <= 25; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
<h2>EXO 4</h2>
                        <!-- EXO 4 -->
                        <?php
$somme = 0;

for ($i = 1; $i <= 30; $i++) {
    $somme += $i;
}


echo "La somme des 30 premiers entiers est : " . $somme;
?>

<h2>EXO 5</h2>
                        <!-- EXO 5  -->
<form action="index.php" method="POST">
    <label for="testPair">Entrez un nombre</label>
    <input id="testPair" type="number" name="testPair">
    <button>tester</button>
</form>
<p><?php 
if(isset($_POST['testPair'])){
    $testPair = $_POST['testPair'];
    echo $testPair;
}
?></p>

<?php
function EstPair($nombre) {
    if ($nombre % 2 == 0) {
        return true; 
    } else {
        return false; 
    }
}
$nombreATester = $testPair;
if (EstPair($nombreATester)) {
    echo "Le nombre $nombreATester est pair.";
} else {
    echo "Le nombre $nombreATester est impair.";
}
?>

<h2>EXO 6</h2>
                        <!-- EXO 6 -->
<?php
 function EtPair($nombre) {
    return $nombre % 2 == 0;
}

for ($i = 1; $i <= 20; $i++) {
    if (EtPair($i)) {
        echo $i . " ";
    }
}
?>
<h2>EXO 7</h2>
                        <!-- EXO 7  -->
<?php
function calculerHypothenuse($b, $c) {
    $a = sqrt(pow($b, 2) + pow($c, 2));
    return $a;
}

$b = 3; 
$c = 4; 

$hypothenuse = calculerHypothenuse($b, $c);
echo "L'hypothénuse du triangle rectangle avec les côtés b=$b et c=$c est : $hypothenuse";
?>
<h2>EXO 8</h2>
                        <!-- EXO 8  -->
<?php
$heure = 14; 
if ($heure >= 0 && $heure < 12) {
    echo "C'est le matin.";
} elseif ($heure >= 12 && $heure < 18) {
    echo "C'est l'après-midi.";
} elseif ($heure >= 18 && $heure <= 23) {
    echo "C'est le soir.";
} else {
    echo "Heure invalide !";
}
?>
<h2>EXO 9</h2>
                        <!-- EXO 9 -->
<?php
function EstPaire($nombre) {
    return $nombre % 2 == 0;
}


$nombre = 2;


$resultat = EstPaire($nombre) ? "Le nombre $nombre est pair." : "Le nombre $nombre est impair.";

echo $resultat;
?>
<h2>EXO 10</h2>
                        <!-- EXO 10 -->
                        <?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "foobar";
    }
    elseif ($i % 3 == 0) {
        echo "foo";
    }
    elseif ($i % 5 == 0) {
        echo "bar";
    }
    else {
        echo $i;
    }
}
?>
<h2>EXO 11</h2>
                        <!-- EXO 11 -->
<?php
$identitePersonne = [
    'nom' => 'Croft',
    'prenom' => 'Lara',
    'metier' => 'Archéologue'
];
echo "<h1>C'est un plaisir de vous voir {$identitePersonne['prenom']} {$identitePersonne['nom']}! ({$identitePersonne['metier']})</h1>";
?>
<h2>EXO 12</h2>
                        <!-- EXO 12 -->
<?php
$fighters = ['Zelda', 'Samus', 'Bowser', 'Peach', 'Lucina'];
foreach ($fighters as $fighter) {
    if (strlen($fighter) == 6) {
        echo $fighter . "<br>"; 
    }
}
?>
<h2>EXO 13</h2>
                        <!-- EXO 13 -->
<?php
$entiers = [42, 15, 7, 23, 56, 3, 89, 12, 4, 9];
$plusPetite = $entiers[0];
foreach ($entiers as $nombre) {
    if ($nombre < $plusPetite) {
        $plusPetite = $nombre;
    }
}
echo "La plus petite valeur dans le tableau est : $plusPetite";
?>
<h2>EXO 14</h2>
                        <!-- EXO 14 -->


<h2>EXO V2.1</h2>
                        <!-- EXO V2.1 -->
<?php
if (isset($_GET['ville']) && isset($_GET['transport'])) {
    $ville = $_GET['ville'];
    $transport = $_GET['transport'];

    echo "<p>La ville choisie est $ville mais vive L'OM tête de neuille et le voyage se fera en $transport !</p>";
} 
else {
    echo '<p>ça marche pas ça marche pas <br><img src="https://pbs.twimg.com/media/C1434M7XcAAjQ6u.jpg" alt="Erreur"> <p>';
}
?>
<h2>EXO V2.2</h2>
                        <!-- EXO V2.2 -->
<form action="index.php" method="GET">
<label for="animal">Quel est votre animal préféré ?</label>
<input id="animal" type="text" name="animal">
<button>Envoyer</button>
</form>
<?php 
if (isset($_GET['animal'])) {
    $animal = $_GET['animal'];
    echo "<p>Votre animal choisi est : $animal</p>";
    }
    else {
    echo '<p>Vous n\'avez pas choisi d\'animal ! <br><img src="https://pbs.twimg.com/media/C1434M7XcAAjQ6u.jpg" alt="Erreur"> </p>';
}
?>
<h2>EXO V2.3</h2>
                            <!-- EXO V2.3 -->
<section style="background-color: <?php echo isset($_POST['color']) ? $_POST['color'] : 'white'; ?>;">
<!-- Formulaire -->
<form action="" method="POST">
<label for="pseudo">Votre pseudo :</label>
<input id="pseudo" type="text" name="pseudo" placeholder="Entrez votre pseudo" required>
<br><br>

<label for="color">Choisissez une couleur :</label>
<select id="color" name="color" required>
<option value="red">Rouge</option>
<option value="blue">Bleu</option>
<option value="green">Vert</option>
<option value="yellow">Jaune</option>
<option value="purple">Violet</option>
</select>
<br><br>

<button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$pseudo = $_POST['pseudo'];
$color = $_POST['color'];   

echo "<h1>Bonjour, $pseudo !</h1>";
echo "<p>Votre couleur préférée est : $color</p>";
}
?>
</section>

<h2>EXO V2.4</h2>
                        <!-- EXO V2.4  -->
<section>
<form action="" method="POST">
<label for="nombre">Choisissez un nombre de dés (multiple de 6) :</label>
<input id="nombre" type="number" name="nombre" placeholder="Entrez un nombre" required>
<button type="submit">Lancer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nombre = $_POST['nombre'];

if ($nombre % 6 === 0) {
echo "<h1>Vous avez choisi de lancer $nombre dés multiples de 6 !</h1>";
echo "<p>Voici les résultats :</p><ul>";

for ($i = 1; $i <= $nombre; $i++) {
$resultat = rand(1, 6);
echo "<li>Dé $i : $resultat</li>";
}
echo "</ul>";
} else {
header("Location: ?error=Le nombre choisi n'est pas un multiple de 6 !");
exit;
}
}
if (isset($_GET['error'])) {
echo "<p style='color: red;'>{$_GET['error']}</p>";
}
?>
</section>

<h2>EXO V2.5</h2>
                            <!-- EXO V2.5 -->
    <form action="index.php" method="GET">
    <label for="testLog">Entrez un username</label>
    <input id="testLog" type="text" name="testPair">
    <button>tester</button>






    
</body>
</html>