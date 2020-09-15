<?php
session_start();
$user=$_POST['username'];
$pwd=$_POST['password'];

$connexion=mysqli_connect("localhost","root","","frlconseil");
$query="SELECT * FROM utilisateur";
$rep=mysqli_query($connexion,$query);
while($data=mysqli_fetch_array($rep,MYSQLI_ASSOC)){
 if($user==$data['UTILISATEUR_LOGIN'] AND $pwd==$data['UTILISATEUR_PWD']){
 	$_SESSION['connexion'] =true;
    $_SESSION['username']=$user;
    $_SESSION['password']=$pwd;
    HEADER("location:..\Acceuil_d'utilisateur\index.php");
    exit();
  }
  else HEADER("location:..\login_page_error\index_login.html");
}


















?>