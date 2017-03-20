<?php
session_start();
if (isset($_SESSION['erreurMdp'])){
    if ($_SESSION['erreurMdp']){
        echo "Il y a une erreur avec le mot de passe veuillez réessayer";
    }
}
?>
<form action="traitement.php" method="post">    
    <label> Pseudo <br> <input type="text" name="pseudo"><br></label>
    <br>    
    <label> Nom <br> <input type="text" name="nom"><br></label>
    <br>
    <label> Prenom <br> <input type="text" name="prenom"><br></label>
    <br>
    <label> Date de naissance <br> <input type="date" name="dateNaissance"><br></label>
    <br>
    <label> Email <br> <input type="email" name="email"><br></label>
    <br>   
    <label> Mot de Passe <br> <input type="password" name="mdp"><br></label>
    <br>    
    <label> Confirmation <br> <input type="password" name="mdp2"><br></label>
    <br>    
    <input type="submit" name="validerInscription" value="Valider">
    <br>    
</form>

