<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Document sans titre</title>
</head>

<body>
<form action="tpmagasin2.php" method="post">
<fieldset>
<legend> Veuillez renseigner vos coordonnées </legend>
<p>
<label> Nom</label> <input type="text" name="nom" placeholder="saisissez votre nom" />
</p>
<p>
<label> Prénom</label> <input type="text" name="prenom" placeholder="saisissez votre prenom" />
</p>
<p>
<label> Adresse</label> <input type="text" name="adresse" placeholder="saisissez votre adresse" />
</p>
<p>
<label> Ville</label> <input type="text" name="ville" placeholder="saisissez votre ville" />
</p>
<p>
<label> Code Postal</label> <input type="text" name="codepostal" placeholder="saisissez votre code postal" />
</p>
<input type="submit" name="envoyer" value="envoyer"/>
</fieldset>
</form>
<?php
include 'tpmagasin2.php';//appel de la page de traitement php
?>
</body>
</html>
