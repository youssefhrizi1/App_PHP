<?php // on la démarre émoticône smile
		session_start ();
		
		?>


<?php

  $idag = $_SESSION['varup'];
  $newpwd=$_POST['pwd'];
//echo "nombre btn :".$upbtn;
preg_match_all('!\d+!', $idag, $idag);
//print_r($upbtn);
$varup = implode(' ', $idag[0]);
//echo "id btn update  :".$varup;




try{
	$bdd=new PDO('mysql:host=localhost;dbname=vision','root','');
	}
	catch(Exception $e){
		die('erreur :'.$e->getMessage());
		}
				
				
				
$reponse=$bdd->query("UPDATE agent SET pwd = '$newpwd'  WHERE id_agent= $varup ");


	//header('Location: vision/admin/Agents.php');
	echo "<body onLoad='alert(\'password modifier ...\')'>";
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=Agents.php">';
?>