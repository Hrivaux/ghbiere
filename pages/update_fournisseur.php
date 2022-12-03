<?php

require_once 'sql.php';

$id_fournisseur = $_POST["id_fournisseur"];
$ville_F = $_POST["ville_F"];
$nom_F = $_POST["nom_F"];
$CP_fournisseur = $_POST["CP_fournisseur"];
$adresse_fournisseur = $_POST["adresse_fournisseur"];




$req="UPDATE fournisseur SET ";

   if (!empty($ville_F))
{
   $req=$req."ville_F='$ville_F',";
}

   if (!empty($nom_F))
{
   $req=$req."nom_F='$nom_F',";
}

   if (!empty($CP_fournisseur))
{
   $req=$req."CP_fournisseur='$CP_fournisseur',";
}

if (!empty($adresse_fournisseur))
{
   $req=$req."adresse_fournisseur='$adresse_fournisseur',";
}



$req=substr($req,0, -1)." WHERE id_fournisseur  = '$id_fournisseur' ";



if ($bdd -> exec($req))
{
   echo "Update réussie";
}
else 
{
   echo "Update raté";
}



?>