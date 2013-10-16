<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Login Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-custom.css"/>
        <link rel="stylesheet" href="css/login.css"/>

        <!-- HTML5 Shim, for IE6-IE8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
        <![endif]-->


    </head>
    <body>    

        <!-- Navbar
    ================================================== -->

        <div class="navbar navbar-inverse navbar-fixed-top">
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
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
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
                                                <input type="text" placeholder="User Id" name="fname" id="inputUsername" class="input-large"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword">Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-lock"></i></span>
                                                <input type="Password" placeholder="Password" name="passwd" id="inputPassword" class="input-large" />
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"> Keep me signed in   ¦
                                                <a href="#" class="btn btn-link">Forgot my password</a>
                                            </label>
                                            <button type="submit" class="btn btn-success">Sign In</button>
                                            <button type="button" class="btn">Help</button>
                                        </div>
                                    </div>	
                                    <div class="alert alert-error" style="visibility: hidden;">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Access Denied!</strong> Please provide valid authorization.
                                    </div>
                                </form>	
                            </div>                           
                        </div>
                        <div class="span6">
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
                                                <input type="text" placeholder="E.g. Some Software Pvt. Ltd." id="inputCompanyName" class="input-large" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputFirst">First Name</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="E.g. Ashutosh" id="inputFirst" class="input-large" />
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputLast">Last Name</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="E.g. Zambare" id="inputLast" class="input-large" />
                                            </div>
                                            
                          
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-envelope"></i></span>
                                                <input type="text" placeholder="E.g. jobs@saisoft.co.in" id="inputEmail" class="input-large" />
                                            </div>
                   
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputUser">Username</label>
                                        <div class="controls">            
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-user"></i></span>
                                                <input type="text" placeholder="E.g. ashutoshzambare" id="inputUserId" class="input-large" />
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputUserPassword">Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-briefcase"></i></span>
                                                <input type="password" placeholder="Min. 8 Characters AlphaNums" id="inputUserPassword" class="input-large" />
                                            </div>
                                          
                                        </div>
                                    </div>
                                    
                                     <div class="control-group">
                                        <label class="control-label" for="inputPassword">Confirm Password</label>
                                        <div class="controls">
                                            <div class="input-prepend">
                                                <span class="add-on"><i class="icon-briefcase"></i></span>
                                                <input type="password" placeholder="Type above Password" id="inputconfirmPassword" class="input-large" />
                                            </div>
                                          
                                        </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox"> I agree all your <a href="#">Terms of Services</a>
                                            </label>
                                            <button type="submit" class="btn btn-success">Sign Up</button>
                                            <button type="button" class="btn">Help</button>
                                        </div>
                                    </div>	
                                    <div class="alert alert-info" style="visibility: hidden;">
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-button.js"></script>
        <script type="text/javascript" src="js/application.js"></script>

    </body>
</html>