<?php
session_start(); // On démarre la session 
?>

<!DOCTYPE html>
<html>
    <head>
            <style>
            
            </style>
    </head>

    <!-- Page principale du site -->
    <body>
        <?php // Connexion à la base de données
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=sitewebcours;charset=utf8', 'Youricolas', 'Ccvxq48MnUEh');
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
            if(!isset($_POST['pseudo']) OR !isset($_POST['mdp'])) { // Verification que les champs sont remplis
                die('Erreur : Les champs doivent être renseigné');
            }
            if(strlen($_POST['pseudo']) == 0 OR strlen($_POST['mdp']) == 0) { // Verification que les champs sont bien remplis
                die('Erreur : Les champs doivent être renseigné');
            }
            /* Pas d'erreur, on verifie les informations remplies */
            $username = $_POST['pseudo'];   // Memorisation des informations
            $password = $_POST['mdp'];
            $sql = 'SELECT pseudo, MotDePasse FROM utilisateur WHERE pseudo = "'. $username .'" LIMIT 1;';   //Recherche occurence dans la Base de Donnée
            $response = $bdd->query($sql);  //Mémorisation de la réponse
            $response = $response->fetch();
            if($response == false) { // Si utilisateur non trouvé dans la Base de Donnée
                die('Aucun utilisateur correspondant trouver');
            }
            if($response['MotDePasse'] != $password) { // Si MDP faux
                die('Mot de passe incorrecte');
            }
            /* Memorisation du pseudo dans la session active */
            $_SESSION['pseudo'] = $username;    
            // Redirection vers la page principale
            header('Location: PageAccueil.php');
        ?>
    </body>
</html>