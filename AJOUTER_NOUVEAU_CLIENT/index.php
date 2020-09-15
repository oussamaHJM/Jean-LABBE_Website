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
                </div>
            </nav>
            <div class="row">
                <h2><i class="ion-ios-personadd-outline icon"></i>Ajouter nouveau client</h2>
            </div>
            <div class="row">
                <form method="post" action="add.php" class="client-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="num">Num&eacute;ro:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <div class="tEts">
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
                            <label for="code">Code d'organisme d'affiliation:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Code" id="Code" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="nom">Nom:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" class="tEts" type="text" name="nom" id="nom" placeholder="Votre nom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Prénom">Pr&eacute;nom:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" class="tEts" type="text" name="prenom" id="Prénom" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Bénéficiaire">B&eacute;n&eacute;ficiaire:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Benefice" id="Bénéficiaire" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Adresse:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea class="test" name="Adresse" placeholder=""></textarea>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label class="test" for="Ville">Ville:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Ville" id="Ville" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Code-postal">Code postal:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="cp" id="Code-postal" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="email" name="email" id="email" placeholder="Entrez votre email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Téléphone-domicile">T&eacute;l&eacute;phone domicile:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Téléphone-domicile" id="Téléphone-domicile" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Téléphone-portable">T&eacute;l&eacute;phone portable:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Téléphone-portable" id="Téléphone-portable" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label class="tEts" for="Téléphone-bureau">T&eacute;l&eacute;phone bureau:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="Téléphone-bureau" id="Téléphone-bureau" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label  for="Organisme">Organisme:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select class="test" name="Organisme" id="Organisme">
                                <option value="choix..">Choix..</option>
                                <option value="palaiseau">Palaiseau</option>
                                <option value="paris" selected>Paris</option>
                                <option value="corbeil">Corbeil</option>
                                <option value="tEts">TEts</option>
                                <option value="CRAMIF">CRAMIF</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Classe">Classe:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select class="test" name="Classe" id="Classe">
                                <option value="choix..">Choix..</option>
                                <option value="Classe A 100%">Classe A 100%</option>
                                <option value="Classe A 65%" selected>Classe A 65%</option>
                                <option value="Classe B 100%">Classe B 100%</option>
                                <option value="Classe B 65%">Classe B 65%</option>
                                <option value="COMMANDE PRIVE">COMMANDE PRIVE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="N-Forme">N°Forme:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="test" type="text" name="N-Forme" id="N-Forme" placeholder="" required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Commentaire</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea class="test" name="message" placeholder="que vous pensez de nous?"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="enregistrer">
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