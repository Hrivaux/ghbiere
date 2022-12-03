
<?php 
require_once 'sql.php';


    $qte_produit = $_POST["qte_produit"];
    $nom_produit = $_POST["nom_produit"];
    $prix_produit = $_POST["prix_produit"];




 $req="INSERT INTO produit(qte_produit, nom_produit, prix_produit) VALUES ('$qte_produit','$nom_produit','$prix_produit')";

 if ($bdd->exec($req))

 {
    echo "Insertion réusie";

 }
 else 
 {

    echo "Insertion ratée";
 }


    
    
    
    
    ?>