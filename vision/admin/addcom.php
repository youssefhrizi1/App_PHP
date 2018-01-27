<?php // on la démarre émoticône smile
		session_start ();
		
		?>


<?php

$idag = $_SESSION['varup'];
  $newcom=$_POST['commentaires'];
//echo "nombre btn :".$upbtn;
preg_match_all('!\d+!', $idag, $idag);
//print_r($upbtn);
$varup = implode(' ', $idag[0]);
//echo "id btn Commentaires  :".$varup;
  $dj = date("Y-m-d");

//echo "tetxt :".$newcom." dt :".$dj;
		
			require('../pages/connectionbd.php');	
  $req=$bdd->exec("INSERT INTO commentaires (com,datecom,id_agent) VALUES ('$newcom','$dj',$varup)");		


	//header('Location: vision/admin/Agents.php');
	echo "<body onLoad='alert(\'Commentaires ajouter ...\')'>";
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=Agents.php">';
?>