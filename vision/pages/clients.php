<?php session_start (); ?>
<!DOCTYPE">
<html ">
<head>
    <meta charset="utf-8">
    
    <title>Agent</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php

 // On récupère nos variables de session
                              if (isset($_SESSION['cin']) && isset($_SESSION['pwd'])) {

							 // echo $_SESSION['cin'];
							  $cinAgent = $_SESSION['cin'];
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
                            <span class="sr-only">nav</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                           <a class="navbar-brand" href="#"><img class="img-responsive" src="../img/ag.jpg"></a>
                           <span class="site-name"><b>Agent</b> </span>
                          <span class="site-description">---------------------------------- + Clients----- </span>
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mainNav" >
                          <ul class="nav main-menu navbar-nav">
                            <li id="nn"><i class="fa fa-home "></i><b><?php echo " ".$n." ".$p." "; ?></b></li>
                             
							
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
  <form name="f" method="POST" action="test.php"  d="client_form">
                  <div id="login" class="tab-pane fade in active register">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #5cb85c;"> <strong> Clients  </strong></h2><hr />
                              <!--Tel -->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-earphone"></span>
                                          </div>
										 Exp:  0953608726
                                          <input type="text" placeholder="Tel valide" name="numTel" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							   <!--Code TA -->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-earphone"></span>
                                          </div>
                                          <input type="text" placeholder="Code TA" name="code" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                               <!--Nom-->
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-user"></span>
                                          </div>
                                          <input type="text" placeholder="Nom" name="Nom" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             <!--Prenom -->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-user"></span>
                                          </div>
                                          <input type="text" placeholder="Prenom" name="Prenom" class="form-control" onblur="verifPrenom(this)" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							     <!--Adresse -->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-map-marker"></span>
                                          </div>
                                          <input type="text" placeholder="Adresse" name="Adresse" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
							     <!--Portable-->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-phone-alt"></span>
                                          </div>
                                          <input type="text" placeholder="Portable" name="Portable" class="form-control" >
                                       </div>
                                    </div>
                                 </div>
                              </div>
							     <!--Adresse Email -->
							  
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-send"></span>
                                          </div>
                                          <input type="text" placeholder="Email" name="Email" class="form-control" >
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
                                    <button type="submit" class="btn btn-success btn-block btn-lg"> Ajouter Clients </button>
                                 </div>
                              </div>

                        </div>
                     </div> 
                  </div>
				  
				  </form> <!--fin form login-->
	

</body>

</html>