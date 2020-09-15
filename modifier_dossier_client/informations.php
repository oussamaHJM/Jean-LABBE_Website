<?php
            $connection=mysqli_connect("localhost","root","","frlconseil");
              $query_update = "UPDATE client SET";
              $query_update = $query_update." CLIENT_NSS ='".$_POST["nss"]."',";
              $query_update = $query_update." CLIENT_NOM ='".str_replace("'","''",$_POST["nom"])."',";
              $query_update = $query_update." CLIENT_PRENOM ='".str_replace("'","''",$_POST["prenom"])."',";
              $query_update = $query_update." CLIENT_ADRESSE ='".str_replace("'","''",$_POST["Adresse"])."',";
              $query_update = $query_update." CLIENT_VILLE ='".str_replace("'","''",$_POST["Ville"])."',";
              $query_update = $query_update." CLIENT_CODE_POSTALE ='".$_POST["cp"]."',";
              $query_update = $query_update." CLIENT_EMAIL ='".$_POST["email"]."',";              
              $query_update = $query_update." CLIENT_TELEPHONE_FIXE ='".$_POST["domicile"]."',";
              $query_update = $query_update." CLIENT_TELEPHONE_MOBILE ='".$_POST["portable"]."',";
              $query_update = $query_update." CLIENT_TELEPHONE_BUREAU ='".$_POST["bureau"]."',";
             
              $query_update = $query_update." CLIENT_NUMERO_FORME ='".$_POST["numForm"]."',";
              $query_update = $query_update." CLIENT_BENEFICIAIRE ='".$_POST["beneficiare"]."',";
              $query_update = $query_update." CLIENT_CLASSE ='".$_POST["classe"]."',";
             
              $query_update = $query_update." CLIENT_CODE_AFFILIATION_ORGANISME ='".$_POST["codeAffiliationOrganisme"]."',";
                                    
              
              if(isset($_POST["organisme"]))
              {
                $query_update = $query_update." CLIENT_ORGANISME ='".str_replace("'","''",$_POST["Organisme"])."',";
              }
              $today = getdate();
              $query_update = $query_update." CLIENT_DATE_MODIFICATION ='".$today["mday"]."-".$today["mon"]."-".$today["year"]."',";
              $query_update = $query_update." CLIENT_DATE_MODIFICATION_INTERNE ='".$today["year"]."-".$today["mon"]."-".$today["mday"]."',";
              $query_update = $query_update." CLIENT_COMMENTAIRE ='".str_replace("'","''",$_POST["commentaire"])."'";
              $query_update = $query_update." WHERE CLIENT_NUM ='".$_POST["numC"]."'";
              $result = mysqli_query($connection,$query_update);
              if (!$result) 
              {
                die('<div class="msg">Erreur: '. mysqli_error().'</div>');
              }
             
            
