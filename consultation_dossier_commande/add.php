<?php
$num1=$_POST['numeroSS1'];
$num2=$_POST['numeroSS2'];
$num3=$_POST['numeroSS3'];
$num4=$_POST['numeroSS4'];
$num5=$_POST['numeroSS5'];
$num6=$_POST['numeroSS6'];
$num7=$_POST['numeroSS7'];
$ca=$_POST['Code'];
$nom=$_POST['nom'];
$pnom=$_POST['prenom'];
$benefice=$_POST['Benefice'];
$addr=$_POST['Adresse'];
$ville=$_POST['Ville'];
$cp=$_POST['cp'];
$email=$_POST['email'];
$pd=$_POST['Téléphone-domicile'];
$pp=$_POST['Téléphone-portable'];
$pb=$_POST['Téléphone-bureau'];
$organisme=$_POST['Organisme'];
$classe=$_POST['Classe'];
$nf=$_POST['N-Forme'];
$comment=$_POST['message'];


$connexion=mysqli_connect("localhost","root","","frlconseil");
$query_insert = "INSERT INTO client (CLIENT_NSS,CLIENT_NOM,CLIENT_PRENOM,CLIENT_ADRESSE,CLIENT_VILLE,CLIENT_CODE_POSTALE,CLIENT_TELEPHONE_FIXE,CLIENT_TELEPHONE_MOBILE,CLIENT_TELEPHONE_BUREAU,CLIENT_ORGANISME,CLIENT_DATE_CREATION,CLIENT_DATE_MODIFICATION,CLIENT_DATE_MODIFICATION_INTERNE,CLIENT_COMMENTAIRE,CLIENT_CLASSE,CLIENT_NUMERO_FORME,CLIENT_BENEFICIAIRE,CLIENT_EMAIL,CLIENT_CODE_AFFILIATION_ORGANISME) VALUES(";
              $query_insert = $query_insert."'".$_POST["numeroSS1"]." ".$_POST["numeroSS2"]." ".$_POST["numeroSS3"]." ".$_POST["numeroSS4"]." ".$_POST["numeroSS5"]." ".$_POST["numeroSS6"]." ".$_POST["numeroSS7"]."'";
              $query_insert = $query_insert." ,'".str_replace("'","''",$_POST["nom"])."'";
              $query_insert = $query_insert." ,'".str_replace("'","''",$_POST["prenom"])."'";
              $query_insert = $query_insert." ,'".str_replace("'","''",$_POST["Adresse"])."'";
              $query_insert = $query_insert." ,'".str_replace("'","''",$_POST["Ville"])."'";
              $query_insert = $query_insert." ,'".$_POST["cp"]."'";
              $query_insert = $query_insert." ,'".$_POST["Téléphone-domicile"]."'";
              $query_insert = $query_insert." ,'".$_POST["Téléphone-portable"]."'";
              $query_insert = $query_insert." ,'".$_POST["Téléphone-bureau"]."'";
              $query_insert = $query_insert.",'".str_replace("'","''",$_POST["Organisme"])."'";            
              
              $today = getdate();
              $query_insert = $query_insert." ,'".$today["mday"]."-".$today["mon"]."-".$today["year"]."'";
              $query_insert = $query_insert." ,'".$today["mday"]."-".$today["mon"]."-".$today["year"]."'";
              $query_insert = $query_insert." ,'".$today["year"]."-".$today["mon"]."-".$today["mday"]."'";
              $query_insert = $query_insert." ,'".str_replace("'","''",$_POST["message"])."'";
              
               $query_insert = $query_insert." ,'".$_POST["Classe"]."'";
               $query_insert = $query_insert." ,'".$_POST["N-Forme"]."'";              
               $query_insert = $query_insert." ,'".$_POST["Benefice"]."'";
              
               $query_insert = $query_insert." ,'".$_POST["email"]."'";
               $query_insert = $query_insert." ,'".$_POST["Code"]."')";
               echo $query_insert;
              $result = mysqli_query($connexion,$query_insert);

if($result==true){
	header("location:index.html");
}
else echo "error";
             





























?>