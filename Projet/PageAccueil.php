<?php
session_start();    //Demarrage de la session
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
        <float class="titre">
            Print'dustries™
        </float>
        <float class="identifiant">
            <?php 
                if(!isset($_SESSION['pseudo'])){    
                    include("ZoneConnexion.php");   // Affiche la zone de connexion si pas connecté
                }
                else{
                    include("ZoneConnecte.php");    // Affiche la zone personalisée si connecté
                }
            ?>
        </float>
    </div>
</br>
</br>

<ul id="menu-accordeon">
        <li><a href="#">Impression personnalisée</a>
           <ul>
              <li><a href="./PageSelection.html">Imprimer sa pièce </a></li>
              <li><a href="./EnSavoirPlus.html">En savoir plus</a></li>
        
           </ul>
        </li>
         <li><a href="#">Créer une pièce 3D</a>
           <ul>
              <li><a href="./Plan3D.html">Envoyer un plan</a></li>
              <li><a href="./EnSavoirPlus.html">En savoir plus </a></li>
        
           </ul>
        </li>
        <li><a href="./TopPrint.html">Top print</a>
           <ul>
           </ul>
        </li>
    </ul>
        <img class="Image3D" src="./ImagesProjet/20180104_220525.jpg" width="540px" height="400px" alt="Exemple pièce 3D"/>
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
            </body>
</html>