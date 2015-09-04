<?php session_start();
if(isset($_SESSION['uid'])){
 $uid=$_SESSION['uid'];
 $username=$_SESSION['user'];
  }
 if (isset($_GET['opId'])){
    $opid=$_GET['opId'];
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

        <title>Ads | ENQUIP- A Classifieds Ads for engg. students</title>

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
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand ">
                        <span class="logo"><strong>classified</strong><span class="handwriting">ads</span><br />
                            <small >a minimalist theme built with bootstrap </small></span>
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

                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | <a href='register.php'>Register</a> | ";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?>
                                <!-- <a href="register.php">Register</a> | 
                                <a href="listings.php">Listings</a> |  -->
                                <a href="account_dashboard.php"><?php if(!isset($uid)){echo "My Account"; }else{echo "Welcome,",$username;}?></a>
                                <a href="account_ad_create.php" class="btn btn-default post-ad-btn">Post an ad</a>

                            </div>  
                        </div>
                    </div>
                </div>
                </div>
            </nav>

            <div class="jumbotron home-tron-search well ">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="home-tron-search-inner">

                                <div class="row">

                                    <div class="col-sm-8 col-xs-9" style="text-align: center">
                                        <div class="row">

                                            <div class="col-sm-12 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon input-group-addon-text hidden-xs">Find me a</span>

                                                    <input type="text" class="form-control col-sm-3" placeholder="e.g. BMW, 2 bed flat, sofa ">
                                                    <div class=" input-group-addon hidden-xs">
                                                        <div class="btn-group" >
                                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                                                                All categories <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Books</a></li>
                                                                <li><a href="#">Tools</a></li>
                                                                <li><a href="#">Electronics & Computer</a></li>
                                                                <li><a href="#">Services</a></li>
                                                                <li><a href="#">Jobs</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-xs-3" style="text-align: center">
                                        <div class="row">
                                            <div class="col-sm-11 pull-right">
                                                <button class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<div class="container">


    <br />
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Vehicles</a></li>
                <li class="active">Cars</li>
                <!-- <li class="active">4,699 results for <strong>"Cars"</strong> in London</li> -->
            </ol>
        </div>
    </div>



    <div class="row">
    <div class="col-sm-4  hidden-xs">
            <div class="sidebar ">      
    <div class="row ">

    </div>
    <br />

    <div class="row ">


        <div class="col-sm-11">

            <div class="panel panel-default">
                <div class="panel-heading">Filters</div>
                <div class="panel-body">
                    <form class="form-inline mini" style="margin-bottom: 0px;">
                        <fieldset>              

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Make</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class=" form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Mileage</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Seller type</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Body type</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-12">
                                    <label>Price range</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input type="email" class="form-control price-input" placeholder="min" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
                                        <input type="email" class="form-control price-input" placeholder="max" />
                                    </div>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-12">
                                    <label>Search only:</label>
                                </div>
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option1" checked>
                                            Urgent ads
                                        </label>
                                    </div><br />

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2">
                                            Featured ads
                                        </label>
                                    </div><br />

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2">
                                            Only ads with pictures
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row filter-row">    

                                <div class="col-sm-2 pull-right" style="margin-top: 10px;">
                                    <button class="btn btn-primary pull-right" type="submit">Update results</button>

                                </div>
                            </div>                      


                        </fieldset>
                    </form>
                </div>
            </div>


        </div>
    </div>


    <div class="row ">
        <div class="col-sm-11">
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-11">
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-11">
        </div>
    </div>
</div>        </div>
        <div class="col-sm-8 pull-left listings">
            <div class="row listing-row" style="margin-top: -10px;">
                <div class="pull-left">
                    <strong>Today, <?php echo date("d");?></strong>
                </div>
                <div class="pull-right">
                    <span style="">Sort by:&nbsp;&nbsp;&nbsp;</span>   
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Sort from newest to oldest"> Date <i class="fa fa-chevron-up"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Sort from lowest price to highest price"> Price <i class="fa fa-chevron-down"></i></a>
                </div>
            </div>
            <?php if(isset($opid)){
            $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $dbcon = mysql_connect($dbhost,$dbuser,$dbpass);
                    mysql_select_db('classifiedads',$dbcon);
                    $sql="SELECT ads.*,users.*,options.* FROM ads left join users on ads.uId=users.uId left join options on ads.opId=options.opId where ads.opId=$opid ";
               $result_ads = mysql_query($sql,$dbcon);
                while($ad = mysql_fetch_object($result_ads)){

            ?>

                <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured</span></div></div>
                                <div class="col-sm-2">
                    <a href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>" class="thumbnail " ><img alt="176 * 120" src="<?php echo $ad->adImg1;?>"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>"><?php echo $ad->adHeading;?> <strong>&nbsp;&nbsp;<span> <i class="fa fa-inr"></i><?php echo $ad->adPrice;?></span></strong></a></h3>
                    <p class="muted">Located in <strong><?php echo $ad->adCity;?></strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline"><?php echo $ad->opName;?></a></p>
                    <p><?php echo $ad->adText?></p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details.php">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
            <?php }}else{?>
            <?php
             $dbhost = "localhost";
                    $dbuser = "root";
                    $dbpass = "";
                    $dbcon = mysql_connect($dbhost,$dbuser,$dbpass);
                    mysql_select_db('classifiedads',$dbcon);
              //$sql="select ads.* , options.* from ads
                //      inner join options
                  //    on ads.opId=options.opId
                    //  where ads.opId=$opid";
                    $sql="SELECT ads.*,users.*,options.* FROM ads left join users on ads.uId=users.uId inner join options on ads.opId=options.opId ";
               $result_ads = mysql_query($sql,$dbcon);
                while($ad = mysql_fetch_object($result_ads)){
              

            ?>

                <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured</span></div></div>
                                <div class="col-sm-2">
                    <a href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>" class="thumbnail " ><img alt="176 * 120" src="<?php echo $ad->adImg1;?>"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>"><?php echo $ad->adHeading;?> <strong>&nbsp;&nbsp;<span> <i class="fa fa-inr"></i><?php echo $ad->adPrice;?></span></strong></a></h3>
                    <p class="muted">Located in <strong><?php echo $ad->adCity;?></strong></p>
                    <p class="muted">Posted <?php echo $ad->adDate;?> to <a href="#" class="underline"><?php echo $ad->opName;?></a></p>
                    <p><?php echo $ad->adText;?>...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div><?php }}

            $nothing=mysql_num_rows($result_ads);if($nothing==0){echo "<br/><br/><center><b>NO result found</b></center>";?>
            <?php }?>
            <br/>
            <!--  -->
        



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

                <form method="POST" action="account_dashboard.php" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
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

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-xs-12">
                <p><strong>&copy; Bootstrap Classifieds 2014</strong></p>
                <p>All rights reserved</p>
            </div>          

            <div class="col-sm-8 col-xs-12">
                <p class="footer-links">
                    <a href="index.php" class="active">Home</a>
                    <a href="typography.php">Typography</a>
                    <a href="terms.php">Terms and Conditions</a>
                    <a href="contact.php">Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>


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