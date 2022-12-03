

<?php 
require_once 'sql.php';


    $nom = $_POST["nom"];
    $ville = $_POST["ville"];
    $cp = $_POST["code_postal"];
    $adresse = $_POST["adresse"];
    




 $req="INSERT INTO fournisseur (nom_F, ville_F, CP_fournisseur, adresse_fournisseur) VALUES ('$nom','$ville','$cp','$adresse')";

 if ($bdd->exec($req))

 {
    echo "Insertion réusie";

 }
 else 
 {

    echo "Insertion ratée";
 }


    
    
    
    
    ?>