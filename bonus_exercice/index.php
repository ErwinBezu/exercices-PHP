<?php
session_start();
require_once 'classes.php';

// Initialisation de la session si pas encore définie
if (!isset($_SESSION['vegetaux'])) {
    $_SESSION['vegetaux'] = [];
}

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reset'])) {
        $_SESSION['vegetaux'] = []; // Vider la session
    } elseif (isset($_POST['ajouter'])) {
        $nom = $_POST['nom'] ?? '';
        $couleur = $_POST['couleur'] ?? '';
        $type = $_POST['type'] ?? 'Autre';

        if ($type === 'Fleur') {
            $vegetal = new Fleur($nom, $couleur);
        } elseif ($type === 'Plante') {
            $vegetal = new Plante($nom, $couleur);
        } else {
            $vegetal = new Vegetal($nom, $couleur);
        }

        $_SESSION['vegetaux'][] = $vegetal;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>La serre des 3 fontaines</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f4f4;
        }
        h1 {
            color: #4CAF50;
        }
        form {
            margin-bottom: 20px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        .card {
            background: #e3ffe3;
            border: 1px solid #c3e6c3;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <h1>La serre des 3 fontaines</h1>

    <form method="POST">
        <label>Nom : <input type="text" name="nom" required></label><br><br>
        <label>Couleur : <input type="text" name="couleur" required></label><br><br>
        <label>Type :
            <select name="type">
                <option value="Fleur">Fleur</option>
                <option value="Plante">Plante</option>
                <option value="Autre">Autre</option>
            </select>
        </label><br><br>
        <button type="submit" name="ajouter">Ajouter</button>
        <button type="submit" name="reset">Vider la session</button>
    </form>

    <?php foreach ($_SESSION['vegetaux'] as $vegetal): ?>
        <div class="card">
            <?= htmlspecialchars($vegetal->afficher()) ?>
        </div>
    <?php endforeach; ?>

</body>
</html>
