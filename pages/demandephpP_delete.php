

<?php 

require_once 'sql.php';


    $id = $_POST["id"];
    




 $req="DELETE FROM produit WHERE id_produit = '$id' ";

 if ($bdd->exec($req))

 {
    echo "Suppression réusie";

 }
 else 
 {

    echo "Suppression ratée";
 }


    
    
    
    
    ?>