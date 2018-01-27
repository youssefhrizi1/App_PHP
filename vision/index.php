
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  
    <title>skcompany </title>
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
    margin-right: 0px; 
     margin-left: 0px; 
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

</head>
<body>

<?php 
include ('admin/profile_header.html');
?>
<div class="cont" >
      <div class="row">
         <div class="col-md-6">
         <div class="panel with-nav-tabs panel-info">
            <div class="panel-heading">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#login" data-toggle="tab"> Login </a></li>
                  <li><a href="#signup" data-toggle="tab"> Register </a></li>
               </ul>
            </div>

            <div class="panel-body">
               <div class="tab-content">
			   <form name="f1" method="POST" action="pages/veriflogin.php">
                  <div id="login" class="tab-pane fade in active register">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #5cb85c;"> <strong> Login  </strong></h2><hr />

                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-subtitles"></span>
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
				  
				
				  
                  <form name="f2" method="POST" action="pages/rempbase.php" id="reg_form">
				  
                  <div id="signup" class="tab-pane fade">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #f0ad4e;"> <Strong> Register </Strong></h2> <hr />
                                	 <!-- nom  pages/rempbase.php-->
									 
								<div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-user"></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" >
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
                                             <input type="text" class="form-control" placeholder="Prenom" name="prenom"  >
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
                                                <span class="glyphicon glyphicon-subtitles"></span>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Cin" name="cin"  >
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
                                             <input type="email" class="form-control" placeholder=" E-Mail" name="email"  >
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
                                             <input type="password" class="form-control" placeholder=" Password" name="pwd" >
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
   <!-- PrefixFree -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nom: {
                validators: {
                        stringLength: {
                        min: 2,
						message: 'Entrer votre nom',
                    },
                        notEmpty: {
                        message: 'Veuillez fournir une  nom valide'
                    }
                }
            },
             prenom: {
                validators: {
                     stringLength: {
                        min: 2,
						message: 'Entrer votre prenom',
                    },
                    notEmpty: {
                        message: 'Veuillez fournir une  prenom valide'
                    }
                }
            },
			   cin: {
                validators: {
                     stringLength: {
                        min: 8,
						max: 8,
						 message: 'Veuillez fournir une  CIN valide',
                    },
                    notEmpty: {
                        message: 'Entrer votre CIN'
                    }
                }
            },
	         email: {
                validators: {
                    notEmpty: {
                        message: 'Veuillez fournir votre adresse e-mail',
                    },
                    emailAddress: {
                        message: 'Veuillez fournir une adresse e-mail valide'
                    }
                }
            },		
	        pwd: {
                validators: {
                     stringLength: {
                        min: 4,
						message: 'Entrer votre password',
                    },
                    notEmpty: {
                        message: 'Veuillez fournir une password valide'
                    }
                }
            },
            }
        })
		
 	
			 .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();
 
            // Prevent form submission
            e.preventDefault();
 
            // Get the form instance
            var $form = $(e.target);
 
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
 
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
               console.log(result);
            }, 'json');
		
			
			
        });
});
 
 
 
 </script>

</body>
</html>
