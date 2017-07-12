<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
</head>

<body>
	
	<h1>Essai de codage des user/perso</h1>
	
	
	<div class="UserPart">
		<H2> Codage de la partie Users</H2>
		
		<form method="post" action="index.php">
			<p><label>
            Adresse e-mail :
	            <input class="input-text" type="text" name="user_AdrMail"/>
	        </label></P>
	        <p><label>
            Mot de passe :
	            <input class="input-text" type="pasword" name="user_MDP"/>
	        </label></p>
	        <br />
	        
	        <input class="input-submit" type=" button" value="Envoyer et continuer" />
		</form>
		
	
	</div>
</body>

</html>