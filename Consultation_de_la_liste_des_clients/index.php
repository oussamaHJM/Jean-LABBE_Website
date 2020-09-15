<?php require_once("../authentification/authentification.php");?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
                <h2><i class="ion-ios-people-outline icon"></i>Consultation de la liste des clients</h2>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>N.SS</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                        <th>Téléphone</th>
                        <th></th>
                        
                   </tr>
                    
                  <?php
                    
                    $con = mysqli_connect('localhost','root','');
                    mysqli_select_db($con,'frlconseil');
                    
                    $results_per_page = 20;
                    
                    $sql = "SELECT * FROM client";
                    $result = mysqli_query($con,$sql);
                    
                    $number_of_results = mysqli_num_rows($result);
                    $number_of_page = ceil($number_of_results / $results_per_page);
                    
                    if (isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else {
                        $page=1;
                    }
                    
                    if($page<1){
                        $page=1;
                    }
                    
                    $this_page_first_result = ($page-1) * $results_per_page;
                    
                    $sql = "SELECT * FROM client LIMIT " . $this_page_first_result . ' , ' . $results_per_page;
                    $result = mysqli_query($con,$sql);
                        
                    
                    
                    while($row = mysqli_fetch_array($result)){
                        
                     echo '<tr>','
                        <td><a href="javascript:window.location.href=\'../Gestion_des_commandes/?clientNum=', $row["CLIENT_NUM"] ,'\'" ><i class="ion-ios-cart-outline pt_icon"></i></a></td>','
                        <td><a href="javascript:window.location.href=\'../Dossier_client/?clientNum=', $row["CLIENT_NUM"] ,'\'" ><i class="ion-ios-paper-outline pt_icon"></i></a></td>','<td>', $row['CLIENT_NSS'] ,'</td>','<td>', $row['CLIENT_NOM'] ,'</td>'
                        ,'<td>', $row['CLIENT_PRENOM'] ,'</td>',
                        '<td>', $row['CLIENT_ADRESSE'] ,'</td>',
                        '<td>', $row['CLIENT_CODE_POSTALE'] , '</td>',
                        '<td>', $row['CLIENT_VILLE'] ,'</td>','<td>', $row['CLIENT_TELEPHONE_FIXE'] ,'</td>','      
<td><a href="javascript:window.location.href=\'../modifier_dossier_client/?clientNum=', $row["CLIENT_NUM"] ,'\'"" "><i class="ion-ios-compose-outline pt_icon"></i></a></td>','
                    </tr>';                        
                    }
                    
                    
                        
                        
                        
                        ?>
                    
              
                </table>
            </div>
        <div class="row">
            
                <a class="page-sv" style="float:left;"<?php $page_d = $page-1 ; echo 'href="index.php?page='.$page_d.'" ' ?> > <i class="ion-ios-arrow-back icon-sv"></i>Page precdent</a>
            
                
                <?php
                        
                    echo '<select onchange= "location = this.value">';
                    for ($i = 1; $i <=$number_of_page; $i++){
                        echo '<option value="index.php?page=' . $i . '">' .' '. $i.' ' .  '</option>';
            
                    }
                    echo "</select>";
                ?>
            
            
                <a class="page-sv" <?php $page_d +=2 ; echo 'href="index.php?page='.$page_d.'" ' ?> >Page Suivante<i class="ion-ios-arrow-forward icon-sv"></i></a>
            
                
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