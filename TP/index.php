<?php 
require_once "utils.php";
require_once "Character.php";

// Création des personnages (instance des objets)
$batman = new Character("Batman", Character::MEDIUM);
$superman = new Character("Superman");
$voldemor = new Character("Voldemor");

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


    <h2>Salutation</h2>
    <div>
        <?= $batman->sayHello( $superman ) ?>
        <?= score($batman, $superman) ?>
    </div>
    <div>
        <?= $superman->sayHello( $batman ) ?>
        <?= score($batman, $superman) ?>
    </div>


    <hr>

    <h2>Début du combat</h2>

    <div>
        Batman attaque Superman
        <?php $batman->attack( $superman ) ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman riposte d'une attaque suivi d'une super attaque
        <?php 
            $superman
                ->attack( $batman )
                ->superAttack( $batman )
            ;
        ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Une magnifique SuperAttaque de Batman !!
        <?php $batman->superAttack( $superman ) ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman se soigne (il pleure)
        <?php $superman->care() ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Batman tente une attaque secrète
        <?php $batman->secretAttack( $superman ) ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Superman encore affaiblie lance une double attaque
        <?php 
        $superman
            ->attack( $batman )
            ->attack( $batman ) 
        ;
        ?>
        <?= score($batman, $superman) ?>
    </div>

    <div>
        Batman répond d'une attaque simple suivi d'une attaque secrète (et paf un coup de kryptonite)
        <?php 
        $batman
            ->attack( $superman )
            ->secretAttack( $superman ) 
        ;
        ?>
        <?= score($batman, $superman) ?>
    </div>


    <div>
        Superman est au tapie et Batman gagne un point d'expérience.
    </div>



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