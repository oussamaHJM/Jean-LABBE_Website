<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="ressorses/css/style.css">
                <link rel="stylesheet" type="text/css" href="ressorses/css/style2.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <title>Ets Jean Labb&eacute;</title>
    </head>
    <body>
       <nav class="back">
            <div class="row">
                <div class="bar">
                    <a href="..\Ajouter_utilisateur\index.php" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
                </div>
                <div class="bar">
                    <a href="../index.php" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnxion</a>
                </div>
                
            </div>
            <div class="row">
                <h3>Est Jhean Labb&eacute;</h3>
            </div>
            
        </nav>
        <nav class="back">
                <div class="row">
                    <ul class="main-nav">
                        <li> <a href="">Gestion Clients</a>
                            <ul>
                                <li><a href="../Consultation_de_la_liste_des_clients/index.php">Consultaion</a></li>                                                          
                                <li><a href="../AJOUTER_NOUVEAU_CLIENT/index.php">Ajout client</a></li>
                                <li><a href="../RECHERCHE_CLIENT/index.php">Recherche Client</a></li>
                                <li><a href="../RECHERCHE_COMMANDE/index.php">Recherche Commande</a></li>
                            </ul>
                        </li>
                        <li><a href="">Gestion Organisme</a>
                            <ul>
                               <li><a href="../cosultation_d'organizme">Consultation</a></li>
                                <li><a href="../ajout_d'organizme">Ajout organisme</a></li>
                            </ul>
                        </li>
                        <li><a href="">Gestion Statistiques</a>
                            <ul>
                                <li><a href="../CONSULTATION_DES_STATISTIQUES_GENERALES/index.php">Statistiques generale</a></li>
                                <li><a href="../Consultation_des_statistiques_demandes_d'ententes/index.php">Statistiques demandes d'ententes</a></li>
                                <li><a href="../Consultation_des_statistiques_accords_recus/index.php">Statistiques accords reçus</a></li>
                                <li><a href="../Consultation_des_statistiques_commandes_facturees/index.php">Statistiques commandes facturées</a></li>
                                <li><a href="../Consultation_des_statistiques_commandes_reglees">Statistiques commandes réglées</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <h2><i class="ion-ios-folder-outline icon"></i>Dossier Client</h2>
            </div>
            <?php
                        echo "<form method=\"post\">";

            $connection=mysqli_connect("localhost","root","","frlconseil");
            if(isset($_POST["validation"]) && $_POST["validation"]== "ok" )
            {
              $query_update = "UPDATE client SET";
              $query_update = $query_update." CLIENT_NSS ='".$_POST["numeroSS1"]." ".$_POST["numeroSS2"]." ".$_POST["numeroSS3"]." ".$_POST["numeroSS4"]." ".$_POST["numeroSS5"]." ".$_POST["numeroSS6"]." ".$_POST["numeroSS7"]."',";
              $query_update = $query_update." CLIENT_NOM ='".str_replace("'","''",$_POST["nom"])."' ,";
              $query_update = $query_update." CLIENT_PRENOM ='".str_replace("'","''",$_POST["prenom"])."' ,";
              /*$query_update = $query_update." CLIENT_ADRESSE ='".str_replace("'","''",$_POST["adresse"])."',";*/
              $query_update = $query_update." CLIENT_VILLE ='".str_replace("'","''",$_POST["ville"])."',";
              $query_update = $query_update." CLIENT_CODE_POSTALE ='".$_POST["codePostal"]."',";
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
                $query_update = $query_update." CLIENT_ORGANISME ='".str_replace("'","''",$_POST["organisme"])."',";
              }
              $today = getdate();
              $query_update = $query_update." CLIENT_DATE_MODIFICATION ='".$today["mday"]."-".$today["mon"]."-".$today["year"]."',";
              $query_update = $query_update." CLIENT_DATE_MODIFICATION_INTERNE ='".$today["year"]."-".$today["mon"]."-".$today["mday"]."',";
              $query_update = $query_update." CLIENT_COMMENTAIRE ='".str_replace("'","''",$_POST["commentaire"])."'";
              $query_update = $query_update." WHERE CLIENT_NUM ='".$_GET["clientNum"]."'";
              $result = mysqli_query($connection,$query_update);
              if (!$result) 
              {
                echo "error";
              }
       
            }
            
            $query1 = "SELECT * FROM client WHERE CLIENT_NUM = '". $_GET["clientNum"]. "'";
            $result1 = mysqli_query($connection,$query1);
            if (!$result1) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
              while ($row1 = mysqli_fetch_array($result1)) 
              {
                 echo "<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='num'>Num&eacute;ro:</label>
                        </div>";
                 echo "<div class='col span-2-of-3'>
                            <div class='tEts'>";
                 echo '<input class="ss1" name=numeroSS1 maxlength=1  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),0,1).'"></input>';
                 echo '<input class="ss2" name=numeroSS2 maxlength=2  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),1,2).'"></input>';
                 echo '<input class="ss3" name=numeroSS3 maxlength=2  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),3,2).'"></input>';
                 echo '<input class="ss4" name=numeroSS4 maxlength=2  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),5,2).'"></input>';
                 echo '<input class="ss5" name=numeroSS5 maxlength=3  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),7,3).'"></input>';
                 echo '<input class="ss6" name=numeroSS6 maxlength=3  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),10,3).'"></input>';
                 echo '<input class="ss7" name=numeroSS7 maxlength=2  type=text value="'.substr(str_replace(" ","",$row1["CLIENT_NSS"]),13,2).'"></input>';
                 echo"</div>";
                echo"</div>";

                 $selected1 = "";
                 $selected2 = "";
                 $selected3 = "";
                 $selected4 = "";
                 $selected5 = "";
                 switch($row1["CLIENT_CLASSE"])
                 {
                    case "CLASSE A 100 %": $selected1 = "selected"; break;
                    case "CLASSE A 65 %":  $selected2 = "selected"; break;
                    case "CLASSE B 100 %": $selected3 = "selected"; break;
                    case "CLASSE B 65 %":  $selected4 = "selected"; break;
                    case "COMMANDE PRIVEE":$selected5 = "selected"; break;
                 }
           echo"
                    
                        
            <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='nom'>Nom:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' class='test' type='text' name='nom' id='nom' value='".$row1["CLIENT_NOM"]."' >
                        </div>
                    </div>";

                    
                    echo "<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Code d'organisme d'affiliation:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='codeAffiliationOrganisme' id='Code' value='".$row1["CLIENT_CODE_AFFILIATION_ORGANISME"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Pr&eacute;nom:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='prenom' id='Prénom' value='".$row1["CLIENT_PRENOM"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>B&eacute;n&eacute;ficiaire:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='beneficiare' id='Bénéficiaire' value='".$row1["CLIENT_BENEFICIAIRE"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label>Adresse:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <textarea class='test' name='adresse' >".$row1["CLIENT_ADRESSE"]."</textarea>
                         </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label class='test' for='Ville'>Ville:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='ville' id='Ville' value='".$row1["CLIENT_VILLE"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Code-postal'>Code postal:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='codePostal' id='Code-postal' value='".$row1["CLIENT_CODE_POSTALE"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='email'>Email</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='email' name='email' id='email' value='".$row1["CLIENT_EMAIL"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Téléphone-domicile'>T&eacute;l&eacute;phone domicile:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='domicile' id='Téléphone-domicile' value='".$row1["CLIENT_TELEPHONE_FIXE"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Téléphone-portable'>T&eacute;l&eacute;phone portable:</label>
                        </div>
                        <div class='col span-2-of-3'>
<input class='test' type='text' name='portable' id='Téléphone-portable' value='".$row1["CLIENT_TELEPHONE_MOBILE"]."' >
</div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label class='test' for='Téléphone-bureau'>T&eacute;l&eacute;phone bureau:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='bureau' id='Téléphone-bureau' value='".$row1["CLIENT_TELEPHONE_BUREAU"]."' >
                        </div>
                </div>";

                    
                    echo "<div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Organisme:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='organisme' id='Organisme' >
                                <option value='choix..'>Choix..</option>";
                $query2 = "SELECT * FROM organisme";
                $result2 = mysqli_query($connection,$query2);
                if (!$result2) 
                {
                  die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
                }
                else
                {
                  
                  while ($row2 = mysqli_fetch_array($result2)) 
                  {
                    if($row2["ORGANISME_NUM"] == $row1["CLIENT_ORGANISME"])
                    {
                      $selected = "selected";
                    }
                    else
                    {
                      $selected = "";
                    }
                    echo "<option ".$selected."  value='".$row2["ORGANISME_NUM"]."'>".$row2["ORGANISME_LIBELLE"]."</option>";                    
                  }
                  mysqli_free_result($result2);
                  
                }
                echo "
                            </select>
                        </div>
                    </div>
                    
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='N-Forme'>Classe:</label>
                        </div>
                        <div class='col span-2-of-3'>
                        <select class='test' name='classe' id='Classe' >
                 <option value=''>Choix...</option><option ".$selected1." value='CLASSE A 100 %' >CLASSE A 100 %</option><option ".$selected2." value='CLASSE A 65 %'>CLASSE A 65 %</option><option value='CLASSE B 100 %' ".$selected3.">CLASSE B 100 %</option><option value='CLASSE B 65 %' ".$selected4.">CLASSE B 65 %</option><option ".$selected5." value='COMMANDE PRIVEE' >COMMANDE PRIVEE</option></select></div></div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='N-Forme'>N°Forme:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='numForm' id='N-Forme' value='".$row1["CLIENT_NUMERO_FORME"]."' >
                        </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Date de création:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <p>".$row1["CLIENT_DATE_CREATION"]."</p>
                            </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Date de modification:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <p>".$row1["CLIENT_DATE_MODIFICATION"]."</p>
                            </div>
                    </div>
                        <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' name='commentaire' >".$row1["CLIENT_COMMENTAIRE"]."</textarea>
                            </div>
                        </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Classe'>Demandes:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='Classe' id='Classe'>
                                <option value='choix..'>Choix..</option>
                                <option value='Demande 1'>Demande 1</option>
                                <option value='Demande 2'>Demande 2</option>
                                <option value='Demande 3'>Demande 3</option>
                                <option value='Demande anciens combatans'>Demande anciens combatans</option>
                            </select>
                        </div>
                    </div>
                        <div class='row'>
                            <div class='col span-1-of-3'>";
                            echo "<input type=\"hidden\" value=\"ok\" name=\"validation\" />";
                            echo    '<input type="submit" value="Enregistrer" />';
                            echo "</div>
                            <div class='col span-2-of-3'>";
                             echo   '<input type="Button" value="Gestion des commandes"  onclick="window.location.href=\'../Gestion_des_commandes/?clientNum=', $_GET["clientNum"] ,'\'">';
                          echo " </div>
                        </div>
                    
                </form>
            </div>";}
            

        ?>
    </body>
</html>