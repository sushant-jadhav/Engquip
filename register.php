<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>ENQUIP- A Classifieds Ads for engg. students</title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/dropzone.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>engquip </strong><span class="handwriting"></span><br />
                            <small >A Classifieds Ads for engg. students </small></span>
                    </a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right visible-xs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="my_account.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="listings.php">Listings</a></li>
                        <li><a href="account_dashboard.php">My account</a></li>
                        <li><a href="account_ad_create.php">Post an ad</a></li>
                    </ul> 
                    <div class="nav navbar-nav navbar-right hidden-xs">
                        <div class="row">

                            <div class="pull-right">
                                <a data-toggle="modal" data-target="#modalLogin"  href="#">Login</a> |
                                <a href="register.php">Register</a> |
                                <!-- <a href="listings.php">Listings</a> | -->
                                <!-- <a href="account_dashboard.php">My account</a> -->
                                <a href="post_ad.php" class="btn btn-primary post-ad-btn">  Post an ad</a>

                            </div>	
                        </div>
                    </div>
                </div>
                </div>
            </nav>
            <hr class="topbar"/>
            <div class="container">
    <br />
    <div class="row">

        <div class="col-sm-12">
            <h1>Create an account</h1>
            <div><?php if(isset($message)){echo $message;}?></div>
            <hr />
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <form class="form-vertical" action="signup.php" method="POST">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12" >

                                    <div class="well">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full name</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option value="1">Mr</option>
                                                        <option value="2">Mrs</option>
                                                        <option value="3">Miss</option>
                                                        <option value="4">Ms</option>
                                                        <option value="5">Dr</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" placeholder="First name" required>
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" placeholder="Last name" required>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Make sure your password is longer than 6 characters" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact Number</label>
                                            <input type="tel" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Enter Your Contact number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">College</label>
                                            <input type="text" class="form-control" name="college" id="exampleInputPassword1" placeholder="Enter Your College name ">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name='term'> We can contact you with relevant properties, offers and news
                                            </label>
                                            
                                            <?php if(isset($msg)) { ?>
                                            <span class='msg'><?php echo $msg; }?></span>
                                        </div>
                                        <br />
                                        <!-- <a href="account_dashboard.php" class="btn btn-primary">Create account</a> -->
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary">Create Account</button>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12 account-sidebar hidden-sm">

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="image/Crest.png" width="50"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Why us?</h3>
                                    <p>We're one of the most recognisable brands, attracting thousands of buyers every month.<p>
                                    </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="image/Pie-Chart.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Magnet for buyers</h3>
                                    <p>We make sure your listings receive maximum exposure and is presented in an engaging way</p>
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="image/Search.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Focused searches</h3>
                                    <p>Our technology and algorithm matches potential buyers directly to your listings</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="image/Telephone.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Mobile web</h3>
                                    <p>Your listings will always be accessible to everyone, even when they are on the move, via our responsive mobile website</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <br />
                </fieldset>
            </form>

        </div>
    </div>
</div>




</div>
</div><!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please enter your details below.</p>

                <form method="POST" action="login.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
                    </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1" /> <label for="remember_me"> Remember Me </label>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="sub" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer" style="text-align: center">
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.php">Register now</a></p></div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your email to continue</p>

                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <a href="my_account.php" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php include("footer.php");?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/dropzone.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
<script src="js/global.js"></script>
</body>
</html>