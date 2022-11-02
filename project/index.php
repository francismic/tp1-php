<?php
require_once "class/Carte.php";

$Carte = new Carte;

$cartesport = $Carte->select("cartesport");
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
    <main>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Équipe</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Sport</th>
                    <th>Collection</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($cartesport as $row){
                ?>
                    <tr>
                        <td><a href="collection-show.php?id=<?php echo $row['carteSportId'] ?>"><?php echo $row['nomJoueur'] ?></a></td>
                        <td><?php echo $row['nomEquipe'] ?></td>
                        <td><?php echo $row['quantiteCarte'] ?></td>
                        <td><?php echo $row['prixCarte'] ?>$</td>
                        <td><?php echo $row['nomSport']  ?></td>
                        <td><?php echo $row['nomCollection'] ?></td>
                        <?php       
                    }
                ?>
                    </tr>
            </tbody>
        </table>
    </main>
</body>
</html>