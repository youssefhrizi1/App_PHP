<?php
//datetime
 $datetime_sortir = date("Y-m-d H:i:s");
   $djs = date("Y-m-d");
 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  }
							      require 'connectionbd.php'; 
								  
		 $req=$bdd->exec("INSERT INTO presence_sortir (date_sortir,cin,djs) VALUES ('$datetime_sortir ','$cinAgent ','$djs')");