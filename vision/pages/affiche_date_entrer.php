<form name="f1" action="" method="POST" >
         
          
    
	<?php 

   
     while($donnee2=$reponse1->fetch())
	 {
		echo "<tr>";
		echo "<td>".$donnee2['date_entrer']."</td>";
	
		
		
	
	
                  
	 }
   echo "</tr></table>";
    
	 ?>
      
        
      
    </form>