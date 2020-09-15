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
                    <a href="" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
                </div>
                <div class="bar">
                    <a href="" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnxion</a>
                </div>
            </div>
            <div class="row">
                <h3>Est Jhean Labbé</h3>
            </div>
            
        </nav>
        <nav class="back">
                <div class="row">
                    <nav>
        <ul>
          <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Clients</a>
            <div class="dropdown-menu">
              <a href="#">Consultaion</a>
              <a href="#">Ajout client</a>
              <a href="#">Recherche Client</a>
              <a href="#">Recherche Commande</a>
            </div>
          </li>
        <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Organisme</a>
            <div class="dropdown-menu">
              <a href="#">Consultation</a>
              <a href="#">Ajout organisme</a>
            </div>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-btn">Gestion Statistiques</a>
            <div class="dropdown-menu">
              <a href="#">Statistiques generale</a>
              <a href="#">Statistiques demandes d'ententes</a>
              <a href="#">Statistiques accords reçus</a>
              <a href="#">Statistiques commandes facturées</a>
              <a href="#">Statistiques commandes réglées</a>
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
                            <input class="test" type="text" name="num" id="num" placeholder="Num" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label class="test" for="Orthése:">Orthése:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateOrthese" id="date" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="patronage_couper_piquage">Patronage&mdash;Couper&mdash;Piquage:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="datePicage" id="date" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Orthése">Montage:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateMontage" id="date" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Date_d'accord">Date d'accord:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="date" id="date" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Finition">Finition :</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateFinition" id="date" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="statut">Statut de la commande:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select class="test" name="statutCommande" id="Classe">
                                <option value="choix..">Choix..</option>
                                <option value="facture_np">Facture crée et non payée</option>
                                <option value="facture payé" selected>Facture crée et payée</option>
                                <option value="commande_annulée">Commande Annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="submit" value="rechercher">
                        </div>
                    </div>
                    
                </form>
            </div>
            <?php
 echo '<table>';
        echo '<tr>';        
        echo '<th></th>';        
        echo '<th>Nom Pr&eacute;nom</th>';       
        echo '<th>Num.commande</th>';      
        echo '<th></th>';

        echo '</tr>';
        $connection=mysqli_connect("localhost","root","","frlconseil");
        $query = "SELECT * FROM COMMANDE INNER JOIN CLIENT ON COMMANDE_CLIENT_NUM = CLIENT_NUM where "; 
        $query = $query."COMMANDE_NUM_FACTURE LIKE '%". $_POST["num"] ."%' AND ";
       /* $query = $query."COMMANDE_ORTHESE LIKE '%". $_POST["orthese"] ."%' AND ";
        $query = $query."COMMANDE_PAT_COUP_PIC LIKE '%". $_POST["piquage"] ."%' AND ";
        $query = $query."COMMANDE_MONTAGE LIKE '%". $_POST["montage"] ."%' AND ";
        $query = $query."COMMANDE_FINITION LIKE '%". $_POST["finition"] ."%' AND ";*/
        if($_POST["dateOrthese"] != "jj-mm-aaaa")
            $query = $query."COMMANDE_DATE_ORTHESE LIKE '%". $_POST["dateOrthese"] ."%' AND ";
        if($_POST["datePicage"] != "jj-mm-aaaa")
            $query = $query."COMMANDE_DATE_PICAGE LIKE '%". $_POST["datePicage"] ."%' AND ";
        if($_POST["dateMontage"] != "jj-mm-aaaa")
            $query = $query."COMMANDE_DATE_MONTAGE LIKE '%". $_POST["dateMontage"] ."%' AND ";
        if($_POST["dateFinition"] != "jj-mm-aaaa")
            $query = $query."COMMANDE_DATE_FINITION LIKE '%". $_POST["dateFinition"] ."%' AND ";
        if($_POST["date"] != "jj-mm-aaaa")
            $query = $query."COMMANDE_DATE_ACCORD LIKE '%". $_POST["date"] ."%' AND ";
        $query = $query."COMMANDE_STATUT LIKE '%". $_POST["statutCommande"] ."%'";
        
        $result = mysqli_query($connection,$query);
       
       while ($row = mysqli_fetch_array($result)) 
              {
                echo '<tr  onmousemove="lavend(this)" onmouseout ="transp(this)">'
                      ,'<td><a href="javascript:window.location.href=\'../Consultation_Dossier_Commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><img border=0 src="../Images/interface/loupe.gif" title="Consulter" ></img></a></td>'
                      ,'<td><nobr>',$row["CLIENT_NOM"],' ',$row["CLIENT_PRENOM"], '</nobr</td>'
                      ,'<td>',$row["COMMANDE_NUM_FACTURE"],'</td>'
                      ,'<td><a href="javascript:window.location.href=\'../modifier_dossier_commande/?clientNum=', $row["CLIENT_NUM"].'&commandeNum='.$row["COMMANDE_NUM"] ,'\'" ><img border=0 src="../Images/interface/b_edit.png" title="Modifier" ></img></a></td>';
                     
                     echo '</tr>';
                     
              } 
              mysqli_free_result($result);
        
        
        echo '</table>';
        
        
     ?>

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