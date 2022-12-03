
<?php

require_once 'sql.php';

$identifiant_id = $_POST["identifiant_id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$MDP = $_POST["mot_de_passe"];
$identifiant = $_POST["identifiant"];
$age = $_POST["age"];


$req="UPDATE users SET ";

   if (!empty($identifiant))
{
   $req=$req."identifiant='$identifiant',";
}

   if (!empty($MDP))
{
   $req=$req."mot_de_passe='$MDP',";
}

   if (!empty($nom))
{
   $req=$req."nom='$nom',";
}

   if (!empty($prenom))
{
   $req=$req."prenom='$prenom',";
}

   if (!empty($age))
{
   $req=$req."age='$age',";
}

   if (!empty($email))
{
   $req=$req."email='$email',";
}

$req=substr($req,0, -1)." WHERE identifiant_id = $identifiant_id";



if ($bdd -> exec($req))
{
   echo "Update réussie";
}
else 
{
   echo "Update raté";
}



?>