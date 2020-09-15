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
        
                </div>
            </nav>
            <div class="row">
                <h2><i class="ion-stats-bars icon"></i>Consultation des statistiques générales</h2>
            </div>
             <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
              <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
              <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              <script>
                      $(function () {
                                $( ".dp" ).each(function () {
                                    $( this ).datepicker({
                                         dateFormat: 'dd-mm-yy',
                                  changeMonth: true,
                                  changeYear: true,
                                  showOn: "button",
                                  buttonImage: "../Images/interface/calendar.gif",
                                  buttonImageOnly: true,
                                  buttonText: "Selectionner une date"
                                })
                      })
                      });
                </script>
            <form method="post">
                <?php
             $today = getdate();
             $todayFormate      =  "01"."-"."01"."-".$today["year"];
             $finAnneeFormate   =  "31"."-"."12"."-".$today["year"];       
             
            $dateDebut  = $today["year"]."-"."01"."-"."01";
            $dateFin    = $today["year"]."-"."12"."-"."31";
            if(isset($_POST["dateDebut"]))
            {
                $dates              = explode ("-",$_POST["dateDebut"]);
                $dateDebut          = $dates[2]."-".$dates[1]."-".$dates[0];
                $todayFormate       = $dates[0]."-".$dates[1]."-".$dates[2];
            }
            if(isset($_POST["dateFin"]))
            {
                $dates              = explode ("-",$_POST["dateFin"]);
                $dateFin            = $dates[2]."-".$dates[1]."-".$dates[0]; 
                $finAnneeFormate    = $dates[0]."-".$dates[1]."-".$dates[2]; 
            } 
             
            ?>
            
        
        
        <div class="row">
                <form method="post" action="&" class="client-form">
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Date_d'accord">Date début:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateDebut" id="date" value='<?php echo $todayFormate;?>'/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Finition">Date fin:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="date" name="dateFin" id="date"  value='<?php echo $finAnneeFormate;?>'/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Aficher les statistiques">
                        </div>
                    </div>
                    
                </form>
            </div>
        
        
<div class="row">
                <table align="center">
                    <tr>
                        <th>Nombre d'accord reçu</th>
                        <th>Nombre de commande facturée</th>
                        <th>Nombre de commande réglée</th>
                        <th>orthése</th> <th>Patronage_Couper_Piquage</th>
                        <th>Montage</th>
                        <th>Finition</th>
                        <th>CA potentiel</th>
                    </tr>
                     <?php
            
            $nbAccord = 0;
            $nbCommandeFacture = 0; 
            $nbCommandeRegle = 0; 
            $CA = 0; 
            $orthese = 0;
            $picage = 0;
            $montage = 0;
            $finition = 0; 
            
           
            $connection=mysqli_connect("localhost","root","","frlconseil");      
            $query = "SELECT count(*) AS NB FROM commande WHERE  STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
           
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $nbAccord = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_STATUT =  '1' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
           
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $nbCommandeFacture = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_STATUT =  '2' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $nbCommandeRegle = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT sum(COMMANDE_PRIX) AS CA FROM commande WHERE STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . i().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $CA = $row["CA"];
              } 
              mysqli_free_result($result);
            }

            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_ORTHESE = 'on' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $orthese = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_PAT_COUP_PIC = 'on' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $picage = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_MONTAGE = 'on' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $montage = $row["NB"];
              } 
              mysqli_free_result($result);
            }
            
            $query = "SELECT count(*) AS NB FROM commande WHERE COMMANDE_FINITION = 'on' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y' )>='".$dateDebut."' AND STR_TO_DATE(COMMANDE_DATE_ACCORD , '%d-%m-%Y')<='".$dateFin."'" ;
            
            $result = mysqli_query($connection,$query);
            if (!$result) 
            {
             die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
               
                     $finition = $row["NB"];
              } 
              mysqli_free_result($result);
            }
?>
           <tr>
            <?php
             echo "<td>".$nbAccord."</td>";
             echo "<td>".$nbCommandeFacture."</td>";
             echo " <td>".$nbCommandeRegle."</td>";
             echo " <td>".$orthese."</td>";
             echo " <td>".$picage."</td>";
             echo " <td>".$montage."</td>";
             echo " <td>".$finition."</td>";
             echo " <td>".$CA." &euro;</td>  ";      
              ?>
         
            </tr>
     </table>
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