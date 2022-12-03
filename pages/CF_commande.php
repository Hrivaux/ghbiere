
<?php 
require_once 'sql.php';


    $numero_user  = $_POST["numero_user"];
    $date_com = $_POST["date_com"];
    $Mode_paiement = $_POST["Mode_paiement"];




 $req="INSERT INTO commande (numero_user , date_com, Mode_paiement) VALUES ('$numero_user ','$date_com','$Mode_paiement')";

 if ($bdd->exec($req))

 {
    echo "Insertion réusie";

 }
 else 
 {

    echo "Insertion ratée";
 }


    ?>