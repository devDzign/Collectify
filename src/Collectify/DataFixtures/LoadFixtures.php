<?php
require_once __DIR__."/../../../core/bootstrap.php";
/**
 * l'argument de ligne de commande
 */
$className = $argv[1];

$classFixtures =  sprintf('\Collectify\DataFixtures\%sFixtures',ucfirst($className));
$objetFixtures = new $classFixtures();
$objetFixtures->loadFixtures();
