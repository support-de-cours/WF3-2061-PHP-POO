<?php 

/**
 * Show the Health Point between two opponents
 *
 * @param Character $o1 Opponent 1
 * @param Character $o2 Opponent 2
 * @return string
 */
function score(Character $o1, Character $o2): string
{
    $name_1 = substr($o1->getName(), 0, 1);
    $hp_1 = $o1->getHp();

    $name_2 = substr($o2->getName(), 0, 1);
    $hp_2 = $o2->getHp();

    return " <i>({$name_1}{$hp_1} - {$name_2}{$hp_2})</i>";
}