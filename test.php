<?php
// Connexion à la base de données
$conn = mysqli_connect("db", "myuser", "mypassword", "futgestion");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Requête pour récupérer les joueurs avec les informations des clubs et des nationalités
$query = "
    SELECT p.*, c.nom AS club_nom, n.nom AS natio_nom 
    FROM Player p
    JOIN Club c ON p.id_club = c.id_club
    JOIN Nationality n ON p.id_natio = n.id_natio
";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Erreur de requête : " . mysqli_error($conn));
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion des Joueurs</title>
    <style>
        /* Ajoutez ici vos styles pour le dashboard, la table, etc. */
    </style>
</head>
<body>

    <!-- Structure du dashboard (vous n'avez pas demandé de modification ici, je la conserve) -->

    <div class="dashboard">
        <div class="content">
            <h1>Gestion des Joueurs</h1>
            <div class="row">
                <div class="col">
                    <h2>Liste des joueurs</h2>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Club</th>
                                <th>Nationalité</th>
                                <th>Position</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Vérification si des résultats sont présents
                            if (mysqli_num_rows($result) > 0) {
                                // Affichage des joueurs
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['club_nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['natio_nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['positio']) . "</td>";
                                    echo "<td><img src='" . htmlspecialchars($row['img']) . "' alt='Image du joueur' style='width:50px;height:50px;border-radius:50%;'></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>Aucun joueur trouvé.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>