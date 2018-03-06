<html>
    <head>
            <style>
            
            </style>
    </head>

    <!-- Page principale du site -->
    <body>
        <?php // Connexion à la base de données
            $bdd = new PDO('mysql:host=localhost;dbname=sitewebcours;charset=utf8', 'Youricolas', 'Ccvxq48MnUEh');
            // Ajout des informations du formulaire dans la Database
            $req = $bdd->prepare('INSERT INTO selection(Qualite, Couleur,Transparence, Matiere, Densite, Support,Vitesse) VALUES(?,?,?,?,?,?,?)');//les '?' sont les zones de remplissage 
            $req->execute(array($_POST['Qualite'],$_POST['Couleur'],$_POST['Transparence']$_POST['Matiere'],$_POST['Densite'],$_POST['Support'],$_POST['Vitesse']));//où viennent se loger les variables.
            header('Location: ./CommandeValide.html');
        ?>
        
    <a href=./PageAccueil.html> Retour</a>
    </body>
</html>

