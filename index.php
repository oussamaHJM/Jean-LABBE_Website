<?php
$_SESSION['connexion'] =false;

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang"fr">
<meta charset="utf-8">

    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendores/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendores/css/grid.css">
        <link rel="stylesheet" type="text/css" href="ressorses/css/style.css">
        <link rel="stylesheet" type="text/css" href="ressorses/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendores/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        <title>Ets Jean Labbé</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="ressorses/img/logo1.png" alt="jhean labbé logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="#section section-catalog">Catalogue</a> </li>
                        <li><a href="#boutique">La boutique</a> </li>
                        <li><a href="">Plan d'accès</a> </li>
                        <li><a href="#contact">Contact</a> </li>
                        <li><a href="#propos">&Agrave; propos</a> </li>
                    </ul>
                </div>
            </nav>
            <div class="img-text-box">
                <h1>“Pour faire des chaussures, il ne suffit pas d'avoir du cuir et un marteau.”</h1>
                <a class="btn btn-full" href="./login_page/index_login.html">Sign In</a>
                <a class="btn btn-vierge" href="&">Plus</a>
            </div>
        </header>
        <section class="section-catalog" id="section section-catalog">
            <div class="row">
                <h2>Qualité&mdash;Confort&mdash;Elégance</h2>
            </div>
            <ul class="catalogue clearfix">
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/9.jpg" alt="********">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/10.jpg" alt="******">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/11.jpg" alt="**********">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/12.jpg" alt="***********">
                    </figure>
                </li>
            </ul>
            <ul class="catalogue clearfix">
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/13.jpg" alt="********">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/14.jpg" alt="******">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/15.jpg" alt="**********">
                    </figure>
                </li>
                <li>
                    <figure class="catalog-fig">
                        <img src="ressorses/img/16.jpg" alt="***********">
                    </figure>
                </li>
            </ul>
        </section>
        <section class="boutique">
            <div class="row" id="boutique">
                <h2>La boutique</h2>
            </div>
            <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
        </section>
        
        <section class="contact">
            <div class="row">
                <h2>Heureux de vous servir</h2>
            </div>
            <div class="row">
                <form method="post" action="&" class="contacy form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="nom">Nom & prénom</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Entrez votre email" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="Téléphone">Téléphone</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="Téléphone" id="Téléphone" placeholder="Votre numéro" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="comment" style="width: 100%">Comment avez-vous entendu parler de nous?<br></label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="comment" id="comment">
                                <option value="amis">Amis</option>
                                <option value="internet" selected>Internet</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>
                        
                    </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Commentaire</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" placeholder=""required ></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Envoyer">
                            </div>
                        </div>
                </form>
            </div>
        </section>
        
        <section class="a-propos">
            <div class="row" id="propos">
                <h2>A propos</h2>
            </div>
            <div class="row">
                <div class="span-2-of-2 box">
                    <i class="ion-ios-information-outline icone-info"></i>
                    <p class="information">Fabricant sur mesure depuis 1950<br> Qualité, confort et élégance <br>Chaussures-semelles orthopédiques.</p>
                </div>
            </div>
        </section>
        
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