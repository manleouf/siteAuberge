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
    </head>
    <script language="JavaScript">
        function valider() {
            var form_err = " ";
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
            return true;
        }
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
                    <h1>Les Terrasses de Kerangall : Contact</h1>
                <div class="lig">
                    <?
                    // On récupére les champs 
                    $TO = 'mgte.roy@wanadoo.fr';
                    $OBJET = 'Contact Terrasses Kerangall';
                    if(isset($_POST['NOM']))      $NOM=$_POST['NOM'];
                    else      $NOM="";
                    if(isset($_POST['PRENOM']))      $PRENOM=$_POST['PRENOM'];
                    else      $PRENOM="";
                    if(isset($_POST['SOCIETE']))      $SOCIETE=$_POST['SOCIETE'];
                    else      $SOCIETE="";
                    if(isset($_POST['FONCTION']))      $FONCTION=$_POST['FONCTION'];
                    else      $FONCTION="";
                    if(isset($_POST['EMAIL']))      $EMAIL=$_POST['EMAIL'];
                    else      $EMAIL="";
                    if(isset($_POST['TEL']))      $TEL=$_POST['TEL'];
                    else      $TEL="";
                    if(isset($_POST['CP']))      $CP=$_POST['CP'];
                    else      $CP="";
                    if(isset($_POST['MESSAGE']))      $MESSAGE=stripslashes($_POST['MESSAGE']);
                    else      $MESSAGE="";


                    $from = 'mgte.roy@wanadoo.fr'; 
                    $contenu_html = "<html>
                    <body style='font-family:Verdana;color:#000000;font-size:11px;background-color:#FFFFFF; ' >
                    <table style='font-family:Verdana;color:#042f64;font-size:11px;' border=0>
                    <tr>
                    <td colspan='2'></td>
                    </tr>
                    <tr>
                    <td>NOM :</td>
                    <td>$NOM</td>
                    </tr>
                    <tr>
                    <td>PRENOM :</td>
                    <td>$PRENOM</td>
                    </tr>
                    <tr>
                    <td>EMAIL :</td>
                    <td>$EMAIL</td>
                    </tr>
                    <tr>
                    <td>TEL :</td>
                    <td>$TEL</td>
                    </tr>
                    <tr>
                    <td>CODE POSTAL :</td>
                    <td>$CP</td>
                    </tr>
                    <tr>
                    <td>MESSAGE :</td>
                    <td>$MESSAGE</td>
                    </tr>
                    </table>
                    </body>
                    </html>" ;


                    //HEADERS DU MAIL 

                    $headers = 'From: "Terrasse de Kerangall" <'.$from.'>'."\n"; 
                    $headers .= 'MIME-Version: 1.0'."\n"; 
                    $headers .= 'Content-Type: text/html; charset="iso-8859-1"'."\n"; 
                    $headers .= 'Content-Transfer-Encoding: 8bit'."\n\n"; 

                    //MESSAGE HTML 
                    $contenu = $contenu_html."\n\n"; 


                    // envoi du mail HTML 
                    mail($TO,$OBJET,$contenu,$headers); 
                    echo "<p><br/ ><br/ >Merci.<br/ ><br/ > Nous vous contacterons très rapidement.</p>";
                    ?>
                </div>
                </div>
                <div class="span3">			
                    <!--
                                            <div class="flag">
                                                    <ul>
                                                    <li class="fr"><a href="petit-dejeuner.html">EN</a></li>
                                                    <li class="en"><a href="petit-dejeuner.html">FR</a></li>				
                                                    </ul>
                                            </div>
                    -->

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