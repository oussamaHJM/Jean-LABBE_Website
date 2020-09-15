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
                <h2><i class="ion-ios-plus-outline icon"></i>Ajouter nouvelle commande</h2>
            </div>
            <div class="row">
                <form method="post"  class="client-form">
                    <?php
            $connection=mysqli_connect("localhost","root","","frlconseil");
                        $today = getdate();

            if(isset($_POST["validation"]) && $_POST["validation"]="ok" )
            {
              $query_insert = "INSERT INTO commande 
               (COMMANDE_CLIENT_NUM,
                COMMANDE_PRESCRIPTEUR,
                COMMANDE_PRESCRIPTEUR_CODE,
                COMMANDE_DATE_ACCORD,
                COMMANDE_DATE_PRESCRIPTION,
                COMMANDE_ORTHESE,
                COMMANDE_PAT_COUP_PIC,
                COMMANDE_MONTAGE,
                COMMANDE_FINITION,
                COMMANDE_DATE_ORTHESE,
                COMMANDE_DATE_PICAGE,
                COMMANDE_DATE_MONTAGE,
                COMMANDE_DATE_FINITION,
                COMMANDE_DEMANDE_DETENTE,
                COMMANDE_FACTURATION,
                COMMANDE_REGLEMENT,
                COMMANDE_PRODUITS,
                COMMANDE_PRIX,
                COMMANDE_STATUT,
                COMMANDE_ATTRIBUTION,
                COMMANDE_TICKET_MODERATEUR,
                COMMANDE_COMMENATIRE,
                COMMANDE_COMMENATIRE_FACTURE,
                COMMANDE_DATE_CREATION,
                COMMANDE_DATE_MODIFICATION)

Values ('".$_GET["clientNum"]."',
  '".$_POST["prescripteur"]."',
  '".$_POST["prescripteurCode"]."',
  '".$_POST["date"]."',
  '".$_POST["datePrescription"]."',
  'on',
  'on',
  'on',
  'on',
  '".$_POST["dateOrthese"]."',
  '".$_POST["datePicage"]."',
  '".$_POST["dateMontage"]."',
  '".$_POST["dateFinition"]."',
  '".$_POST["dateDemandeEntente"]."',
  '".$_POST["dateFacturation"]."',
  '".$_POST["dateReglement"]."',
  NULL,
  NULL,
  '".$_POST["statutCommande"]."',
  '".$_POST["attribution"]."',
  '',
  '".str_replace("'","''",$_POST["commentaire"])."',
  '".$_POST["commentaireFacture"]."',
  '".$today["mday"]."-".$today["mon"]."-".$today["year"]."',
  '".$today["mday"]."-".$today["mon"]."-".$today["year"]."')"; 
             
             

              $today = getdate();
              
              $result = mysqli_query($connection,$query_insert);
              if (!$result) 
              {
               //echo $query_insert;
                echo "erreurrrrrrrrrrrrrrrrrrrr";
              }
              else
              {
                
                $idCommande = mysqli_insert_id($connection);
                
                $query_update = "UPDATE commande SET COMMANDE_NUM_FACTURE='".$today["mday"].$today["mon"].$today["year"].$_POST["typeCommande"].$idCommande."' WHERE COMMANDE_NUM =".mysqli_insert_id($connection);
                mysqli_query($connection,$query_update);
                
                $query_update = "UPDATE client SET CLIENT_NUMERO_FORME='".$_POST["forme"]."' WHERE CLIENT_NUM =".$_GET["clientNum"];
                mysqli_query($connection,$query_update);                
                
                
                if($_POST["validation"]== "Enregistrer")
                {
                  header("Location:../Consultation_Dossier_Commande/?commandeNum=".$idCommande."&clientNum=".$_GET["clientNum"]."&message=Ajout effectu%E9 avec succ%E9s");
                }
                
                
              }


            }


            
            ?>
             <?php
           
$query = "SELECT * FROM client WHERE CLIENT_NUM =".$_GET["clientNum"];
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
                    </div>
<div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Type commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='typeCommande' id='Organisme' >
                                <option value='choix..'>Choix..</option>
                                <option value='RE'>R&eacute;paration</option>
                                <option value='CH'>Chaussures</option>
                                <option value='SE'>Semelle</option>
                            </select>
                        </div>
                    </div>

                    ";
                $formNum = $row["CLIENT_NUMERO_FORME"];
                 echo "
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date d'accord:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='date' id='date' />
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
                            <input class='test' type='text' name='prescripteur' id='Prénom' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>Code prescripteur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='prescripteurCode' id='Bénéficiaire' placeholder='' >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date prescription:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='datePrescription' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Orthése:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateOrthese' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Patronage/Couper/Piquage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='datePicage' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Montage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateMontage' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Finition:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateFinition' id='date' />
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
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Position de la demande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='attribution' id='Organisme' >
                                <option value='0'>Choix..</option>
                                <option value='1'>Premiére attribution</option>
                                <option value='2'>Deuxiéme attribution</option>
                                <option value='3'>Renouvelement</option>
                                <option value='4'>Test</option>
                                <option value='5'>Réparation</option>
                            </select>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Classe'>Statut de la commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='statutCommande' id='Classe' >
                                <option value='0'>Choix..</option>
                                <option value='1'>Facture créée et non payée</option>
                                <option value='2'>Facture créée et payée</option>
                                <option value='3'>Commande annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date demande d'entente:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' class='test' type='date' name='dateDemandeEntente' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date de facturation:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateFacturation' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Date de réglement:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='date' name='dateReglement' id='date' />
                        </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' name='commentaire' ></textarea>
                            </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire pour facture:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' name='commentaireFacture' ></textarea>
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
                                <input type="hidden" value="ok" name="validation" id="validation" />
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