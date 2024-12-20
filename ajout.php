<?php
include('connexion.php');

// Vérifier que le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $club = mysqli_real_escape_string($conn, $_POST['club']);
    $nationalite = mysqli_real_escape_string($conn, $_POST['nationalite']);
    $positio = mysqli_real_escape_string($conn, $_POST['positio']);
    $img = $_FILES['img']['name']; // Le nom du fichier image

    // Déplacer l'image vers un répertoire spécifique
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($img);
    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

    // Insertion du club (s'il n'existe pas déjà)
    $club_query = "INSERT INTO Club (nom, logo) VALUES ('$club', '')";
    mysqli_query($conn, $club_query);

    // Insertion de la nationalité (s'il n'existe pas déjà)
    $natio_query = "INSERT INTO Nationality (nom, continent) VALUES ('$nationalite', '')";
    mysqli_query($conn, $natio_query);

    // Récupérer l'id du club et de la nationalité ajoutés
    $id_club = mysqli_insert_id($conn); // ID du dernier club inséré
    $id_natio = mysqli_insert_id($conn); // ID de la dernière nationalité insérée

    // Insertion du joueur dans la table Player
    $query = "INSERT INTO Player (nom, img, positio, id_club, id_natio) 
              VALUES ('$nom', '$target_file', '$positio', $id_club, $id_natio)";
    
    if (mysqli_query($conn, $query)) {
        echo "Joueur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du joueur: " . mysqli_error($conn);
    }
}
?>
