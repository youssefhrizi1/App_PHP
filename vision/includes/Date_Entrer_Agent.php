<?php
session_start (); 


//datetime
 $datetime_Entrer = date("Y-m-d H:i:s");
  $dj = date("Y-m-d");
 
 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  }
							      require 'connectionbd.php'; 
								  
		 $req=$bdd->exec("INSERT INTO presence_entrer (date_entrer,cin,dj) VALUES ('$datetime_Entrer ','$cinAgent','$dj')");