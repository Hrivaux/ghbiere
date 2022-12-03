

<?php 

require_once 'sql.php';


    $identifiant_id = $_POST["identifiant_id"];
    




 $req="DELETE FROM users WHERE identifiant_id = '$identifiant_id' ";

 if ($bdd->exec($req))

 {
    echo "Suppression réusie";

 }
 else 
 {

    echo "Suppression ratée";
 }


    
    
    
    
    ?>