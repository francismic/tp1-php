<?php
//print_r($_POST);
require_once 'class/Carte.php';

$Carte = new Carte;
$update = $Carte->update('cartesport', $_POST);

echo $update;





