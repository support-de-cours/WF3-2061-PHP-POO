<?php 
require_once "utils.php";
require_once "Character.php";

// Création des personnages (instance des objets)
$batman = new Character("Batman", Character::MEDIUM);
$superman = new Character("Superman", Character::NOVICE);

$title = "{$batman->getName()} Vs. {$superman->getName()}";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    
    <h1><?= $title ?></h1>


    <h2>Présentation</h2>
    
    <fieldset>
        <legend>Personnage 1</legend>
        <div>Nom : <?= $batman->getName() ?></div>
        <div>Points de vie : <?= $batman->getHp() ?></div>
        <div>Experience : <?= $batman->getXp() ?></div>
    </fieldset>

    <fieldset>
        <legend>Personnage 2</legend>
        <div>Nom : <?= $superman->getName() ?></div>
        <div>Points de vie : <?= $superman->getHp() ?></div>
        <div>Experience : <?= $superman->getXp() ?></div>
    </fieldset>

</body>
</html>