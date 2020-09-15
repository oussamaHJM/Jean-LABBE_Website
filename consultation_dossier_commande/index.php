<?php require_once("../authentification/authentification.php");?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="../Styles/grid.css"> 
        <link rel="stylesheet" type="text/css" href="../Styles/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="../Styles/normalize.css">
                <link rel="stylesheet" type="text/css" href="style_Consltation_Commande.css">

        <link rel="stylesheet" type="text/css" href="style_Consltation_Commande.css">
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
                    <a href="../index.php" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnexion</a>
                </div>
                
            </div>
            <div class="row">
                <h3>Ets Jhean Labbé</h3>
            </div>
            
        </nav>
        <nav class="back">
                <div class="row">
                    <ul class="main-nav">
                        <li> <a href="">GEtsion Clients</a>
                            <ul>
                                <li><a href="../Consultation_de_la_liste_des_clients/index.php">Consultaion</a></li>                                                          <li><a href="../AJOUTER_NOUVEAU_CLIENT/index.php">Ajout client</a></li>
                                <li><a href="../RECHERCHE_CLIENT/index.php">Recherche Client</a></li>
                                <li><a href="../RECHERCHE_COMMANDE/index.php">Recherche Commande</a></li>
                            </ul>
                        </li>
                        <li><a href="">GEtsion Organisme</a>
                            <ul>
                                <li><a href="../cosultation_d'organizme">Consultation</a></li>
                                <li><a href="../ajout_d'organizme">Ajout organisme</a></li>
                            </ul>
                        </li>
                        <li><a href="">GEtsion Statistiques</a>
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
                <h2><i class="ion-ios-plus-outline icon"></i>Dossier commande</h2>
            </div>
            <div class="row">
                <form method="post" action="add.php" class="client-form">
                    <?php


              $connection=mysqli_connect("localhost","root","","frlconseil");
            $query = "SELECT * FROM  commande  INNER JOIN client ON COMMANDE_CLIENT_NUM = CLIENT_NUM WHERE COMMANDE_NUM =".$_GET["commandeNum"]." AND COMMANDE_CLIENT_NUM =".$_GET["clientNum"];
           $result = mysqli_query($connection,$query);
            if (!$result) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
				echo "	<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Nom et Prénom client:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p><a href='../Gestion_des_commandes/?clientNum=".$_GET["clientNum"]."'>".$row["CLIENT_PRENOM"]." ".$row["CLIENT_NOM"]."</a></p>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>N.SS:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["CLIENT_NSS"]."</p>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Type commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>";
                 $typeRE = strpos($row["COMMANDE_NUM_FACTURE"], "RE");
                 $typeCH = strpos($row["COMMANDE_NUM_FACTURE"], "CH");
                 $typeSE = strpos($row["COMMANDE_NUM_FACTURE"], "SE");
                 if($typeRE > 0)
                 {
                    echo "R&eacute;paration";
                 }
                 else if($typeCH > 0)
                 {
                    echo "Chaussures";
                 }
                 else if($typeSE > 0)
                 {
                    echo "Semelle";
                 }
                 else
                 {
                    echo "Type inconnu";
                 } 
                 echo "</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='nom'>Num.commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["COMMANDE_NUM_FACTURE"]."</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='nom'>Classe:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["CLIENT_CLASSE"]."</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Date d'accord:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' value='".$row["COMMANDE_DATE_ACCORD"]."' disabled>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Forme:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' value='".$row["CLIENT_NUMERO_FORME"]."' disabled>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Prescripteur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' value='".$row["COMMANDE_PRESCRIPTEUR"]."' disabled>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Prénom'>Code prescripteur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' value='".$row["COMMANDE_PRESCRIPTEUR_CODE"]."' disabled>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>Date prescription:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='Benefice' id='Bénéficiaire' value='".$row["COMMANDE_DATE_PRESCRIPTION"]."' disabled>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Orthése:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["COMMANDE_DATE_ORTHESE"]."</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Patronage/Couper/<br>Piquage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["COMMANDE_DATE_PICAGE"]."</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Montage:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["COMMANDE_DATE_MONTAGE"]."</p>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Finition:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <p>".$row["COMMANDE_DATE_FINITION"]."</p>
                        </div>
                    </div>";
                $selected1 = "";
                $selected2 = "";
                $selected3 = "";
                $selected0 = "";  
                echo"     <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Date_d'accord'>Liste et Prix Total TTC:</label>
                        </div>";
                        
$refProduits = explode ("-",$row["COMMANDE_PRODUITS"]);
                $produitDesignation = "";
                $prix = 0;
                $i = 1;
                foreach($refProduits as $valeur)
                { 
                     if(strlen($valeur)>0)
                     {
                         $valsCalculateur = explode(".", $valeur);
                         
                         $nb = $valsCalculateur[0];
                         $produit = $valsCalculateur[1];
                         
                         if($produit!="" && $produit!="000000")
                         {
                             $queryProduit = "SELECT * FROM  produit  WHERE PRODUIT_CODE = '".$produit."'";
                             $resultProduit = mysqli_query($connection,$queryProduit);
                             
                             while ($rowProduit = mysqli_fetch_array($resultProduit)) 
                             {
                                $prix += ($nb * $rowProduit["PRODUIT_PRIX"]);
                                $produitDesignation = $produitDesignation .$i. "-" . $rowProduit["PRODUIT_DESIGNATION"]. ": ". $nb . " X " .$rowProduit["PRODUIT_PRIX"] ." &euro;<br>";
                                $i++;
                             }
                         }
                         else if ($produit == "000000" )
                         {
                            $designationSupp = $valsCalculateur[2];
                            $prixSupp = $valsCalculateur[3];
                            $prix += ($nb * $prixSupp);
                            $produitDesignation = $produitDesignation .$i. "-" . $designationSupp. ": ". $nb . " X " .$prixSupp ." &euro;<br>";
                            $i++;
                         }
                     }
                     
                }
                
                $query_update = "UPDATE commande SET COMMANDE_PRIX = ".$prix ." WHERE COMMANDE_NUM ='". $_GET["commandeNum"] ."'";
                mysqli_query($connection,$query_update);
                
                echo "<div class='col span-2-of-3'>
                            <p>".$produitDesignation." ".$prix . " &euro;</p>
                        </div>
                    </div></div></div>";
                
                
                 if($row["COMMANDE_TICKET_MODERATEUR"]=="on")
                {
                    $checked = "checked";
                
               echo"
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Exonération du ticket modérateur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input disabled  class='size' name='ticketModerateur' ".$checked."   type='checkbox' />
                        </div>
                    </div>";}
                    else  echo"
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='code'>Exonération du ticket modérateur:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input disabled  class='size' name='ticketModerateur'   type='checkbox' />
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
              
          echo "          <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Position de la demande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='Organisme' id='Organisme' disabled>
                                <option value='0'$selected0>Choix..</option>
                                <option value='1' $selected1>Premiére attribution</option>
                                <option value='2' $selected2>Deuxiéme attribution</option>
                                <option value='3' $selected3>Renouvelement</option>
                                <option value='4' >Test</option>
                                <option value='5' >Réparation</option>
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
                            <label for='Bénéficiaire'>Date demande d'entente:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='Benefice' id='Bénéficiaire' value='".$row["COMMANDE_DEMANDE_DETENTE"]."' disabled>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>Date de facturation:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='Benefice' id='Bénéficiaire' value='".$row["COMMANDE_FACTURATION"]."' disabled>
                        </div>
                    </div>
					<div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Bénéficiaire'>Date de réglement:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='Benefice' id='Bénéficiaire' value='".$row["COMMANDE_REGLEMENT"]."' disabled>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label  for='Organisme'>Statut de la commande:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <select class='test' name='Organisme' id='Organisme' disabled>
                                <option value'choix.'>Choix..</option>
                                <option value='1' $selected1 >Facture Cr&eacute;&eacute;e et non pay&eacute;e</option>
                                <option value='2' $selected2 >Facture Cr&eacute;&eacute;e et pay&eacute;e</option>
                                <option value='3' $selected3 >Commande annul&eacute;e</option>
                            </select>
                        </div>
                    </div>
					<div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire pour facture:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' disabled name='message' >".$row["COMMANDE_COMMENATIRE_FACTURE"]."</textarea>
                            </div>
                    </div>
                    <div class='row'>
                            <div class='col span-1-of-3'>
                                <label>Commentaire:</label>
                            </div>
                            <div class='col span-2-of-3'>
                                <textarea class='test' disabled name='message' >".$row["COMMANDE_COMMENATIRE"]."</textarea>
                            </div>
                    </div>" ;
                                    echo '<input type="hidden" value="'.$row["CLIENT_ORGANISME"].'" name="oranismeClient" />';
 }}
                    ?>
                     <div class="row">
                            <div class="col span-1-of-5 b">
                          <?php    echo   '<input type="Button" value="Modifier" onclick="window.location.href=\'../modifier_dossier_commande/?commandeNum=',$_GET["commandeNum"],'&clientNum=', $_GET["clientNum"] ,'\'">'; ?>
                            </div>
                            <div class="col span-2-of-5 b">
                                <input type="submit" value="Facture Interne">
                            </div>
                            <div class="col span-3-of-5 b">
                                <input type="submit" value="demande d'entente">
                            </div>
                    </div>
                    <div class="row">
                            <div class="col span-3-of-5 b">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-3-of-5 b">
                                <input type="submit" value="Feuille de soins">
                            </div>
                            <div class="col span-4-of-5 b">
                                <input type="submit" value="Facture Interne">
                            </div>
                    </div>
                    
                </form>
            </div>
            

        
    </body>
</html>