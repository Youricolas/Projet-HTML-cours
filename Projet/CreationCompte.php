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
            $req = $bdd->prepare('INSERT INTO utilisateur(email, telephone, pseudo , MotDePasse) VALUES(?,?,?,?)');//les '?' sont les zones de remplissage 
            $req->execute(array($_POST['email'],$_POST['telephone'],$_POST['pseudo'],$_POST['password1']));//où viennent se loger les variables.
            header('Location: ./Felicitation.html');
        ?>
        
    
    </body>
</html>

