<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>GMBTS - Login</title>
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
                            <li class="active"><a href="#">Login</a></li>
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
                        <div class="span6">
                            <div class="area">
                                <form id="login" class="form-horizontal well" style="margin: 100px 0 20px;">
                                    <div class="heading">
                                        <h4 class="form-heading">Sign In</h4>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputUsername">Username</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="Only 8 Alphanums" msg="invalidUserInput" name="username" id="inputUsername" class="input-large"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-lock"></i></span>
                                                <input type="Password" placeholder="Only 8 Alphanums" msg="invalidPasswordInput" name="password" id="inputPassword" class="input-large" />
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"> Keep me signed in   ¦
                                                <a href="forgotPassword.php" class="btn btn-link" id="forgotPasswordLnk">Forgot my password</a>
                                            </label>
                                            <button type="button" class="btn btn-success " id="btn_login">Sign In</button>
                                            <button type="button" class="btn">Help</button>
                                        </div>
                                    </div>	
                                    <div class="alert alert-error visibility" id="loginmsg">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Access Denied!</strong> Please provide valid authorization.
                                    </div>
                                </form>	
                            </div>                           
                        </div>
                        <div class="span6" >
                            <div class="area">
                                <form id="signup" class="form-horizontal well" style="margin: 100px 0 20px;">
                                    <div class="heading">
                                        <h4 class="form-heading">Sign Up</h4>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputCompanyName">Company Name</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-briefcase"></i></span>
                                                <input type="text" placeholder="E.g. Some Software Pvt. Ltd." name="string" id="inputCompanyName" class="input-large" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputFirst">First Name</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="E.g. Ashutosh" name="string" id="inputFirst" class="input-large" />
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputLast">Last Name</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="E.g. Zambare" name="string" id="inputLast" class="input-large" />
                                            </div>
                                            
                          
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-envelope"></i></span>
                                                <input type="text" placeholder="E.g. jobs@saisoft.co.in" name="email" id="inputEmail" class="input-large" />
                                            </div>
                   
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputUser">Username</label>
                                        <div class="controls">            
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="Only 8 Alphanums" name="username" id="inputUserId" class="input-large" />
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputUserPassword">Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-briefcase"></i></span>
                                                <input type="password" msg="Invalid password " placeholder="Only 8 Alphanums" name="password" id="UserPassword" class="input-large" />
                                            </div>
                                          
                                        </div>
                                    </div>
                                    
                                     <div class="control-group">
                                        <label class="control-label" for="inputPassword">Confirm Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-briefcase"></i></span>
                                                <input type="password" placeholder="Type above Password" name="conpass" id="inputconfirmPassword" class="input-large" />
                                            </div>
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"> I agree all your <a href="termsofservice.php" class="btn btn-link" id="termOfService">Terms of Services</a>
                                            </label>
                                            <button type="button" class="btn btn-success" id="btn_signup">Sign Up</button>
                                            <button type="button" class="btn">Help</button>
                                        </div>
                                    </div>	
                                    <div class="alert alert-error visibility"  id="signupmsg">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Confirmation: </strong> A confirmation email has been sent to your email.<br>
                                        Thank you for your registration.
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
		
        <script src="js/pages/login.js"></script>
        <script src="js/pages/signup.js"></script>
        <script src="js/common/app.js"></script>
         

    </body>
</html>