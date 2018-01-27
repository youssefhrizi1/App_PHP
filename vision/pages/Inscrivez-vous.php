<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  
    <title>Login/Signup </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
   
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<style type="text/css">
	.container
	{
		    padding-left: 400px;
		
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
<script src="pages/verificationforms.js"></script>
</head>
<body>
<div class="container" >
      <div class="row">
         <div class="col-md-6">
         <div class="panel with-nav-tabs panel-info">
            <div class="panel-heading">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#login" data-toggle="tab"> Login </a></li>
                  <li><a href="#signup" data-toggle="tab"> Signup </a></li>
               </ul>
            </div>

            <div class="panel-body">
               <div class="tab-content">
			 
				  
                  <form name="f2" method="POST" action="pages/rempbase.php" >
				  
                  <div id="signup" class="tab-pane fade">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #f0ad4e;"> <Strong> Register </Strong></h2> <hr />
                                	 <!-- nom-->
									 
								<div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Nom" name="nom" onblur="verifNom(this)" >
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 
								 
								 <!-- prenom-->
								     <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                            <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Prenom" name="prenom" >
                                          </div>
                                       </div>
                                    </div>
                                 </div>
								 <!-- cin-->
								 
								     <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Cin" name="cin">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- email-->
								 
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                             </div>
                                             <input type="email" class="form-control" placeholder=" E-Mail" name="email" onblur="verifMail(this)" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                    <!-- pwd-->
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
                                             <input type="password" class="form-control" placeholder=" Password" name="pwd">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-lg btn-block btn-warning"> Register</button>
                                       </div>
                                    </div>
                                 </div>
                        </div>
                     </div>
                  </div>
				  
				   </form> <!--fin form inscription-->
				   
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


   <div class="modal fade" id="forgot">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
               <h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
            </div>

            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-envelope"></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-lock"></span>
                              </div>
                              <input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="modal-footer">
               <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-info"> Save <span class="glyphicon glyphicon-saved"></span></button>

                  <button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
               </div>
            </div>
         </div>
      </div>
   </div>
<script type="text/javascript">

</script>
</body>
</html>
