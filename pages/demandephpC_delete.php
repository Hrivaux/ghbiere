

<?php 

require_once 'sql.php';


    $id = $_POST["id"];
    




 $req="DELETE FROM commande WHERE id_commande = '$id' ";

 if ($bdd->exec($req))

 {
    echo "Suppression réusie";

 }
 else 
 {

    echo "Suppression ratée";
 }


    
    
    
    
    ?>