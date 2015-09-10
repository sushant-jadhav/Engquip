<?php 
session_start();
if(isset($_COOKIE['uniqueID'])){
    $cid=$_COOKIE['uniqueID'];
   }
if(isset($_SESSION['uid'])){
 $uid=$_SESSION['uid'];
 $username=$_SESSION['user'];
  }
 if (isset($_GET['opId'])){
    $opid=mysqli_real_escape_string($_GET['opId']);
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

        <title>Search ENQUIP- A Classifieds Ads for engg. students</title>

        <!-- Bootstrap core CSS -->
        <link id="switch_style" href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/dropzone.css" rel="stylesheet">
        <link href="css/my.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
        <style>
        .panel-heading span {
            margin-top: -5px;
            font-size: 15px;
        }
        /*.row {
            margin-top: 40px;
            padding: 0 10px;
        }*/
        .clickable {
            cursor: pointer;
        }    
        </style>
        
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

                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>Login</a> | ";}
                            else {echo "<a href='logout.php'>logout</a> | ";} ?>
                            <!-- <a href="#" class="">Wishlist <span class="badge">0</span></a> | -->
                                <!-- <a href="register.php">Register</a> | 
                                <a href="listings.php">Listings</a> |  -->
                                <?php if(!isset($uid)){echo "<a data-toggle='modal' data-target='#modalLogin'  href='#'>My Account</a> ";}
                            else {echo "<a href='account_dashboard.php'>Welcome, $username</a>  ";} ?>
                                <?php if(!isset($uid)){echo "<a href='post_ad.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}
                                else{echo "<a href='account_ad_create.php' class='btn btn-primary post-ad-btn'>Post an ad</a>";}?>


                            </div>  
                        </div>
                    </div>
                </div>
                </div>
            </nav>
            <?php
            if(isset($_GET['search'])){$srch=$_GET['search'];  }elseif (isset($_POST['term'])){$srch=$_POST['term'];$_SESSION['val']=$srch;$cat=$_POST['cat'];}
            if(isset($_GET['category'])){$cat=$_GET['category'];}
            ?>
            <div class="jumbotron home-tron-search well ">
                <div class="container">
                    <div class="row">
                        <form method="POST" action="search.php" onsubmit="return searchterm()">
                        <div class="col-sm-12">
                            <div class="home-tron-search-inner">

                                <div class="row">
                                    <div class="col-sm-8 col-xs-9" style="text-align: center">
                                        <div class="row">

                                            <div class="col-sm-12 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon input-group-addon-text hidden-xs">Find me a</span>

                                                    <input type="text" class="form-control col-sm-3"  id="searchbar" name="term" placeholder="<?php if(!isset($_POST['term'])){echo "e.g. BMW, 2 bed flat, sofa";} else { echo "You Search for ",$srch;} ?>" required/>
                                                    <div class=" input-group-addon hidden-xs">
                                                        <div class="btn-group" >
                                                           <select class="btn dropdown-toggle" name="cat">
                                                                <option>Choose Category</option>
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

                                    <div class="col-sm-4 col-xs-3" style="text-align: center">
                                        <div class="row">
                                            <div class="col-sm-11 pull-right">
                                                <a><button type="submit" class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="container">

    <br />
    <div class="row" id="bcrumb">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li><?php if(isset($_COOKIE['uniqueID'])){
     $cid=$_COOKIE['uniqueID'];
   }?>
                <li id="catg"><a href="#"><?php
                                if(isset($_GET['search'])){$srch=$_GET['search'];  }elseif (isset($_POST['term'])){$srch=$_POST['term'];$_SESSION['val']=$srch;$cat=$_POST['cat']; echo $cat; }?></a></li>
               <li id="catf"><a href="#"><?php
                                if(isset($_POST['fcategory'])){echo $fc=$_POST['fcategory'];  }?></a></li>
                
               <!-- <li class="active">Cars</li> -->
                <!-- <li class="active">4,699 results for <strong>"Cars"</strong> in London</li> -->
            </ol>
        </div>
    </div>

<?php ?>

    <div class="row">
    <div class="col-sm-3  hidden-xs">
    <div class="sidebar ">      
    <div class="row ">
    <strong>Filter Here</strong>
    </div>
    <br />
    <div class="row ">
        <div class="col-sm-12 col-sm-offset-0">
        <?php if(isset($_POST['category'])){$val=$_POST['category'];}?>
            <div class="panel panel-default">
                <div class="panel-heading" id="load">Category<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
                <div class="panel-body">
                    <form class="form-inline mini" style="margin-bottom: 0px;" id="catform" method="POST">
                        <fieldset>

                             <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox"  name="category" value="1"></label>
                                </div>
                                <div class="checkbox">
                                  <label id="bs">Books</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="category" value="2"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Tools</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="category" value="3"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Electronics & computer</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="category" value="4"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Services</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="category" value="5"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Jobs</label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>


        </div>
    </div>


    
    <div class="row ">
        <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">Options<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
                <div class="panel-body" style="height: 150px;overflow-y: scroll;">
                <form class="form-inline mini" style="margin-bottom: 0px;" method="POST" id="optionform">
                        <fieldset>

                             <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="1"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Computer Science</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option"  value="2"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Infromation Technology</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value=""></label>
                                </div>
                                <div class="checkbox">
                                  <label>Mechanical</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="4"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Electronics</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="5"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Extc</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="6"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Electrical</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="7"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Civil</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="8"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Production</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="20"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Placement Books</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="21"></label>
                                </div>
                                <div class="checkbox">
                                  <label>GRE Books & Others</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="9"></label>
                                </div>
                                <div class="checkbox">
                                  <label>WorkShoop Tools</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="10"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Drafters</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="12"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Computer & Accessories</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="13"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Camera & Accessories</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="15"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Classes</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="radio" id="checkbox" name="option" value="16"></label>
                                </div>
                                <div class="checkbox">
                                  <label>Repair Stores</label>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
        </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">Types<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span></div>
                <div class="panel-body">
                <form class="form-inline mini" style="margin-bottom: 0px;">
                        <fieldset>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="checkbox" name="New" value=""></label>
                                </div>
                                <div class="checkbox">
                                  <label>New</label>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-3">
                                    <label><input type="checkbox" name="Used" value=""></label>
                                </div>
                                <div class="checkbox">
                                  <label>Used</label>
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
</div>
</div>
        <div class="col-sm-9 pull-left listings" id="main2">
            <div class="row listing-row" style="margin-top: -10px;">
                <div class="pull-left">
                    <strong>Today, <?php echo date("d");?></strong>
                    <?php //if(isset($_POST['fcategory'])){echo $_POST['fcategory'];}?>
                </div>
                <div class="pull-right">
                    <span style="">Sort by:&nbsp;&nbsp;&nbsp;</span>   
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Sort from newest to oldest"> Date <i class="fa fa-chevron-up"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Sort from lowest price to highest price"> Price <i class="fa fa-chevron-down"></i></a>
                </div>
            </div>

                <?php if(isset($srch)){
                    include("config.php");
                    //$sql="SELECT ads.*,options.* FROM ads inner join options on ads.opId=options.opId where ads.adHeading like '%".$srch."%'  ";
             $e="SELECT ads.*,options.*,category.* FROM ads left join options on ads.opId=options.opId inner join category on options.cId=category.cId where  ads.adHeading  like '%{$srch}%' and category.cName='$cat'  order by adId desc limit 8";
             $q = mysqli_query($connect,$e);
             $nothing=mysqli_num_rows($q);
             if($nothing>0){
            //while($row = mysql_fetch_assoc($q)){
                while($ad = mysqli_fetch_object($q)){
            $id = $ad->adId;
            ?>

                <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row" id="ajaxdiv">
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured</span></div></div>
                                <div class="col-sm-2">
                    <a href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>" class="thumbnail " ><img alt="176 * 120" src="<?php echo $ad->adImg1;?>"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>"><?php echo $ad->adHeading;?> <strong>&nbsp;&nbsp;<span> <i class="fa fa-inr"></i><?php echo $ad->adPrice;?></span></strong></a></h3>
                    <p class="muted">Located in <strong><?php echo $ad->adRegion;?>, <?php echo $ad->adCity;?></strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline"><?php echo $ad->opName;?></a></p>
                    <p maxlength="10"><?php echo $ad->adText;?>...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
            <?php }
            if(mysqli_num_rows($q)>0){?>
            <div id="more<?php echo $id; ?>" class="pmc_loadbox">
            <a href="#" id="<?php echo $id; ?>" class="more" style="margin-left:200px">Loading..</a>
            <img src="image/loading.gif" id="loader" style="display:none">
            </div>
            <?php } else { ?>
            <div id="more" class="pmc_loadbox">
            <a href="#" id="" class="more"></a>
            </div><?php }}
            if($nothing==0){echo "<br/><br/><center><b>NO result found</b></center>";}} ?>
            <?php
        
            ?>
            <br/>

        </div>
        <div class="col-sm-9 pull-left listings" id="main">
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
<script src="js/filter.js"></script>
<script type="text/javascript">
$(document).ready(function(){             
    function load()
    {
    var ID = $(".more").attr("id");
    if(ID)
    {
        $("#loader").show();
        $.ajax({
        type: 'POST',
        url: 'search_more.php?search=<?php echo $srch;?>&category=<?php echo $cat;?>',
        data: {id:ID},
        cache: false,
        success: function(html){
            $("#loader").hide();
            $("#more"+ID).before(html);
            $("#more"+ID).remove();
            }
        });
    }
    }
    
    $(window).scroll(function () {
    if ($(window).scrollTop() >= $(document).height() - $(window).height() - 5) {
    load();
    }
});
    });
</script>
<script type="text/javascript">
    jQuery(function ($) {
        $('.panel-heading span.clickable').on("click", function (e) {
            if ($(this).hasClass('panel-collapsed')) {
                // expand the panel
                $(this).parents('.panel').find('.panel-body').slideDown();
                $(this).removeClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
            else {
                // collapse the panel
                $(this).parents('.panel').find('.panel-body').slideUp();
                $(this).addClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            }
        });
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
    function makeRequest(radionButn) {
        // /var fcategory = radionButn.serialize();
        $.ajax({
            url: 'search_category.php',
            type: 'POST',
            datatype: 'html',
            data: {fcategory: radionButn},
            success: function(data) {
                    //alert("Success!");
                        $("catg").hide();
                     $("#main").html(data);
                     $("#catf").show();
                     //$("#bcrumb").hide();
                     $("#main2").hide();
            }, 
            error : function() {
                    alert("Something went wrong!");
            }
        });

    }

    $('#catform input').on('change', function() {
   var radionButn=$('input[name=category]:checked', '#catform').val();
   if(radionButn){
     //console.log(radionButn);
     makeRequest(radionButn);
   }
});
    $('#catform').submit(function(ev){
    ev.preventDefault();
    makeRequest();
});
    });
</script>
<!-- option script -->
<script type="text/javascript">
$(document).ready(function(){
    function makeRequest(optionButn) {
        // /var fcategory = radionButn.serialize();
        $.ajax({
            url: 'search_option.php',
            type: 'POST',
            datatype: 'html',
            data: {fcategory: optionButn},
            success: function(data) {
                    //alert("Success!");
                        $("catg").hide();
                     $("#main").html(data);
                     $("#catf").show();
                     $("#main2").hide();
            }, 
            error : function() {
                    alert("Something went wrong!");
            }
        });

    }

    $('#optionform input').on('change', function() {
   var optionButn=$('input[name=option]:checked', '#optionform').val();
   if(optionButn){
     //console.log(radionButn);
     makeRequest(optionButn);
   }
});
    $('#optionform').submit(function(ev){
    ev.preventDefault();
    makeRequest();
});
    });
</script>

<!-- end -->
<script type="text/javascript">
        $(document).ready(function(){             
            function load()
            {
            var ID = $(".morecat").attr("id");
            if(ID)
            {
                $("#loader").show();
                $.ajax({
                type: 'POST',
                url: 'search_filter_cat.php?option=<?php echo $fc;?>',
                data: {id:ID},
                cache: false,
                success: function(html){
                    $("#loader").hide();
                    $("#more"+ID).before(html);
                    $("#more"+ID).remove();
                    }
                });
            }
            }
            
            $(window).scroll(function () {
            if ($(window).scrollTop() >= $(document).height() - $(window).height() - 5) {
            load();
            }
        });
            });
</script>
<!-- for category -->

<script type="text/javascript">
        $(document).ready(function(){             
            function load()
            {
            var ID = $(".moreoption").attr("id");
            if(ID)
            {
                $("#loader").show();
                $.ajax({
                type: 'POST',
                url: 'search_filter_cat.php?option=<?php echo $fc;?>',
                data: {id:ID},
                cache: false,
                success: function(html){
                    $("#loader").hide();
                    $("#more"+ID).before(html);
                    $("#more"+ID).remove();
                    }
                });
            }
            }
            
            $(window).scroll(function () {
            if ($(window).scrollTop() >= $(document).height() - $(window).height() - 5) {
            load();
            }
        });
            });
</script>
<script type="text/javascript">
    function searchterm(){
        var search=$(#searchbar).val();
        if(search==null){

        }
    }
</script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
<script src="js/global.js"></script>
</body>
</html>