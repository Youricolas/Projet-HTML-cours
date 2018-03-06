<?php
    session_start(); // Récupération de la session active
    session_destroy(); // Destruction de la session
?>

<!DOCTYPE html>
<?php
    // Retour à la page principale du site
    header('Location: PageAccueil.php');
?>