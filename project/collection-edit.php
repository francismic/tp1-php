<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Carte.php";
    $Carte = new Carte;
    $cartesport = $Carte->selectId('cartesport', $id);
    extract($cartesport);
}else{
    header('Location: index.php');
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
    <h2>Modifier</h2>
        <form action="collection-update.php" method="post">
            <input type="hidden" name="carteSportId" value="<?php echo $id;?>">
            <label>Nom 
                <input type="text" name="nomJoueur" value="<?php echo $nomJoueur;?>">
            </label>
            <label>Équipe
                <input type="text" name="nomEquipe" value="<?php echo $nomEquipe;?>">
            </label>
            <label>Quantité
                <input type="number" name="quantiteCarte" value="<?php echo $quantiteCarte;?>">
            </label>
            <label>Prix
                <input type="text" name="prixCarte" value="<?php echo $prixCarte;?>">
            </label>

            <label>Categorie :
            <select name="categorieSportId" value="<?php echo $categorieSportId;?>">
                <optgroup label="Categorie Sport">
                    <option value="1">Hockey</option>
                    <option value="2">Football</option>
                    <option value="3">Soccer</option>
                    <option value="4">Basketball</option>
                    <option value="5">Baseball</option>
            </optgroup>
        </select>
    </label>

    <label>Collection :
    <select name="nomCollectionId" value="<?php echo $nomCollectionId;?>">
                <optgroup label="Nom Collection">
                    <option value="1">UpperDeck</option>
                    <option value="2">Topps</option>
                    <option value="3">Panini</option>
            </optgroup>
        </select>
    </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="collection-delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>