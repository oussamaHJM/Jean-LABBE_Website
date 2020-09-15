<?php require_once("../authentification/authentification.php");?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
                <link rel="stylesheet" type="text/css" href="../Styles/style2.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <title>Ets Jean Labbé</title>
    </head>
    <body>
      <nav class="back">
            <div class="row">
                <div class="bar">
                    <a href="..\Ajouter utilisateur\index.php" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
                </div>
                <div class="bar">
                    <a href="..\index.php" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnexion</a>
                </div>
            </div>
            <div class="row">
                <h3>Ets Jean Labbé</h3>
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
                <h2><i class="ion-ios-compose-outline"></i>Gestion des commandes</h2>
            </div>
            <?php
           $connection=mysqli_connect("localhost","root","","frlconseil");
           $query = "SELECT * FROM client WHERE CLIENT_NUM =".$_GET["clientNum"];
           $result = mysqli_query($connection,$query);
            if (!$result) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
                echo '<div class="row"><div class="col span-1-of-3"><label for="code">Liste des commandes de:</label></div>
                <div class="col span-2-of-3"><a href="../Dossier_client/?clientNum='.$_GET["clientNum"].'"><strong>'.$row["CLIENT_PRENOM"].' '.$row["CLIENT_NOM"].'</strong></a></div></div><br/>';
              }
              mysqli_free_result($result);
            }
             echo   '<div class="row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                <input type="button" value="Nouvelle commande"  onclick="window.location.href=\'../Ajouter_nouvelle_commande/?clientNum=', $_GET["clientNum"] ,'\'"></input>
                </div>';

          ?>
            <div class="row">
                <table align="center">
                    <tr>
                        <th></th>
                        <th>N.Commande</th>
                        <th>Date de commande</th>
                        <th>Date d'accord</th>
                        <th>Date de modification</th>
                        <th></th>
                   </tr>
                    <?php 
                //if( $_SESSION['Utilisateur'] == "Admin")
                ?>
              
         

            <?php            
            $query = "SELECT * FROM commande WHERE COMMANDE_CLIENT_NUM=".$_GET["clientNum"] ." ORDER BY COMMANDE_NUM DESC";
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
                echo '<tr  onmousemove="lavend(this)" onmouseout ="transp(this)">'
                      ,'<td><a href="javascript:window.location.href=\'../consultation_dossier_commande/?clientNum=', $_GET["clientNum"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><i class="ion-ios-paper-outline pt_icon"></i></a></td>'
                      ,'<td><nobr>',$row["COMMANDE_NUM_FACTURE"],'</nobr</td>'
                      ,'<td>',$row["COMMANDE_DATE_CREATION"],'</td>'
                      ,'<td>',$row["COMMANDE_DATE_ACCORD"],'</td>' 
                      ,'<td>',$row["COMMANDE_DATE_MODIFICATION"],'</td>'
                       ,'<td><a href="javascript:window.location.href=\'../modifier_dossier_commande/?clientNum=', $_GET["clientNum"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><i class="ion-ios-compose-outline pt_icon"></i></a></td>';
                       //if( $_SESSION['Utilisateur'] == "Admin")
                     echo '</tr>';
                     
              } 
              mysqli_free_result($result);
            }
          ?>
                  
                </table>
            </div>
    
    </body>
</html>