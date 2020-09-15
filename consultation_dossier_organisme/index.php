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
        <link rel="stylesheet" type="text/css" href="../Styles/style2.css">
        <link rel="stylesheet" type="text/css" href="../Styles/Queries_APP.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <title>Ets Jean Labb&eacute;</title>
    </head>
    <body>
        <nav class="back">
            <div class="row">
                <div class="bar">
                    <a href="Acceuil d'utilisateur/index.php" class="nv_user bar_i"><i class="ion-ios-personadd-outline icone-small"></i>Créer un  utilisateur</a>
                </div>
                <div class="bar">
                    <a href="../index.php" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnexion</a>
                </div>
            </div>
            <div class="row">
                <h3>Ets Jhean Labb&eacute;</h3>
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
                <h2></i>Dossier D'Organisme</h2>
            </div>
            <div class="row">
                <form method="post"  class="client-form">
            <?php
            $connection=mysqli_connect("localhost","root","","frlconseil");
             $query = "SELECT * FROM  organisme  WHERE ORGANISME_NUM =".$_GET["organismeNum"];
           
           $result = mysqli_query($connection,$query);
            if (!$result) 
            {
              die('<div class="msg">Erreur: ' . mysqli_error().'</div>');
            }
            else
            {
              while ($row = mysqli_fetch_array($result)) 
              {
                    echo "<div class='row'>
                      <div class='col span-1-of-3'>
                           <label for='code'>Code d'organisme:</label>
                       </div>
                       <div class='col span-2-of-3'>
                           <input class='test' type='text' name='code' id='Code' value='".$row["ORGANISME_CODE"]."'  disabled>
                       </div>
                   </div>
                   <div class='row'>
                       <div class='col span-1-of-3'>
                           <label for='num'>Nom d'organisme:</label>
                       </div>
                       <div class='col span-2-of-3'>
                           <input class='test' type='text' name='libelle' id='num' value='".$row["ORGANISME_LIBELLE"]."' disabled>
                        </div>
                    </div>
                    
                   <div class='row'>
                      <div class='col span-1-of-3'>
                           <label>Adresse:</label>
                        </div>
                        <div class='col span-2-of-3'>
                         <textarea class='test' name='adresse'  disabled>".$row["ORGANISME_ADRESSE"]."</textarea>
                         </div>
                    </div>";




                   echo "<div class='row'>
                       <div class='col span-1-of-3'>
                           <label for='Code-postal'>Code postal:</label>
                       </div>
                      <div class='col span-2-of-3'>
                          <input class='test' type='text' name='code-postal' id='Code-postal' value='".$row["ORGANISME_CODE_POSTAL"]."' disabled>
                      </div>
           </div>
           <div class='row'>
               <div class='col span-1-of-3'>
                   <label for='Ville'>Ville:</label>
                       </div>
                       <div class='col span-2-of-3'>
                           <input class='test' type='text' name='ville' id='Ville' value='".$row["ORGANISME_VILLE"]."' disabled>
                       </div>
                   </div>
                   <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='T&eacute;l&eacute;phone'>T&eacute;l&eacute;phone:</label>
                        </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='text' name='tel' id='Téléphone' value='".$row["ORGANISME_TEL"]."' disabled>
                        </div>
                    </div>";


                   echo " <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='Fax'>Fax:</label>
                       </div>
                       <div class='col span-2-of-3'>
                            <input class='test' type='text' name='fax' id='Téléphone-portable' value='".$row["ORGANISME_FAX"]."' disabled>
                        </div>
                    </div>
                   <div class='row'>
                        <div class='col span-1-of-3'>
                            <label for='email'>Email</label>
                       </div>
                        <div class='col span-2-of-3'>
                            <input class='test' type='email' name='email' id='email' value='".$row["ORGANISME_EMAIL"]."' disabled>
                       </div>
                   </div>
                    <div class='row'>
                       <div class='col span-1-of-3'>
                           <label>Commentaire</label>
                       </div>
                       <div class='col span-2-of-3'>
                           <textarea class='test' name='message'  disabled>".$row["ORGANISME_COMMENTAIRE"]."</textarea>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col span-1-of-3'>
                            <label>&nbsp;</label>
                        </div>";}} 
                        ?>
                        <div class='col span-2-of-3'>
                            <input type='hidden' value='ok' name='validation' />
                         <?php   echo '<input type="button" value="Modifier" onclick="window.location.href=\'../dossier_organisme/?organismeNum=', $_GET["organismeNum"] ,'\'">'; ?>
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