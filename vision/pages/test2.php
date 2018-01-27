<?php
session_start (); 

 
 $RefArticles= $_POST['RefArticles'];
 $NomArticles= $_POST['NomArticles'];
 $PrixArticles= $_POST['PrixArticles'];
 $Commentaire= $_POST['Commentaire'];


 
 
 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  $telephone =$_SESSION['telephone'];
						
							  $mail =$_SESSION['email'];
							  }
							     

	
	 require('../pages/connectionbd.php');
	 
				$reponse2=$bdd->query("SELECT * FROM  clients WHERE Tel_cli = $telephone ");
  
     while($donnee2=$reponse2->fetch())
	 {
		$cid=$donnee2['ClientID'];
		$Ti=$donnee2['Tel_cli'];
		$ni=$donnee2['Nom_cli'];
		$pi=$donnee2['Prenom_cli'];
		
	 }

	
	$bdd->exec("INSERT INTO Articles(Ref_art,Nom_art,Prix_art,Commentaire_art,ClientID) VALUES ( '$RefArticles','$NomArticles', $PrixArticles, '$Commentaire',$cid)");
	//header('Location: articles.php');
	echo "<body onLoad='alert(\'article ajouter ...\')'>";
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=articles.php">';
 //echo "".$RefArticles."<br>".$NomArticles."<br>".$PrixArticles."<br>".$Commentaire."<br>".$cid;
			 
?>			 