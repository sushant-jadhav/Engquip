<?php 
session_start();
if(!isset($_SESSION['uid'])){
    if(!isset($_COOKIE['uniqueID'])){
       //setcookie("name", $value, time()+3600, "/","", 0);
       setcookie("uniqueID", uniqid(), time()+3600, "/", "",  0);}
       if(isset($_COOKIE['uniqueID'])){$cid=$_COOKIE['uniqueID'];}
       else{
        $cid=openssl_random_pseudo_bytes(16);
        $cid=bin2hex($cid);
       }
}
elseif(isset($_SESSION['uid'])){
    $uid=$_SESSION['uid'];
    $username=$_SESSION['user'];
    }
?>
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
        <link href="css/my.css" rel="stylesheet">
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
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>  engquip</strong><span class="handwriting"></span><br />
                            <small >A classified ads for engg. students </small></span>
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
                            <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> |  ";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?>
                            <!-- <a href="#" class="">Wishlist <span class="badge">0</span></a> | -->
                                <!-- <a href="account_dashboard.php"><?php if(!isset($uid)){echo "My Account"; }else{echo "Welcome,",$username;}?></a> -->
                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>My Account</a> ";}
                            else {echo "<a href='account_dashboard.php'>Welcome, $username</a>  ";} ?>
                                <!-- <a href="account_ad_create.php" class="btn btn-warning post-ad-btn">Post an ad</a> -->
                                <?php if(!isset($uid)){echo "<a href='post_ad.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}
                                else{echo "<a href='account_ad_create.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}?>

                            </div>  
                        </div>
                    </div>
                </div>
                </div>
            </nav>

    <div class="jumbotron home-search" style="">
    <div class="container">
        <div class="row">
        <?php if(isset($_GET['search'])){ $srch= $_GET['search'];}else{$srch=null;}?>
        <?php if(isset($_GET['category'])){$cat=$_GET['category'];}else{$cat=null;}?>
        <form method="GET" action="search.php?search=<?php echo $srch;?>&category=<?php echo $cat;?>">
            <div class="col-sm-12">
                <br />
                <p class="main_description">Search thousands of Enginnering books, accessories, tools and other classifieds all in one place<?php if(isset($_COOKIE['uniqueID'])){ $cid=$_COOKIE['uniqueID'];}?></p>

                <br /><br />
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="text-align: center">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon input-group-addon-text">Find me a</span>

                                    <input type="text" class="form-control col-sm-3" name="search" placeholder="e.g. c by balaguruswami, GRE books" required/>
                                    <div class=" input-group-addon hidden-xs">
                                        <div class="btn-group" >
                                            <select class="btn dropdown-toggle" name="category">
                                                <option value="All">Choose Category</option>
                                                <option value="Books">Books</option>
                                                <option value="Tools">Tools</option>
                                                <option value="Electronics & Computer">Electronics & Computer</option>
                                                <option value="Services">Services</option>
                                                <option value="Jobs">Jobs</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">
                        <a ><button type="submit" class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button></a>
                    </div>
                </div>
                <br />
                <br />
            </div><?php //}?></form>
        </div>
    </div>
</div>
            <?php 
                    $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $dbcon = mysql_connect($dbhost,$dbuser,$dbpass);
                    mysql_select_db('classifiedads',$dbcon);
                    $sql_op="SELECT * FROM ads";
                    //$result_op=mysqli_query($dbcon,$sql_op);

                    ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="row directory">
                <div class="col-sm-12 ">
                    <h2><span>Classified Category</span></h2>
                </div>
            </div>

            <div class="row directory">
                <div class="col-xs-12">
                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Books</h4>
                                <p><a href="listings.php?opId=<?php echo 1; ?>" >computer Science</a>, <a href="listings.php?opId=<?php echo 2; ?>" >Information Technology</a>, <a href="listings.php?opId=<?php echo 3; ?>" >Mechanical</a>, <a href="listings.php?opId=<?php echo 7; ?>">Civil</a>, <a href="listings.php?opId=<?php echo 8; ?>" >Production</a>, <a href="listings.php?opId=<?php echo 4; ?>" >Electronic</a>, <a href="listings.php?opId=<?php echo 6; ?>" >Electrical</a>, <a href="listings.php?opId=<?php echo 5; ?>" >Extc.</a>, <a href="listings.php?opId=<?php echo 20; ?>" >Placement Books</a>, <a href="listings.php?opId=<?php echo 21; ?>" >GRE & other Books</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Tools</h4>
                                <p><a href="listings.php?opId=<?php echo 9; ?>" >Workshoop Tools</a>, <a href="listings.php?opId=<?php echo 10; ?>" >Drafters</a>, <a href="listings.php?opId=<?php echo 11; ?>">Other tools</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Electronics & Computer</h4>
                                <p><a href="listings.php?opId=<?php echo 12; ?>" >Computer & Accessories</a>, <a href="listings.php?opId=<?php echo 13; ?>" >Camera & Accessories</a>, <a href="listings.php?opId=<?php echo 14; ?>" >Other Accessories</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Services</h4>
                                <p><a href="listings.php?opId=<?php echo 15; ?>" >Education & Classes</a>, <a href="listings.php?opId=<?php echo 16; ?>" >Web Development</a>, <a href="listings.php?opId=<?php echo 17; ?>" >Electronics & Computer Repair</a>, <a href="listings.php?opId=<?php echo 18; ?>">Other Services</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Jobs</h4>
                                <p><a href="listings.php?opId=<?php echo 19; ?>" >Internship</a>, <a href="listings.php?opId=<?php echo 22; ?>" >Other Related Job</a></p>
                            </div>
                        </div>
                    </div>
                   </div>
            </div>
            <div class="row directory">
            <h2><span></span></h2>
            </div>

            <div class="row directory-counties hidden-xs">
                    <strong></strong>

            </div>



        </div>

        <div class="col-xs-12 col-md-4 " >
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-12  col-lg-11 pull-right" >
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>

                    <div class="panel panel-default">
                        <div class="panel-heading">Quick guide</div>

                        <ul class="list-group">
                            <li class="list-group-item"><a href="typography.php">Our tips to stay safe</a></li>
                            <!-- <li class="list-group-item"><a href="typography.php">How to buy guide</a></li> -->
                            <li class="list-group-item"><a href="typography.php">How to sell guide</a></li>
                            <li class="list-group-item"><a href="typography.php">Help and contact us</a></li>
                            <li class="list-group-item"><a href="typography.php">Frequently asked questions</a></li>
                        </ul>



                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-12  col-lg-11 pull-right" >


                    <div class="panel panel-default">


                        <div class="panel-body" style="height: 102px; display: block;">

                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="265" data-layout="standard" data-action="like" data-show-faces="false" data-share="false" style="display: block; height: 30px;"></div>
                            <br />
                            <!-- Place this tag where you want the +1 button to render. -->
                            <div class="g-plusone" data-annotation="inline" data-width="300" style="display: block; height: 30px;"></div>

                            <!-- Place this tag after the last +1 button tag. -->
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div class="panel-footer">
                            <a href="https://twitter.com/twitterapi" class="twitter-follow-button" data-dnt="true">Follow @twitterapi</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
                    <?php 
                    include("config.php");
                    $query_count="SELECT count(adId) as count, adCity From ads where adCity='mumbai'";
                    $result_count=mysqli_query($connect,$query_count);
                    $count=mysqli_fetch_array($result_count);
                    $countads=$count['count'];
                    $city=$count['adCity'];
                    ?>
                    <p class="main_slogan" style="margin: 28px 0">Currently listing <?php echo $countads;?> classified ads in the Mumbai.</p>
                     <?php ?>
                </div>



                <div class="col-xs-12 col-sm-4 col-md-12  col-lg-11 pull-right" >

                </div>
            </div>

        </div>
    </div>              

</div><!-- /.container --><!-- Modal -->
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
<!-- POST ads -->
<div class="modal fade" id="modalpost" tabindex="-1" role="dialog" aria-labelledby="modalpost" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please sign in for post ads.</p>

                <form method="POST" action="login.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
                    </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" <?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1" /> <label for="remember_me"> Remember Me </label>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Login</button>
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

<!-- End post ads -->
<?php 
if(isset($_POST['femail'])){
    include("config.php");
    $femail=mysqli_real_escape_string($connect,$_POST['femail']);
    if (!filter_var($femail, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        $message =  "Invalid email address please type a valid email!!";
    }
     else
    {
        include("config.php");
        $query = "SELECT uId FROM users where uEmail='".$femail."'";
        $result = mysqli_query($connect,$query);
        $Results = mysqli_fetch_array($result);
 
        if(count($Results)>=1)
        {
            $encrypt = md5(1290*3+$Results['uId']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'info@engquip.com';
            $body='Hi, <br/> <br/>Your Membership ID is '.$Results['uId'].' <br><br>Click here to reset your password http://demo.phpgang.com/login-signup-in-php/reset.php?encrypt='.$encrypt.'&action=reset   <br/> <br/>--<br>PHPGang.com<br>Solve your problems.';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            mail($to,$subject,$body,$headers);
            // echo"<script>window.open('index.php','_self')</script>";
        }
        else
        {
            $message = "Account not found please signup now!!";
            // echo"<script>window.open('register.php','_self')</script>";
        }
    }
}
?>

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

                <form role="form" method="post">
                    <div class="form-group">
                        <input type="email" name="femail" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <button type="submit" class="btn btn-primary pull-right fbtn">Continue</a>
                        </div>
                    </div>
                </form>
                <div id="showit"><?php if(isset($message)){echo $message;}?></div>
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
<script src="js/filter.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#showit").hide();
        $(".fbtn").click(function(){
            $("#showit").show();
        });
    });
</script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
<script src="js/global.js"></script>
</body>
</html>