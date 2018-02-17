<!-- Zone Connecte -->
<div class="ZoneCo" id="connect_zone">
    <form action="Deconnexion.php" method="post">
        <tr>
        <td><img src="./ImagesProjet/image_cerf.png" width="60"></img> <td>
        </tr>
        <br><label ><?php echo $_SESSION['pseudo'];?></label>
        </br>
        <tr>
        <input class="Bouton2" type="submit" value="Deconnexion"/>
        </tr>
    </form>
</div>