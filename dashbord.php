<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Gestion des Joueurs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col">

        <!-- Sidebar -->
        <div class="bg-blue-800 text-white w-64 p-6 space-y-6">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
            <ul>
                <li>
                    <a href="#ajouter-joueur" class="block py-2 text-lg hover:bg-blue-700 rounded-md">Ajouter un joueur</a>
                </li>
                <li>
                    <a href="#joueurs" class="block py-2 text-lg hover:bg-blue-700 rounded-md">Voir les joueurs</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-10">
            <h1 class="text-3xl font-semibold mb-6">Gestion des Joueurs</h1>

            <!-- Ajouter un joueur -->
            <section id="ajouter-joueur" class="mb-10 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-medium mb-4">Ajouter un Nouveau Joueur</h2>
                <form method="POST" action="ajouter_joueur.php" enctype="multipart/form-data" class="space-y-4">
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700">Nom du joueur</label>
                        <input type="text" name="nom" id="nom" class="block w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="club" class="block text-sm font-medium text-gray-700">Nom du Club</label>
                        <input type="text" name="club" id="club" class="block w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="nationalite" class="block text-sm font-medium text-gray-700">Nationalité</label>
                        <input type="text" name="nationalite" id="nationalite" class="block w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="positio" class="block text-sm font-medium text-gray-700">Position</label>
                        <input type="text" name="positio" id="positio" class="block w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>
                    <div>
                        <label for="img" class="block text-sm font-medium text-gray-700">Image du joueur</label>
                        <input type="file" name="img" id="img" class="block w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>
                    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ajouter le Joueur</button>
                </form>
            </section>

            <!-- Liste des joueurs -->
            <section id="joueurs" class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-medium mb-4">Liste des Joueurs</h2>
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left border-b">Nom</th>
                            <th class="px-4 py-2 text-left border-b">Club</th>
                            <th class="px-4 py-2 text-left border-b">Nationalité</th>
                            <th class="px-4 py-2 text-left border-b">Position</th>
                            <th class="px-4 py-2 text-left border-b">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connexion à la base de données
                        include('connexion.php');

                        // Récupérer les joueurs depuis la base de données
                        $result = mysqli_query($conn, "SELECT * FROM Player");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td class='px-4 py-2 border-b'>{$row['nom']}</td>";
                            echo "<td class='px-4 py-2 border-b'>{$row['id_club']}</td>"; // Affichage du club (à remplacer par le nom du club)
                            echo "<td class='px-4 py-2 border-b'>{$row['id_natio']}</td>"; // Affichage de la nationalité (à remplacer par le nom de la nationalité)
                            echo "<td class='px-4 py-2 border-b'>{$row['positio']}</td>";
                            echo "<td class='px-4 py-2 border-b'><img src='{$row['img']}' class='w-12 h-12 rounded-full'></td>";
                            echo "</tr>";
                        }

//                         $result = mysqli_query($conn, "SELECT p.*, c.nom AS club_nom, n.nom AS natio_nom 
//                                FROM Player p
//                                JOIN Club c ON p.id_club = c.id_club
//                                JOIN Nationality n ON p.id_natio = n.id_natio");
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<tr>";
//     echo "<td class='px-4 py-2 border-b'>{$row['nom']}</td>";
//     echo "<td class='px-4 py-2 border-b'>{$row['club_nom']}</td>";
//     echo "<td class='px-4 py-2 border-b'>{$row['natio_nom']}</td>";
//     echo "<td class='px-4 py-2 border-b'>{$row['positio']}</td>";
//     echo "<td class='px-4 py-2 border-b'><img src='{$row['img']}' class='w-12 h-12 rounded-full'></td>";
//     echo "</tr>";
// }


// // Requête pour récupérer les joueurs avec les noms des clubs et des nationalités
// $result = mysqli_query($conn, "
//     SELECT p.*, c.nom AS club_nom, n.nom AS natio_nom 
//     FROM Player p
//     JOIN Club c ON p.id_club = c.id_club
//     JOIN Nationality n ON p.id_natio = n.id_natio
// ");

// // Affichage des joueurs avec leurs informations
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "<tr>";
//     echo "<td class='px-4 py-2 border-b'>{$row['nom']}</td>";
//     echo "<td class='px-4 py-2 border-b'>{$row['club_nom']}</td>"; // Affiche le nom du club
//     echo "<td class='px-4 py-2 border-b'>{$row['natio_nom']}</td>"; // Affiche la nationalité
//     echo "<td class='px-4 py-2 border-b'>{$row['positio']}</td>";
//     echo "<td class='px-4 py-2 border-b'><img src='{$row['img']}' class='w-12 h-12 rounded-full'></td>";
//     echo "</tr>";
// }





                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

</body>
</html>




<!-- Liste des joueurs
<section id="joueurs" class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-medium mb-4">Liste des Joueurs</h2>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left border-b">Nom</th>
                <th class="px-4 py-2 text-left border-b">Club</th>
                <th class="px-4 py-2 text-left border-b">Nationalité</th>
                <th class="px-4 py-2 text-left border-b">Position</th>
                <th class="px-4 py-2 text-left border-b">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connexion à la base de données
            // include('connexion.php');
            
            // Récupérer les joueurs depuis la base de données
            // $query = "SELECT p.*, c.nom AS club_nom, n.nom AS natio_nom 
            //           FROM Player p
            //           JOIN Club c ON p.id_club = c.id_club
            //           JOIN Nationality n ON p.id_natio = n.id_natio";
            // $result = mysqli_query($conn, $query);

            // while ($row = mysqli_fetch_assoc($result)) {
            //     echo "<tr>";
            //     echo "<td class='px-4 py-2 border-b'>{$row['nom']}</td>";
            //     echo "<td class='px-4 py-2 border-b'>{$row['club_nom']}</td>"; // Affichage du nom du club
            //     echo "<td class='px-4 py-2 border-b'>{$row['natio_nom']}</td>"; // Affichage du nom de la nationalité
            //     echo "<td class='px-4 py-2 border-b'>{$row['positio']}</td>";
            //     echo "<td class='px-4 py-2 border-b'><img src='{$row['img']}' class='w-12 h-12 rounded-full'></td>";
            //     echo "</tr>";
            // }
            // ?>
        </tbody>
    </table>
</section> -->