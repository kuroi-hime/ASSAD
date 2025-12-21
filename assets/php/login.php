<?php
    include 'connexionBD.php';

    $mail = $_POST['email'];
    $password = hash('md5', $_POST['password']);

    $sql = "SELECT * FROM UTILISATEURS WHERE email = ?";
    $stmt = mysqli_prepare($connexion, $sql);

    mysqli_stmt_bind_param($stmt, "s", $mail);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt); //type result mysqli_result

    $row = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION['id'] = $row['id_user'];

    if($row){
        if($password == $row['motpasse_hash']){
            unset($_SESSION['email']);
            if($row['role']=='Visiteur'){
                header('location:animaux.php');
            }else{
                if($row['role']=='Guide'){
                    header('location:gestionVisites.php');
                }else{
                    header('location:dashbord.php');
                }
            }
        }else{
            $_SESSION['email'] = $row['email'];
            header('location:connexion.php?error=Mot+de+passe+incorrect.');
        }
    }else{
        header('location:connexion.php?error=Email+incorrect.');
    }

    mysqli_stmt_close($stmt);
?>