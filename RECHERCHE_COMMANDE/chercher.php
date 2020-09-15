<?php require_once("../authentification/authentification.php");?>

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
        <link rel="stylesheet" type="text/css" href="../Styles/Queries_APP.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <title>Ets Jean Labbé</title>
    </head>
    <body>
        <nav class="back">
            <div class="row">
                <div class="bar">
                    <a href="..\Ajouter_utilisateur\index.php" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
                </div>
                <div class="bar">
                    <a href="../index.php" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnexion</a>
                </div>
            </div>
            <div class="row">
                <h3>Ets Jhean Labbé</h3>
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
                <h2><i class="ion-ios-search icon"></i>Recherche Commande</h2>
            </div>
            <div class="row">
                <form method="post" action="chercher.php" class="client-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="num">Numéro de commande:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="num" id="num" placeholder="Num" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Orthése:">Orthése:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateOrthese" id="date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="patronage_couper_piquage">Patronage&mdash;Couper&mdash;Piquage:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="datePicage" id="date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Orthése">Montage:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateMontage" id="date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Date_d'accord">Date d'accord:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="date" id="date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Finition">Finition :</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateFinition" id="date" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="statut">Statut de la commande:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select class="test" name="statutCommande" id="Classe">
                                <option></option>
                                <option value="choix..">Choix..</option>
                                <option value="1">Facture crée et non payée</option>
                                <option value="2">Facture crée et payée</option>
                                <option value="3">Commande Annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="rechercher">
                        </div>
                    </div>
                    
                </form>
            </div>
            
        <table>
        <tr>       
        <th></th>       
        <th>Nom Pr&eacute;nom</th>     
        <th>Num.commande</th>   
        <th></th>
        </tr>
        <?php
        $connection=mysqli_connect("localhost","root","","frlconseil");
        $query = "SELECT * FROM COMMANDE INNER JOIN CLIENT ON COMMANDE_CLIENT_NUM = CLIENT_NUM where COMMANDE_NUM_FACTURE LIKE '%". $_POST["num"] ."%' "; 
        if($_POST["dateOrthese"] != "jj-mm-aaaa") $query = $query."AND COMMANDE_DATE_ORTHESE LIKE '%". $_POST["dateOrthese"] ."%' ";
        if($_POST["datePicage"] != "jj-mm-aaaa")  $query = $query."AND COMMANDE_DATE_PICAGE LIKE '%". $_POST["datePicage"] ."%' ";
        if($_POST["dateMontage"] != "jj-mm-aaaa") $query = $query."AND COMMANDE_DATE_MONTAGE LIKE '%". $_POST["dateMontage"] ."%' ";
        if($_POST["dateFinition"] != "jj-mm-aaaa") $query = $query."AND COMMANDE_DATE_FINITION LIKE '%". $_POST["dateFinition"] ."%' ";
        if($_POST["date"] != "jj-mm-aaaa")      $query = $query."AND COMMANDE_DATE_ACCORD LIKE '%". $_POST["date"] ."%' ";
        if(!empty($_POST["statutCommande"])){
            $query = $query."AND COMMANDE_STATUT LIKE '%". $_POST["statutCommande"] ."%'";

        
        $result = mysqli_query($connection,$query);
       
       while ($row = mysqli_fetch_array($result)) 
              {
                echo '<tr  onmousemove="lavend(this)" onmouseout ="transp(this)">'
                      ,'<td><a href="javascript:window.location.href=\'../Consultation_Dossier_Commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><img border=0 src="../Images/interface/loupe.gif" title="Consulter" ></img></a></td>'
                      ,'<td><nobr>',$row["CLIENT_NOM"],' ',$row["CLIENT_PRENOM"], '</nobr</td>'
                      ,'<td>',$row["COMMANDE_NUM_FACTURE"],'</td>'
                      ,'<td><a href="javascript:window.location.href=\'../Dossier_Commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><img border=0 src="../Images/interface/b_edit.png" title="Modifier" ></img></a></td>';
                     
                     echo '</tr>';
                     
              } 
              mysqli_free_result($result);
          }
        else {
            $result = mysqli_query($connection,$query);
       
       while ($row = mysqli_fetch_array($result)) 
              {
                echo '<tr  onmousemove="lavend(this)" onmouseout ="transp(this)">'
                      ,'<td><a href="javascript:window.location.href=\'../consultation_dossier_commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'"><i class="ion-ios-paper-outline pt_icon"></i></a></td>'
                      ,'<td><nobr>',$row["CLIENT_NOM"],' ',$row["CLIENT_PRENOM"], '</nobr</td>'
                      ,'<td>',$row["COMMANDE_NUM_FACTURE"],'</td>'
                      ,'<td><a href="javascript:window.location.href=\'../modifier_dossier_commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'"><i class="ion-ios-compose-outline pt_icon"></i></a></td>';
                     
                     echo '</tr>';
                     
              } 
              mysqli_free_result($result);
        }
         ?>
        
        </table>
        
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