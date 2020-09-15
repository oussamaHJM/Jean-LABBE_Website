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
                <h2><i class="ion-ios-search icon"></i>Recherche client</h2>
            </div>
            <div class="row">
                <form method="post" action="chercher.php" class="client-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="num">Numéro:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <div class="recherche">
                             <input class="ss1" name=numeroSS1 maxlength=1  type=text>
                <input class="ss2" name=numeroSS2 maxlength=2  type=text>
                 <input class="ss3" name=numeroSS3 maxlength=2  type=text>
                 <input class="ss4" name=numeroSS4 maxlength=2  type=text>
                 <input class="ss5" name=numeroSS5 maxlength=3  type=text>
                <input class="ss6" name=numeroSS6 maxlength=3  type=text>
                 <input class="ss7" name=numeroSS7 maxlength=2  type=text>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="nom">Nom:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="nom" id="nom" placeholder="Votre nom" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Prénom">Prénom:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Prénom" id="Prénom" placeholder="" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Ville">Ville:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Ville" id="Ville" placeholder="" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Code-postal">Code postal:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Code-postal" id="Code-postal" placeholder="" >
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
<?php
$nom=$_POST['nom'];
$pnom=$_POST['Prénom'];
$ville=$_POST['Ville'];
$cp=$_POST['Code-postal'];
?>
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
                    $connexion=mysqli_connect("localhost","root","","frlconseil");
        $query = "SELECT * FROM client where "; 
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),1,1) LIKE '%". $_POST["numeroSS1"] ."%' AND "; 
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),2,2) LIKE '%". $_POST["numeroSS2"] ."%' AND ";  
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),4,2) LIKE '%". $_POST["numeroSS3"] ."%' AND ";  
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),6,2) LIKE '%". $_POST["numeroSS4"] ."%' AND ";  
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),8,3) LIKE '%". $_POST["numeroSS5"] ."%' AND "; 
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),11,3) LIKE '%". $_POST["numeroSS6"] ."%' AND ";  
        $query = $query."SUBSTRING(REPLACE(CLIENT_NSS,' ',''),14,2) LIKE '%". $_POST["numeroSS7"] ."%' AND ";  
        $query = $query."CLIENT_NOM LIKE '%". $_POST["nom"] ."%' AND ";  
        $query = $query."CLIENT_PRENOM LIKE '%". $_POST["Prénom"] ."%' AND ";  
        $query = $query."CLIENT_VILLE LIKE '%". $_POST["Ville"] ."%' AND ";  
        $query = $query."CLIENT_CODE_POSTALE LIKE '%". $_POST["Code-postal"] ."%'";
                $result = mysqli_query($connexion,$query);

                while ($row = mysqli_fetch_array($result)) 
        {
          
        
          echo '<tr title="Acc&eacute;der au dossier" onmousemove="lavend(this)" onmouseout ="transp(this)">'
                ,'<td><a href="javascript:window.location.href=\'../Gestion_des_commandes/?clientNum=', $row["CLIENT_NUM"] ,'\'" ><i class="ion-ios-cart-outline pt_icon"></i></a></td>'
                ,'<td><a href="javascript:window.location.href=\'../Dossier_client/?clientNum=', $row["CLIENT_NUM"] ,'\'" ><i class="ion-ios-paper-outline pt_icon"></i></a></td>'
                ,'<td>',$row["CLIENT_NSS"],'</td>'
                ,'<td>',$row["CLIENT_NOM"],'</td>'
                ,'<td>',$row["CLIENT_PRENOM"],'</td>'                   
                ,'<td>',$row["CLIENT_ADRESSE"],'</td>'                   
                ,'<td>',$row["CLIENT_CODE_POSTALE"],'</td>'
                ,'<td>',$row["CLIENT_VILLE"],'</td>'                   
                ,'<td>',$row["CLIENT_TELEPHONE_FIXE"],'</td>'
                ,'<td><a href="javascript:window.location.href=\'../modifier_dossier_client/?clientNum=', $row["CLIENT_NUM"] ,'\'"" "><i class="ion-ios-compose-outline pt_icon"></i></a></td>'
                ,'</tr>';
               
        } 

        mysqli_free_result($result);              
        echo '</table>';
     

                    ?>
                    
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