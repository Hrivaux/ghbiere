

<?php 

require_once 'sql.php';


    $id = $_POST["id"];
    




 $req="DELETE FROM fournisseur WHERE id_fournisseur = '$id' ";

 if ($bdd->exec($req))

 {
    echo "Suppression réusie";

 }
 else 
 {

    echo "Suppression ratée";
 }


    
    
    
    
    ?>