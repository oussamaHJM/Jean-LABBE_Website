<?php
   $cnx = mysqli_connect("localhost","root","","frlconseil");
   $sql="INSERT INTO organisme(ORGANISME_CODE,ORGANISME_LIBELLE,ORGANISME_ADRESSE,ORGANISME_CODE_POSTAL,ORGANISME_VILLE,ORGANISME_TEL,ORGANISME_FAX,ORGANISME_EMAIL,ORGANISME_DATE_CREATION,ORGANISME_DATE_MODIFICATION,ORGANISME_COMMENTAIRE)VALUES('".$_POST['code']."','".$_POST['libelle']."','".$_POST['adresse']."','".$_POST['code-postal']."','".$_POST['ville']."','".$_POST['tel']."','".$_POST['fax']."','".$_POST['email']."','31-7-2017','31-7-2017','".$_POST['message']."');";
  if (!mysqli_query($cnx,$sql))
  {
       die('<div class="msg">Erreur: '. mysqli_error().'</div>');
  }
  else
 {
        mysqli_free_result($result);
        header("Location:index.php");
 }
?>