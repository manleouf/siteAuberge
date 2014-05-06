<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="robots" content="noindex" />
        <title>Chambre d’hôte à louer sur Brest</title>
        <meta name="description" content="Les Terrasses de Kerangall, chambre d'hôte à Brest, TV, wifi, terrasse, accès privatif" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">	
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />		
        <link rel="stylesheet" type="text/css" href="css/basic2.css" />
    </head><script language="JavaScript">
<!--

        function valider() {
            var form_err = " "
            if (document.FormContact.EMAIL.value.length < 1) {
                form_err = "Email\n";
            }

            var verim = 0;
            for (i = 1; i < document.FormContact.EMAIL.value.length - 4; i++) {
                if (document.FormContact.EMAIL.value.charAt(i) == "@") {
                    verim = 1;
                }
            }
            if (verim == 0) {
                form_err = "Email invalide \n";
            }

            if (document.FormContact.NOM.value.length < 1) {
                form_err += "Nom\n";
            }

            if (form_err != " ") {
                alert("Veuillez compléter le(s) champs suivant(s) :\n" + form_err);
                return false;
            }
            return true
        }
//-->
    </script>
    <body>
        <?php include_once("inc/ana.php") ?>
        <div class="container">
            <div class="row-fluid" id="head">
                <div class="container">
                    <div class="span12 mobile-collapse">
                        <a title="Les terrasses de Kerangall, chambres d'hote" href="/"><span class="txtSpecial"> Les Terrasses de Kerangall</span> </a>
                    </div>
                    <div class="offset1 span11">
                        <ul id="head-nav">
                            <li><a href="chambre_chene.html" title="Chambre Chene">Chambres d'hotes à Brest</a></li>
                            <li><a href="chambre_chene.html" title="Chambre Chene">La Chambre Ch&ecirc;ne</a></li>
                            <li><a title="Chambre Palissandre" href="chambre_palissandre.html">La Chambre Palissandre</a></li>
                            <li><a title="Petit D&eacute;jeuner des hotes" href="petit-dejeuner.html">Les Petits D&eacute;jeuners</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row-fluid" id="main">
                <div class="span3">
                    <!--<?php include_once("inc/nav.php") ?>-->
                    <ul class="nav nav-list">
                        <li class="maison"><a title="La maison d'hote" href="/terrasses-kerangall.html">La maison d'h&ocirc;tes</a></li>
                        <li class="tarif"><a title="Tarifs location des chambres" href="/tarifs.html">Tarifs &amp; Prestations</a></li>
                        <li class="acces"><a href="/acces.html">Acc&egrave;s &amp; Situation</a></li>
                        <li class="contact"><a href="/contact.html">Contact</a></li>
                        <li class="livre"><a href="/livre_dor.html">Le livre d'or</a></li>
                        <li class="livre"><a href="/adresses-brest.html">Votre séjour</a></li>
                    </ul>
                </div>

                <div class="span6">
                    <div class="out" id="contact">
                        <div class="main">
                            <h1>Les Terrasses de Kerangall : Contact 02 98 42 19 40</h1>
                            <div class="lig">

                                <form name="FormContact" action="merci.php" method="post" enctype="multipart/form-data" onsubmit="return valider();">
                                    <p>Pour toutes informations concernant nos chambres d'hôtes, <br />
                                        adressez-nous votre message.</p>
                                    <label>Nom*<input type="text" name="NOM" /></label>
                                    <label>Pr&eacute;nom*<input type="text" name="PRENOM" /></label>
                                    <label>T&eacute;l<input type="text" name="TEL" /></label>
                                    <label>Email*<input type="text" name="EMAIL" /></label>
                                    <label>Code Postal<input type="text" name="CP" /></label>
                                    <label>Message<textarea name="MESSAGE" rows="5" cols="40"></textarea></label>
                                    <input type="submit" value="Envoyer" />
                                </form>
                            </div>
                        </div>
                    </div>	
                </div>

                <div class="span3">			
                    <p class="tl"><span class="mobile-collapse icon-phone"></span> + 33 6 11 16 47 36</p>
                    <p><img src="/img/logo-3cles.jpg" alt="" /> <img src="/img/logo-ancv.png" alt="" height="67" width="90" /></p>

                    <div class="featured-box" style="height: auto;">

                        <div class="box-content clearfix">

                            <p style="align:center;">Album Photo</p>

                            <span class="thumbnail">
                                <a href="album-1.html" title="Les terrasses de Kerangall"><img src="images/photo1.jpg" alt="Miniature" /></a>
                            </span>
                            <hr></hr>

                            <div class="social-icons">
                                <ul class="social-icons">
                                    <li class="wifi"><a href="#" target="_blank" title="wifi">wifi</a></li>
                                    <li class="tv"><a href="#" target="_blank" title="TV">tv</a></li>
                                    <li class="affaire"><a href="#" target="_blank" title="affaire">affaire</a></li>
                                    <li class="chien"><a href="#" target="_blank" title="affaire">chien</a></li>								
                                </ul>
                            </div>
                            <ul class="list icons pull-left list-unstyled"></ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer"><p>Les Terrasses de Kerangall  <span class="icon-map-marker"></span> 5, rue de Kerangall 29200 Brest  <span class="icon-phone"></span> 02 98 42 19 40<br /></p></div>

    </body>
</html>