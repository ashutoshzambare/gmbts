<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>GMBTS - Forgot Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-custom.css"/>
        <link rel="stylesheet" href="css/common.css"/>
        
        <!-- HTML5 Shim, for IE6-IE8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
        <![endif]-->


    </head>
    <body>    

        <!-- Navbar
    ================================================== -->

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"> 

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="#">GMBTS</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Forgot Password</a></li>
                            <!--<li><a href="#">About</a></li>-->
                        </ul>
                        <ul class="nav pull-right">
                            <li>
                                <a >Welcome Guest</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div id="wrap">

            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="span3"></div>
                        <div class="span6">
                            <div class="area">
                                <form id="forgotPassword" class="form-horizontal well" style="margin: 100px 0 20px;">
                                    <div class="heading">
                                        <h4 class="form-heading">Forgot Password?</h4>
                                        <p>That's Ok .Eveyone Forgets.</p>
          
                                    </div>
                                    <div class="alert alert-info " id="forgotPasswordinfo">
                                         <p>Just tell us the email address you used to create your account and we'll send you a new one!</p>
                                        
                                    </div>
                                    
                                    <p></p>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Email</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-envelope"></i></span>
                                                <input type="email" placeholder="E.g jobs@saisoft.co.in" name="passwd" id="inputregemail" class="input-large" />
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                
                                             <button type="button" class="btn btn-success " id="btn_sendPassword">Send</button>
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </div>	
                                    <div class="alert alert-error visibility" id="forgotPasswordmsg">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Access Denied!</strong> Please provide valid authorization.
                                    </div>
                                </form>	
                            </div>                           
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-button.js"></script>
        <script type="text/javascript" src="js/application.js"></script>
        <script type="text/javascript" src="js/common/ErrorMessages.js"></script>
        <script type="text/javascript" src="js/bootbox.min.js"></script>
	<script src="js/pages/forgotPassword.js"></script>	
        <script src="js/pages/login.js"></script>
        <script src="js/pages/signup.js"></script>
        <script src="js/common/app.js"></script>
         

    </body>
</html>
