<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Oussama_EL-HAJJAM">
        <link rel="stylesheet" type="text/css" href="../Styles/grid.css">
        <link rel="stylesheet" type="text/css" href="../Styles/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../Styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="../Styles/Style_Global_APP.css">
        <link rel="stylesheet" type="text/css" href="../Styles/style2.css">

        <link rel="stylesheet" type="text/css" href="../Styles/Queries_APP.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <title>Ets Jean Labb&eacute;</title>
    </head>
    <body>
        <nav class="back">
            <div class="row">
                <div class="bar">
                    <a href="" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
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
                    <nav>
                    <ul>
                      <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Clients</a>
                        <div class="dropdown-menu">
                         <a href="../Consultation_de_la_liste_des_clients/index.php">Consultaion</a>
                                <a href="../AJOUTER_NOUVEAU_CLIENT/index.php">Ajout client</a>
                                <a href="../RECHERCHE_CLIENT/index.php">Recherche Client</a>
                                <a href="../RECHERCHE_COMMANDE/index.php">Recherche Commande</a>
                        </div>
                      </li>
                    <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Organisme</a>
                        <div class="dropdown-menu">
<a href="../cosultation_d'organizme">Consultation</a>
                          <a href="../ajout_d'organizme">Ajout organisme</a>
                        </div>
                      </li>
                      <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Statistiques</a>
                        <div class="dropdown-menu">
                         <a href="../CONSULTATION_DES_STATISTIQUES_GENERALES/index.php">Statistiques generale</a>
                                <a href="../Consultation_des_statistiques_demandes_d'ententes/index.php">Statistiques demandes d'ententes</a>
                                <a href="../Consultation_des_statistiques_accords_recus/index.php">Statistiques accords reçus</a>
                                <a href="../Consultation_des_statistiques_commandes_facturees/index.php">Statistiques commandes facturées</a>
                                <a href="../Consultation_des_statistiques_commandes_reglees">Statistiques commandes réglées</a>
                        </div>
                      </li>
                    </ul>
                </nav>
                </div>
        </nav>
            <div class="row">
                <h2><i class="ion-ios-plus-outline icon"></i>Modifier  commande</h2>
            </div>
            <div class="row">
                <form method="post"  class="client-form">
                    <?php
            $connection=mysqli_connect("localhost","root","","frlconseil");
                        $today = getdate();

           if(isset($_POST["validation"]) && $_POST["validation"]== "ok" )
            {
              
              $query_update = "UPDATE commande SET";
              $query_update = $query_update." COMMANDE_DATE_ORTHESE ='".$_POST["dateOrthese"]."',";
              $query_update = $query_update." COMMANDE_DATE_PICAGE ='".$_POST["datePicage"]."',";
              $query_update = $query_update." COMMANDE_DATE_MONTAGE ='".$_POST["dateMontage"]."',";
              $query_update = $query_update." COMMANDE_DATE_FINITION ='".$_POST["dateFinition"]."',";
              /*$query_update = $query_update." COMMANDE_PRODUITS ='".$_POST["listeCommandes"]."',";*/
              $query_update = $query_update." COMMANDE_PRESCRIPTEUR ='".$_POST["prescripteur"]."',";
              $query_update = $query_update." COMMANDE_PRESCRIPTEUR_CODE ='".$_POST["prescripteurCode"]."',";
              $query_update = $query_update." COMMANDE_COMMENATIRE ='".$_POST["commentaire"]."',";
              $query_update = $query_update." COMMANDE_COMMENATIRE_FACTURE ='".$_POST["commentaireFacture"]."',";
              $query_update = $query_update." COMMANDE_DATE_MODIFICATION ='".$today["mday"]."-".$today["mon"]."-".$today["year"]."',";
              $query_update = $query_update." COMMANDE_DATE_PRESCRIPTION ='".$_POST["datePrescription"]."',";
              $query_update = $query_update." COMMANDE_DEMANDE_DETENTE ='".$_POST["dateDemandeEntente"]."',";
              $query_update = $query_update." COMMANDE_FACTURATION ='".$_POST["dateFacturation"]."',";
              $query_update = $query_update." COMMANDE_REGLEMENT ='".$_POST["dateReglement"]."',";
              $query_update = $query_update." COMMANDE_ATTRIBUTION ='".$_POST["attribution"]."',";
              $query_update = $query_update." COMMANDE_STATUT ='".$_POST["statutCommande"]."'";
              $query_update = $query_update." WHERE COMMANDE_NUM =".$_GET["commandeNum"]." AND COMMANDE_CLIENT_NUM =".$_GET["clientNum"];
              
              $result = mysqli_query($connection,$query_update);
              
              if (!$result) 
              {
               echo $query_insert;
               echo "<div class='row'>
                <h4><i class='ion-ios-plus-outline icon'></i>Informations NON bien  modifiées</h4>
            </div>done" ;              
                
                die('<div class="msg">Erreur: '. mysqli_error($connection).'\n'.$query_update.'</div>');
              }
              else
              {
                
                $query_insert = "UPDATE client SET CLIENT_NUMERO_FORME='".$_POST["forme"]."', CLIENT_CLASSE = '".$_POST["classe"]."' WHERE CLIENT_NUM =".$_GET["clientNum"];
                mysqli_query($connection,$query_insert);
                
                
             
echo "<div class='row'>
                <h4><i class='ion-ios-plus-outline icon'></i>Informations bien modifiées</h4>
            </div>done" ;              
                
                
              }


            }


            
            ?>
             <?php
           
$query = "SELECT * FROM  commande  INNER JOIN client ON COMMANDE_CLIENT_NUM = CLIENT_NUM WHERE COMMANDE_NUM =".$_GET["commandeNum"]." AND COMMANDE_CLIENT_NUM =".$_GET["clientNum"];
           
           $result = mysqli_query($connection,$query);
            if (!$result) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error($connection).'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {


                
				echo	"<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Nom et Prénom client:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p class='test' class='test'><a href='../Gestion_des_commandes/?clientNum=".$_GET["clientNum"]."'>".$row["CLIENT_PRENOM"]." ".$row["CLIENT_NOM"]."</a></p>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>N.SS:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p class='test'>".$row["CLIENT_NSS"]."</p>
                        </div>
                    </div>";
                    $typeRE = strpos($row["COMMANDE_NUM_FACTURE"], "RE");
                 $typeCH = strpos($row["COMMANDE_NUM_FACTURE"], "CH");
                 $typeSE = strpos($row["COMMANDE_NUM_FACTURE"], "SE");
                 if($typeRE > 0)
                 {
                    $typeCommande = "R&eacute;paration";
                    $clauseWhere  = " WHERE PRODUIT_TYPE = 'RE'";
                 }
                 else if($typeCH > 0)
                 {
                     $typeCommande =  "Chaussures";
                     $clauseWhere  = " WHERE PRODUIT_TYPE = 'CH'";
                 }
                 else if($typeSE > 0)
                 {
                     $typeCommande =  "Semelle";
                     $clauseWhere  = " WHERE PRODUIT_TYPE = 'SE'";
                 }
                 else
                 {
                     $typeCommande =  "Type inconnu";
                     $clauseWhere  = "";
                     
                 }
                 echo "
                     <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Type commande:</label>
                        </div>
                        <div class='col span-2-of-3'> ".$typeCommande."</div>
                    </div>

                    ";
                $formNum = $row["CLIENT_NUMERO_FORME"];
                 echo "
                 
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>N.commande:</label>
                        </div>
                        <div class='col span-2-of-3'>".$row["COMMANDE_NUM_FACTURE"]."</div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Class:</label>
                        </div>
                        ";
                        $selected1 = "";
                 $selected2 = "";
                 $selected3 = "";
                 $selected4 = "";
                 $selected5 = "";
                 switch($row["CLIENT_CLASSE"])
                 {
                    case "CLASSE A 100 %": $selected1 = "selected"; break;
                    case "CLASSE A 65 %":  $selected2 = "selected"; break;
                    case "CLASSE B 100 %": $selected3 = "selected"; break;
                    case "CLASSE B 65 %":  $selected4 = "selected"; break;
                    case "COMMANDE PRIVEE":  $selected5 = "selected"; break;
                 }
                 echo "<div class='col span-2-of-3'>
                            <select class='test' name='classe' id='Organisme' >
                                <option>Choix..</option>
                                <option ".$selected1." value='CLASSE A 100 %' >CLASSE A 100 %</option>
                                <option ".$selected2." value='CLASSE A 65 %' >CLASSE A 65 %</option>
                                <option ".$selected3." value='CLASSE B 100 %' >CLASSE B 100 %</option>
                                <option ".$selected4." value='CLASSE B 65 %' >CLASSE B 65 %</option>
                                <option ".$selected5." value='COMMANDE PRIVEE' >COMMANDE PRIVEE</option>
                            </select>
                        </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date d'accord:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='date' id='date' value='".$row["COMMANDE_DATE_ACCORD"]."' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='nom'>Forme:</label>
                        </div>
                        <div class='col span-2-of-3'>"; 
             echo   "<input class='test' class='test' type='text' name='forme' id='nom' value='".$formNum."' >" ;
                echo "       </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Prescripteur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='prescripteur' id='Prénom' value='".$row["COMMANDE_PRESCRIPTEUR"]."'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>Code prescripteur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='prescripteurCode' id='Bénéficiaire' value='".$row["COMMANDE_PRESCRIPTEUR_CODE"]."' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date prescription:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='datePrescription' id='date' value='".$row["COMMANDE_DATE_PRESCRIPTION"]."' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Orthése:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateOrthese' id='date' value='".$row["COMMANDE_DATE_ORTHESE"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Patronage/Couper/Piquage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='datePicage' id='date' value='".$row["COMMANDE_DATE_PICAGE"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Montage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateMontage' id='date' value='".$row["COMMANDE_DATE_MONTAGE"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Finition:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateFinition' id='date' value='".$row["COMMANDE_DATE_FINITION"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                            <label>liste commande</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <input type='button'  name value='Voir'  onclick='ShowProduit()'>
                            </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Exonération du ticket modérateur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                      <input  name='ticketModerateur' value='on'   type='checkbox' />

                     </div>
                    </div>";
                     $selected1 = "";
                $selected2 = "";
                $selected3 = "";
                $selected0 = "";           
                
                switch($row["COMMANDE_ATTRIBUTION"])
                {
                    case "1" : $selected1 = "selected";
                    break;
                    case "2" :  $selected2 = "selected";
                    break;
                    case "3" :  $selected3 = "selected";
                    break;
                    case "0" :  $selected0 = "selected"; 
                    break;
                    default :
                    break;
                }  
                    echo "
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Position de la demande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='attribution' id='Organisme' >
                                <option value='0' $selected0 >Choix..</option>
                                <option value='1' $selected1 >Premiére attribution</option>
                                <option value='2' $selected2 >Deuxiéme attribution</option>
                                <option value='3' $selected3 >Renouvelement</option>
                                <option value='4' $selected4 >Test</option>
                                <option value='5' $selected5 >Réparation</option>
                            </select>
                        </div>
                    </div>";

                $selected1 = "";
                $selected2 = "";
                $selected3 = "";
                $selected0 = "";           
                
                switch($row["COMMANDE_STATUT"])
                {
                    case "1" : $selected1 = "selected";
                    break;
                    case "2" :  $selected2 = "selected";
                    break;
                    case "3" :  $selected3 = "selected";
                    break;
                    case "0" :  $selected0 = "selected"; 
                    break;
                    default :
                    break;
                }
                
                    echo "

                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Classe'>Statut de la commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='statutCommande' id='Classe' >
                                <option value='0' $selected0 >Choix..</option>
                                <option value='1' $selected1 >Facture créée et non payée</option>
                                <option value='2' $selected2 >Facture créée et payée</option>
                                <option value='3' $selected3 >Commande annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date demande d'entente:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' class='test' type='date' name='dateDemandeEntente' id='date' value='".$row["COMMANDE_DEMANDE_DETENTE"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date de facturation:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateFacturation' id='date' value='".$row["COMMANDE_FACTURATION"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date de réglement:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateReglement' id='date' value='".$row["COMMANDE_REGLEMENT"]."'/>
                        </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' name='commentaire' >".$row["COMMANDE_COMMENATIRE"]."</textarea>
                            </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire pour facture:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' name='commentaireFacture' >".$row["COMMANDE_COMMENATIRE_FACTURE"]."</textarea>
                            </div>
                        </div> ";

                        }}
                        ?>
                         <?php
        
        echo '<div id="produit" style="display:none">';
        $query = "SELECT * FROM produit ORDER BY PRODUIT_TYPE";
           $result = mysqli_query($connection,$query);
            if (!$result) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              
              $type     = "";
              $typeOld  = "";
              while ($row = mysqli_fetch_array($result)) 
              {
                $type = $row["PRODUIT_TYPE"];
                if($type != $typeOld)
                {
                    if($typeOld != "")
                    {
                        echo "<select class='size' onchange=AddProduit('000000',this.options[this.selectedIndex].value,'suppDesi".$typeOld."','suppPrix".$typeOld."')>";
                        echo "<option value='0'>0</option>";
                        echo "<option value='1'>1</option>";
                        echo "<option value='2'>2</option>";
                        echo "<option value='3'>3</option>";
                        echo "<option value='4'>4</option>";
                        echo "<option value='5'>5</option>";
                        echo "</select> ";
                        echo "Suppl&eacute;ment (D&eacute;signation/Prix) : <input type='text' id='suppDesi".$typeOld."'> <input class='prix' type='text' id='suppPrix".$typeOld."'> &euro;"; 
                        echo "</div>"; 
                    }
                    echo " <div class='hide' id='".$row["PRODUIT_TYPE"]."'>";
                }
                 echo "<select class='size' onchange=AddProduit('".$row["PRODUIT_CODE"]."',this.options[this.selectedIndex].value,'','')>";
                 echo "<option value='0'>0</option>";
                 echo "<option value='1'>1</option>";
                 echo "<option value='2'>2</option>";
                 echo "<option value='3'>3</option>";
                 echo "<option value='4'>4</option>";
                 echo "<option value='5'>5</option>";
                 echo "</select> ";
                 
                 echo $row["PRODUIT_DESIGNATION"] . " : " .$row["PRODUIT_PRIX"] . " &euro;<br><br>";                
                
                $typeOld = $type;
              }
              echo "<select class='size' onchange=AddProduit('000000',this.options[this.selectedIndex].value,'suppDesi".$typeOld."','suppPrix".$typeOld."')>";
                 echo "<option value='0'>0</option>";
                 echo "<option value='1'>1</option>";
                 echo "<option value='2'>2</option>";
                 echo "<option value='3'>3</option>";
                 echo "<option value='4'>4</option>";
                 echo "<option value='5'>5</option>";
                 echo "</select> ";
               echo "Suppl&eacute;ment (D&eacute;signation/Prix) : <input type='text' id='suppDesi".$type."'> <input class='prix' type='text' id='suppPrix".$type."'> &euro;"; 
              echo "</div>"; 
            }
        echo '<a class="femer" href="javascript:" onclick="HideProduit()">Fermer</a></div>';
        
        
        ?>
                        <div class="row">
                            <div class="col span-1-of-3">
								<label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="hidden" value="ok" name="validation"/>
                                <input type="submit" value="Enregistrer" onclick="document.getElementById('validation').value='Enregistrer';" >
                            </div>
                        </div>
                    
                </form>
            </div>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <P class="addrese"><i class="ion-ios-location-outline icone-petite"></i>
                    Jean LABBE PODO-ORTHESISTE 2 bis, rue Saint-Honoré 78000 VERSAILLES ,France.
                    </P>
                </div>
                <div class="col span-1-of-2">
                    <p class="tel"><i class="ion-ios-telephone-outline icone-petite"></i>Tel:01-39-50-18-53 / 06-17-18-25-43.</p>
                </div>
            </div>
            <div class="row">
                <h2>Ets Jean Labbé</h2>
            </div>
            <div class="row" id="contact">
                <P class="copyright">
                    Copyright &copy; 2017 par Ets Jhean Labbé.Touts les droit réservé.
                </P>
            </div>
        </footer>
    </body>
</html>