<?php
    session_abort();
    unset($_SESSION['id']);
    header('location:connexion.php');
?>