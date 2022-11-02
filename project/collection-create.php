<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
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
        <h2>Nouvelle Carte</h2>
        <form action="collection-store.php" method="post">
            <label>Nom 
                <input type="text" name="nomJoueur">
            </label>
            <label>Équipe
                <input type="text" name="nomEquipe">
            </label>
            <label>Quantité
                <input type="number" name="quantiteCarte">
            </label>
            <label>Prix
                <input type="text" name="prixCarte">
            </label>

            <label>Categorie :
            <select name="categorieSportId">
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
    <select name="nomCollectionId">
                <optgroup label="Nom Collection">
                    <option value="1">UpperDeck</option>
                    <option value="2">Topps</option>
                    <option value="3">Panini</option>
            </optgroup>
        </select>
    </label>


            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>