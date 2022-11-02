<?php
//print_r($_POST);
require_once 'class/Carte.php';

$Carte = new Carte;
$delete = $Carte->delete('cartesport', $_POST['id']);
