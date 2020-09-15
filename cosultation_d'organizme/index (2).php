<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="ressorses/css/style.css">
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
                    <a href="" class="deconnexion bar_i"><i class="ion-ios-unlocked-outline icone-small"></i>Déconnexion</a>
                </div>
            </div>
            <div class="row">
                <h3>Ets Jean Labbé</h3>
            </div>
            
        </nav>
        <nav class="back">
                <div class="row">
                    <ul class="main-nav">
                        <li> <a href="">Gestion Clients</a>
                            <ul>
                                <li><a href="">Consultaion</a></li>
                                <li><a href="">Ajout client</a></li>
                                <li><a href="">Recherche Client</a></li>
                                <li><a href="">Recherche Commande</a></li>
                            </ul>
                        </li>
                        <li><a href="">Gestion Organisme</a>
                            <ul>
                                <li><a href="">Consultation</a></li>
                                <li><a href="">Ajout organisme</a></li>
                            </ul>
                        </li>
                        <li><a href="">Gestion Statistiques</a>
                            <ul>
                                <li><a href="">Statistiques generale</a></li>
                                <li><a href="">Statistiques demandes d'ententes</a></li>
                                <li><a href="">Statistiques accords reçus</a></li>
                                <li><a href="">Statistiques commandes facturées</a></li>
                                <li><a href="">Statistiques commandes réglées</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <h2><i class="ion-ios-bookmarks-outline icon"></i>Consultation de la liste des organisme</h2>
            </div>
            <div class="row">
                <table align="center">
                    <tr>
                        <th></th>
                        <th>Code organisme</th>
                        <th>Nom</th>
                        <th>Date de céation</th>
                        <th>Date de modification</th>
                        <th>Téléphone</th>
                        <th>Fax</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><a href=""><i class="ion-ios-cart-outline pt_icon"></i></a></td>
                        <td>1 76 06 99 350 563 46</td>
                        <td>Rachid</td>
                        <td>Rachid</td>
                        <td>Impasse de la cerisaie</td>
                        <td>91120</td>
                        <td>0160100000</td>
                        <td><a href=""><i class="ion-ios-compose-outline pt_icon"></i></a></td>
                        <td><a href=""><i class="ion-ios-trash-outline pt_icon"></i></a></td>
                    </tr>
                <?php
                        $cnx=mysqli_connect("localhost","root","","frlconseil");
                        $sql="SELECT * FROM organisme";
                        $query=mysqli_query($cnx,$sql);
                        while($data=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                  echo   '<tr>',
                         '<td><a href=""><i class="ion-ios-cart-outline pt_icon"></i></a></td>',
                         '<td>', $data['ORGANISME_CODE'] ,'</td>',
                         '<td>', $data['ORGANISME_LIBELLE'] ,'</td>',
                         '<td>', $data['ORGANISME_DATE_CREATION'] , '</td>',
                         '<td>', $data['ORGANISME_DATE_MODIFICATION'] ,'</td>',
                         '<td>', $data['ORGANISME_TEL'] ,'</td>',   
                         '<td>', $data['ORGANISME_FAX'] ,'</td>',
                         '<td><a href=""><i class="ion-ios-compose-outline pt_icon"></i></a></td>',
                         '<td><a href=""><i class="ion-ios-trash-outline pt_icon"></i></a></td>',
                         '</tr>';
                     }
                    ?>
                     </table>
            </div>
        <div class="row">
            <a class="page-sv" href="">Page Suivante<i class="ion-ios-fastforward-outline icon-sv"></i></a>
        </div>
    
    </body>
</html>