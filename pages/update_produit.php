<?php

require_once 'sql.php';

$id_produit = $_POST["id_produit"];
$qte_produit = $_POST["qte_produit"];
$nom_produit = $_POST["nom_produit"];
$prix_produit = $_POST["prix_produit"];



$req="UPDATE produit SET ";

   if (!empty($qte_produit))
{
   $req=$req."qte_produit='$qte_produit',";
}

   if (!empty($nom_produit))
{
   $req=$req."nom_produit='$nom_produit',";
}

   if (!empty($prix_produit))
{
   $req=$req."prix_produit='$prix_produit',";
}



$req=substr($req,0, -1)." WHERE id_produit  = '$id_produit' ";



if ($bdd -> exec($req))
{
   echo "Update réussie";
}
else 
{
   echo "Update raté";
}



?>