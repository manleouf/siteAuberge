ª<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta name="robots" content="noindex" />
        <title>Les terrasses de Kerangall Chambres d’hôtes à Brest</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/basic.css" />
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
        <div class="out" id="contact">
            <div class="main">
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
                <div class="plus"><p>Les Terrasses de Kerangall</p>
                    <p>5, rue de Kerangall<br />
                        29200 Brest</p>
                    <p></p>
                    <span class="tel">02 98 42 19 40</span>
                    <p align="center"></p>
                </div>
            </div>
            <?php include_once("inc/head.php") ?>
            <?php include_once("inc/nav.php") ?>
            <div class="foot"></div>
        </div>	
    </body>
</html>