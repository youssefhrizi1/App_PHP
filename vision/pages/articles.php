<?php session_start (); ?>
<!DOCTYPE">
<html ">
<head>
    <meta charset="utf-8">
    
    <title>skcompany/Agent</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
<?php
 
 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
							  $telephone =$_SESSION['telephone'];
							  $mail =$_SESSION['email'];
							  }
							     


		require('../pages/connectionbd.php');
			$reponse=$bdd->query("SELECT nom,prenom,id_agent FROM  agent WHERE cin = $cinAgent  ");
  
     while($donnee=$reponse->fetch())
	 {
		$n=$donnee['nom'];
		$p=$donnee['prenom'];
		//echo "".$donnee['id_agent']."";
		 $idag= $donnee['id_agent'];
	 }

	 		$reponse2=$bdd->query("SELECT * FROM  clients  WHERE  Tel_cli = $telephone ");
  
     while($donnee2=$reponse2->fetch())
	 {
		$ci=$donnee2['ClientID'];
		//$Ti=$donnee2['Tel_cli'];
		$ni=$donnee2['Nom_cli'];
		$pi=$donnee2['Prenom_cli'];
		
		//echo "client id ".$ci;
	 }

	 ?>
      
        
      
   
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

<div class="wrapper">
        <div class="container">
        	<div class="row">
                <div class="col-md-12">
                <header id="header">

  <div class="slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://placehold.it/1200x400/F34336/F34336&text=WORDPRESS THEME DEVELOPER">
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400/20BFA9/ffffff&text=CLEAN %26 SMART">
    </div>
  </div>

  
</div>
                	</div><!--slider-->
                	<nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                            <a class="navbar-brand" href="#"><img class="img-responsive" src="../img/ag.jpg"></a>
                          <span class="site-name"><b>Vision</b> skcompagny</span>
                          <span class="site-description">Clients</span>
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mainNav" >
                          <ul class="nav main-menu navbar-nav">
                            <li id="nn"><i class="fa fa-user" aria-hidden="true"></i> <b><?php echo " ".$n." ".$p ; ?></b></li>
							 <li id="nn2"><i class="fa fa-male" aria-hidden="true"></i><b><?php echo " Client : ".$ni." ".$pi ; ?></b></li>
							
                              <li id="nn3"><a href="clients.php"><i class="fa fa-plus-circle " aria-hidden="true"></i><b><?php echo " Ajout Client  "; ?></a></b></li>
							
                          </ul>
						
                          
                           <ul class="nav  navbar-nav navbar-right">
                          
                          
                            <li><a href="logout.php"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></a></li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
					</nav>
                    
                </header><!--/#HEADER-->
<script type="text/javascript">

</script>
</head>
<body>
<header>
  <form name="f1" method="POST" action="test2.php">
                  <div id="login" class="tab-pane fade in active register">
                     <div class="container-fluid">
							   <div class="row">
                              <h2 class="text-center" style="color: #5cb85c;"> <strong> Articles </strong></h2><hr />
                        
							     <!--Articles -->
							   <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-barcode"></span>
                                          </div>
                                          <input type="text" placeholder="Ref Articles" name="RefArticles" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							  <!--Nom Articles -->
							   <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="	glyphicon glyphicon-font"></span>
                                          </div>
                                          <input type="text" placeholder="Nom Articles" name="NomArticles" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
					      <!--Prix Articles -->
							   <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-euro"></span>
                                          </div>
                                          <input type="text" placeholder="Prix Articles" name="PrixArticles" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  <!--Commentaire -->
							   <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-comment"></span>
                                          </div>
                                          <input type="text" placeholder="Commentaire" name="Commentaire" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <!--<input type="checkbox" name="check" checked> Remember Me -->
                                    </div>
                                 </div>

                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <!-- <a href="#forgot" data-toggle="modal"> Forgot Password? </a>-->
                                    </div>
                                 </div>
                              </div>
                              <hr />
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-success btn-block btn-lg"> Ajouter Articles </button>
                                 </div>
                              </div>

                        </div>
                     </div> 
                  </div>
				  
				  </form> <!--fin form login-->
	
	
</body>

</html>