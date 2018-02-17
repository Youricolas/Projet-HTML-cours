<?php
    session_start(); // Recuperation de la session active
    session_destroy(); // Destruction de la session
?>

<!DOCTYPE html>
<?php
    // Retour à l apage principale du site
    header('Location: PageAccueil.php');
?>