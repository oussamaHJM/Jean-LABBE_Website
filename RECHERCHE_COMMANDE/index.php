
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
                            <input class="test" class="test" type="date" name="dateOrthese" id="date" />
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
                                <option value="2" >Facture crée et payée</option>
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