<?php session_start (); ?>
<html>
<head>
   <meta charset="utf-8">
  
    <title>skcompany/superviseur </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	


<style type="text/css">

	.cont
	{
		    margin-left: 400px;
		
	}
	 .row {
    margin-right: 150px; 
     margin-left: 150px; 
}
.btn-success
   {
      transition: 0.5s;
   }

   .btn-success:hover, .btn-success:focus
   {
      background: white;
      border-color: #5cb85c;
      color: black;
      transition: all 0.4s;
   }

   .btn-warning
   {
      transition: 0.5s;
   }

   .btn-warning:hover, .btn-warning:focus
   {
      background: white;
      color: black;
      border-color: #f0ad4e;
   }

   .panel.with-nav-tabs .nav-tabs
   {
      border-bottom: none; 
   }
   .panel.with-nav-tabs .nav-justified
   {
      margin-bottom: -4px;
   }

   .panel
   {
      margin-top: 10%;
   }

   .modal-header
   {
      background: #FF3838;
      color: white;
      text-align: center;
   }

   .input-group-addon
   {
      background-color: #5cb85c;
      color: white;
   }

   .iga1
   {
      background-color: #f0ad4e;
      color: white;
	  
   }

   .iga2
   {
      background-color: #FF3838;
      color: white;
   }
   
</style>



<?php 
include ('../admin/header_i_sup.html');
?>
</head>
<body>
  <form name="f1" method="POST" action="veriflogsup.php">
                  <div id="login" class="tab-pane fade in active register">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #3a35d6;"> <strong> Login  </strong></h2><hr />

                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-user"></span>
                                          </div>
                                          <input type="text" placeholder="CIN" name="cin" class="form-control" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-lock"></span>
                                          </div>

                                          <input type="password" placeholder="Password" name="pwd" class="form-control" required>
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
                                    <button type="submit" class="btn btn-success btn-block btn-lg"> Login </button>
                                 </div>
                              </div>

                        </div>
                     </div> 
                  </div>
				  
				  </form> <!--fin form login-->

</body>
</html>