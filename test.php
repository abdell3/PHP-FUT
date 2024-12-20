<?php

$conn = mysqli_connect(hostname: "db", username: "myuser", password: "mypassword", database: "futgestion");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "
    SELECT p.*, c.nom AS club_nom, n.nom AS natio_nom 
    FROM Player p
    JOIN Club c ON p.id_club = c.id_club
    JOIN Nationality n ON p.id_natio = n.id_natio
";
$result = mysqli_query(mysql: $conn, query: $query);

if (!$result) {
    die("Erreur de requête : " . mysqli_error(mysql: $conn));
}


mysqli_close(mysql: $conn);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestion des Joueurs</title>
    
</head>
<body>


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
                            
                            if (mysqli_num_rows(result: $result) > 0) {
                                
                                while ($row = mysqli_fetch_assoc(result: $result)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars(string: $row['nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars(string: $row['club_nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars(string: $row['natio_nom']) . "</td>";
                                    echo "<td>" . htmlspecialchars(string: $row['positio']) . "</td>";
                                    echo "<td><img src='" . htmlspecialchars(string: $row['img']) . "' alt='Image du joueur' style='width:50px;height:50px;border-radius:50%;'></td>";
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