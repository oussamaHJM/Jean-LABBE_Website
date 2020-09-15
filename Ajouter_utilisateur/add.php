<?php
$nom=$_POST['nom'];
$prenom=$_POST['Prenom'];
$login=$_POST['login'];
$mdp=$_POST['password'];
$comment=$_POST['message'];

$connexion=mysqli_connect("localhost","root","","frlconseil");
$query="INSERT INTO utilisateur (UTILISATEUR_NOM,UTILISATEUR_PRENOM,UTILISATEUR_LOGIN,UTILISATEUR_PWD,UTILISATEUR_DATE_CREATION,UTILISATEUR_DATE_MODIFICATION,UTILISATEUR_COMMENTAIRE) VALUES 
('".$_POST['nom']."','".$_POST['Prenom']."','".$_POST['login']."','".$_POST['password']."','2010-12-22','2010-12-22','".$_POST['message']."')";
if(!mysqli_query($connexion,$query)){

echo '<script>alert(" Erreur");history.back();</script>';

}
else HEADER("location:index.php");

















?>