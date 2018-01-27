<?php
session_start (); 


 $tel= $_POST['numTel'];
 $codeta= $_POST['code'];
 $nom= $_POST['Nom'];
 $prenom= $_POST['Prenom'];
 $adresse= $_POST['Adresse'];
 $portable= $_POST['Portable'];
 $email= $_POST['Email'];
 
 
 //datetime
 $datetime = date("Y-m-d H:i:s");
  $d = date("Y-m-d ");
 
 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  }
							     

		//on enregistrer les donnee de client
		
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['telephone'] = $tel;
		$_SESSION['email'] = $email;
	
	  
require('../pages/connectionbd.php');
						   
			$reponse=$bdd->query("SELECT id_agent FROM  agent WHERE cin = $cinAgent  ");
			
  
    while($donnee=$reponse->fetch())
	 {
		 $idag= $donnee['id_agent'];
	 }
	 
	 //remplir table clients
  $bdd->exec("INSERT INTO clients ( Tel_cli, Ta_ag, Nom_cli, Prenom_cli, Adresse_cli, Portable_cli, Email_cli,DateTime_cli, AgentID,D) VALUES ($tel, '$codeta', '$nom', ' $prenom', '$adresse','$portable', ' $email','$datetime', $idag,'$d')");	
	 
	 //remplir table articles
	 
	 echo " code Ta ".$codeta;
	
	 
	 //$bdd->exec("INSERT INTO Articles(Ref_art,Nom_art,Prix_art,Commentaire_art) VALUES ( '$RefArticles','$NomArticles', $PrixArticles, '$Commentaire')");
	header('Location: articles.php');

			 
?>			 