<?php
//print_r($_POST);
require_once 'class/Carte.php';

$Carte = new Carte;


$insert = $Carte->insert('cartesport', $_POST);

$insert;



