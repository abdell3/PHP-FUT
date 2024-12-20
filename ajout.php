<?php
include('connexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = mysqli_real_escape_string(mysql: $conn, string: $_POST['nom']);
    $club = mysqli_real_escape_string(mysql: $conn, string: $_POST['club']);
    $nationalite = mysqli_real_escape_string(mysql: $conn, string: $_POST['nationalite']);
    $positio = mysqli_real_escape_string(mysql: $conn, string: $_POST['positio']);
    $img = $_FILES['img']['name']; 

    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename(path: $img);
    move_uploaded_file(from: $_FILES['img']['tmp_name'], to: $target_file);

    $club_query = "INSERT INTO Club (nom, logo) VALUES ('$club', '')";
    mysqli_query(mysql: $conn, query: $club_query);

    
    $natio_query = "INSERT INTO Nationality (nom, continent) VALUES ('$nationalite', '')";
    mysqli_query(mysql: $conn, query: $natio_query);

    $id_club = mysqli_insert_id(mysql: $conn); 
    $id_natio = mysqli_insert_id(mysql: $conn); 

    
    $query = "INSERT INTO Player (nom, img, positio, id_club, id_natio) 
              VALUES ('$nom', '$target_file', '$positio', $id_club, $id_natio)";
    
    if (mysqli_query(mysql: $conn, query: $query)) {
        echo "Joueur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du joueur: " . mysqli_error(mysql: $conn);
    }
}
?>
