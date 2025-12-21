<?php
    include 'connexionBD.php';

    $currentDateHeure = date('Y-m-d').' '.date('H:i:s');

    $sql = "INSERT INTO reservations (visite_id, user_id, nbpersonnes, date_reservation) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $sql);
    mysqli_stmt_bind_param($stmt, "iiis", $_POST['id_visite'], $_POST['id_user'], $_POST['nb_places'], $currentDateHeure);
    mysqli_stmt_execute($stmt);
    
    header('location:reservations.php');
?>