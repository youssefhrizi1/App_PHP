<?php
class Rempbase{
	private $nom;
	private $prenom;
    private $cin;
    private $email;
	private $pwd;
	
	

function __construct($nom,$prenom,$cin,$email,$pwd){
	$this->nom=$nom;
    $this->prenom=$prenom;
    $this->cin=$cin;
	$this->email=$email;
	$this->pwd=$pwd;
	}	
	
public function getNom(){return $nom; }
public function getPrenom(){return $prenom;}
public function getCin(){return $cin;}
public function getEmail(){return $email;}
public function getPwd(){return $pwd;}





public function setNom($nom ){$this->nom=$nom ;}
public function setPrenom($prenom ){$this->prenom=$prenom ;}
public function setCin($cin ){$this->cin=$cin ;}
public function setEmail($email ){$this->email=$email ;}
public function setPwd($pwd ){$this->pwd=$pwd ;}





             public function remplir(){
	                   require 'connectionbd.php'; 
					   $req=$bdd->query("SELECT * FROM agent WHERE cin LIKE '$this->cin'");
	                   $res=$req->rowCount();
		    if($res == 0){
     $req=$bdd->exec("INSERT INTO agent (nom, prenom, cin, email, pwd) VALUES ('$this->nom','$this->prenom','$this->cin','$this->email','$this->pwd')");		
	echo "Vous Avez Inscrir Correctement </br> "; header('location:../index.php');
			             }else{
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo "<body onLoad='alert(\'Membre non reconnu...\')'>";
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
						      }
    }
	}
$inscription = new Rempbase(      
	 $_POST['nom'],
	 $_POST['prenom'],
     $_POST['cin'],
     $_POST['email'],
	 $_POST['pwd']); 
$inscription-> remplir();	 

?>