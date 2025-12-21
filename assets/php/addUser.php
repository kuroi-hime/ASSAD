<?php
    include 'connexionBD.php';

    $nom = strtolower($_POST['nom']);
    $nom = ucfirst($_POST['nom']);
    $role = $_POST['role'];
    $mail = $_POST['email'];
    $password = hash('md5', $_POST['password']);

    // 2. Préparer la requête
    $sql = "INSERT INTO utilisateurs (nom_user, email, role, motpasse_hash) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $sql);

    // 3. Lier les paramètres
    // s = string, i = integer, d = double, b = blob
    mysqli_stmt_bind_param($stmt, "ssss", $nom, $mail, $role, $password);

    // 4. Exécuter
    mysqli_stmt_execute($stmt);

    // 5. Fermer
    mysqli_stmt_close($stmt);

    header('location:connexion.php');
?>