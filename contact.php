<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Les terrasses de Kerangall Chambres d’hôtes à Brest</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/basic.css" />
	</head><script language="JavaScript">
<!--

function valider() {
var form_err = " "
if ( document.FormContact.EMAIL.value.length < 1) {
form_err = "Email\n";
}

var verim = 0;
for (i=1; i<document.FormContact.EMAIL.value.length -4; i++) {
if ( document.FormContact.EMAIL.value.charAt(i) == "@") {
verim = 1;
}} 
if ( verim == 0) {
form_err = "Email invalide \n";
} 

if ( document.FormContact.NOM.value.length < 1) {
form_err += "Nom\n";
}

if ( form_err != " ") {
alert( "Veuillez compléter le(s) champs suivant(s) :\n" + form_err);
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
<?php include_once("inc/plus.php") ?>
</div>
<?php include_once("inc/head.php") ?>
<?php include_once("inc/nav.php") ?>
</div>	
</body>
</html>