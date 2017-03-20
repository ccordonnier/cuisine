<?php
session_start();
// On vérifie si les deux mots de passe pour
// l'inscription sont identiques, sinon on redirige vers inscription.php
// et on dit qu'il y a une erreur grace à session erreur mdp
if (isset($_POST['validerInscription'])){
    $mdp = sha1( $_POST['mdp'] );
    $mdp2 = sha1( $_POST['mdp2'] );
    if ($mdp != $mdp2){
        $_SESSION['erreurMdp']=TRUE;
        header('Location: http://cuisine.corentincordonnier.fr/inscription.php');
        exit;
    }
    else
    {
    $SESSION['erreurMdp']=FALSE;
    }
}
require 'connexion.php';
// on verifie si le mdp correspond à l'email, sinon on redirige vers la page
// de login avec un message d'erreur grace a la variable de session erreur mdp
//    /!\ a finir je sais plus comment on fait les select en pdo ^^ /!\
/*if (isset($_POST['login'])){
    $mdp = sha1( $_POST['mdp'] );
    $email = $_POST['email'];
    $sql_select_user="
    Select id,motDePasse from user where email=".$email; 
    $req_select_user=$pdo->prepare($sql_select_user);
    $req_insert_recette->execute(array(
                                       'titre'=>$titre,
                                       'nbPersonne'=>$nbPersonne,
                                       'idCategories'=>$idCategories,
                                       'tempsPrep'=>$tempsPrep,
                                       'tempsCuisson'=>$tempsCuisson,
                                       'listeIngredients'=>$listeIngredients,
                                       'descriptif'=>$description,
                                       ));
    
    
    
    
    
    if ($mdp != $mdp2){
        $_SESSION['erreurMdp']=TRUE;
        header('Location: http://cuisine.corentincordonnier.fr/inscription.php');
        exit;
    }
    else
    {
    $SESSION['erreurMdp']=FALSE;
    }
}*/
if (isset($_POST['validerInscription'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $dateNaissance = $_POST['dateNaissance'];
    $admin = 0;
    $dateCreation = date("Y-m-d");
    $mdp = sha1( $_POST['mdp'] );
    $sql_insert_user="
    INSERT INTO user (
        nom,
        prenom,
        email,
        dateNaissance,
        admin,
        motDePasse,
        dateCreation
    )
    VALUES (
        :nom,
        :prenom,
        :email,
        :dateNaissance,
        :admin,
        :motDePasse,
        :dateCreation
        );";
    
    $req_insert_user=$pdo->prepare($sql_insert_user);
    
    $req_insert_user->execute(array(
                                    'nom'=>$nom,
                                    'prenom'=>$prenom,
                                    'email'=>$email,
                                    'dateNaissance'=>$dateNaissance,
                                    'admin'=>$admin,
                                    'motDePasse'=>$mdp,
                                    'dateCreation'=>$dateCreation,
                                    ));
};
if (isset($_POST['validerRecette'])){
    $titre            = $_POST['titre'];
    $nbPersonne       = $_POST['nbPersonne'];
    $idCategories     = $_POST['idCategories'];
    $tempsPrep        = $_POST['tempsPrep'];
    $tempsCuisson     = $_POST['tempsCuisson'];
    $listeIngredients = $_POST['listeIngredients'];
    $description      = $_POST['description'];
    //$valid=$_POST['valid'];
    echo $titre;
    echo $nbPersonne;
    echo $idCategories;
    echo $tempsPrep;
    echo $tempsCuisson;
    echo $listeIngredients;
    echo $description;
    $sql_insert_recette="
    INSERT INTO recette(
        titre,
        nbPersonne,
        idCategories,
        tempsPrep,
        tempsCuisson,
        listeIngredients,
        descriptif
        )
    VALUES (
        :titre,
        :nbPersonne,
        :idCategories,
        :tempsPrep,
        :tempsCuisson,
        :listeIngredients,
        :descriptif
        );";
    $req_insert_recette=$pdo->prepare($sql_insert_recette);
    $req_insert_recette->execute(array(
                                       'titre'=>$titre,
                                       'nbPersonne'=>$nbPersonne,
                                       'idCategories'=>$idCategories,
                                       'tempsPrep'=>$tempsPrep,
                                       'tempsCuisson'=>$tempsCuisson,
                                       'listeIngredients'=>$listeIngredients,
                                       'descriptif'=>$description,
                                       ));
};
?>
<a href="http://cuisine.corentincordonnier.fr/index.php">Retour</a>