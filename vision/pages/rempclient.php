<?php
session_start (); 


 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  }
							     

	
	        try
                           {
	                         $bdd = new PDO('mysql:host=localhost;dbname=vision;charset=utf8', 'root', '');
	
                           }
                        catch(Exception $e)
                           {
                              die('Erreur : '.$e->getMessage());
                           }	
			$reponse=$bdd->query("SELECT nom,prenom,id_agent FROM  agent WHERE cin = $cinAgent  ");
  
     while($donnee=$reponse->fetch())
	 {
		echo "<h2>".$donnee['nom']." ".$donnee['prenom']."</h2>";
		//echo "".$donnee['id_agent']."";
		 $idag= $donnee['id_agent'];
	 }

   echo "id recupere : ".$idag;























	 
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)




class Rempbase{
	private $numTel;
	private $articles;
	private $idag;
   
	
	

function __construct($numTel,$articles,$idag){
	$this->numTel=$numTel;
    $this->articles=$articles;
	$this->idag=$idag;
	
}
	
public function getNumTel(){return $numTel; }
//public function getIdag(){return $idag; }
public function getArticles(){return $articles;}







public function setNumTel($nom ){$this->numTel=$numTel ;}
//public function setIdag($idag ){$this->idag=$idag ;}
public function setArticles($articles ){$this->articles=$articles ;}






             public function remplir(){
	                   try
                           {
	                         $bdd = new PDO('mysql:host=localhost;dbname=vision;charset=utf8', 'root', '');
	
                           }
                        catch(Exception $e)
                           {
                              die('Erreur : '.$e->getMessage());
                           }
					  

	
     $req=$bdd->exec("INSERT INTO clients (numTel,articles,id_agent) VALUES ('$this->numTel','$this->articles',$idag)");		
	         header('location:clients.php');	
			             
    }
	}
$remp = new Rempbase(      
	 $_POST['numTel'],
	 $_POST['articles'],$idag);
  
$remp-> remplir();	 

?>