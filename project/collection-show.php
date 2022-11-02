<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Carte.php";
    $Carte = new Carte;
    $cartesport = $Carte->selectId('cartesport', $id);
    extract($cartesport);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<header>
<nav>
        <ul>
        <li><a href="collection-create.php">Nouvelle Carte</a></li>
            <li><a href="index.php">Collection</a></li>
        </ul>
    </nav>
</header>
<body>
    <main class="centered">
        <h1><strong></strong><?php echo $nomJoueur; ?></h1>
        <p><strong>Équipe :</strong><?php echo $nomEquipe; ?></p>
        <p><strong>Quantité :</strong><?php echo $quantiteCarte; ?></p>
        <p><strong>Prix : </strong><?php echo $prixCarte; ?></p>
        <p><strong>Categorie : </strong><?php echo $nomSport; ?></p>
        <p><strong>Collection : </strong><?php echo $nomCollection; ?></p>
        <p class="button"><a href="collection-edit.php?id=<?php echo $id; ?>">Modifier</a></p>
    </main>
</body>
</html>