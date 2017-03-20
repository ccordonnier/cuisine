<form action="traitement.php" method="post">
    
    <h2>Ajout recette</h2>
    

    <label>Titre : <br><input type="text" name="titre"></label>
    <br>
    <label>Nombre de personnes : <br><input type="text" name="nbPersonne"></label>
     <br>   
    <label>Catégorie : <br><input type="text" name="idCategories"></label>
    <br>
    <label>Temps de préparation : <br><input type="text" name="tempsPrep"></label>
    <br>    
    <label>Temps de cuisson : <br><input type="text" name="tempsCuisson"></label>
    <br>
    <label>Liste des ingrédients : <br><input type="text" name="listeIngredients"></label>
    <br>
    <label>Description : <br><input type="text" name="description"></label>
    <br>
    <input type="submit" value="Ajouter" name="validerRecette">
</form>

<a href="http://cuisine.corentincordonnier.fr/index.php">Retour</a>