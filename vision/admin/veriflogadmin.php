<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = "skcompagny";
$pwd_valide = "tttt";

// on teste si nos variables sont définies
if (isset($_POST['cin']) && isset($_POST['pwd'])) {

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['cin'] && $pwd_valide == $_POST['pwd']) {

		// on redirige notre visiteur vers une page de notre section membre
		header ('location:Agents.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../admin/login.php">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>

