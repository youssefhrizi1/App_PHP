﻿<?php
           class Verification{
                   private $cin;
                   private $pwd;
     function __construct($cin,$pwd){
                   $this->cin = $cin;
                   $this->pwd = $pwd;
                                    }
        public function getCin(){ return $this->cin ;}
        public function getPwd(){return $this->pwd ;}
        public function setCin($cin){ $this->cin = $cin ;}
        public function setPwd($pwd){ $this->pwd = $pwd ;}

public function affiche(){ 

                 require 'connectionbd.php'; 
		
    $req = $bdd->query("SELECT * FROM agent WHERE cin LIKE '$this->cin' AND pwd LIKE '$this->pwd'");
    while($res=$req->fetch()){
		if (isset($_POST['cin']) && isset($_POST['pwd'])) {
			
	 if (($res['cin'] == $_POST['cin'] ) && ($res['pwd'] == $_POST['pwd'])) {
	
       // dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre émoticône smile
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['cin'] = $_POST['cin'];
		$_SESSION['pwd'] = $_POST['pwd'];
		// on redirige notre visiteur vers une page de notre section membre
		header('location:clients.php');
		//app to save date entrer agent
		include '../includes/Date_Entrer_Agent.php';
		
	}
	else {
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
	      }
}
else {
			
		echo 'Les variables du formulaire ne sont pas déclarées.';
	}
	
}//while
}//affiche
}//function


$personne = new Verification(
	$_POST['cin'],
	$_POST['pwd']);
$personne->affiche();
// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
	      
?>








