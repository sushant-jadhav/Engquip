<?php

if(isset($_POST['category'])){
    $cat=$_POST['cat'];
include("config.php");
$id = trim($_REQUEST['id']);
$qry="SELECT ads.*,options.*,category.* FROM ads left join options on ads.opId=options.opId inner join category on options.cId=category.cId where  category.cId='$cat' ORDER BY adId asc LIMIT 5";
$sql=mysql_query($qry,$connect);
while($ad = mysql_fetch_object($sql))
{
?>
<div class="col-sm-14 pull-left listings">
  <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">  
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured<?php echo $srch;?></span></div></div>
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
                </div> </div>
<?php } if(mysql_num_rows($sql)==5){?>
<div id="more<?php echo $id;?>" class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
<a href="javascript:void(0)" class="morecat" id="<?php echo $id;?>">Loading..</a>
<img src="loading.gif" id="loader" style="display:none">
</div><br/>
<?php } else {?>
<div id="more<?php echo $id;?>"class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
<a>No record...</a>
</div>
<?php } ?>

<?php

}
if(isset($_POST['option'])){
    $option=$_POST['option'];
include("config.php");
$id = trim($_REQUEST['id']);
$qry="SELECT ads.*,options.*,category.* FROM ads left join options on ads.opId=options.opId inner join category on options.cId=category.cId where options.opId=$option ORDER BY adId asc LIMIT 1";
$sql=mysql_query($qry,$connect);
while($ad = mysql_fetch_object($sql))
{
?>
<div class="col-sm-14 pull-left listings">
  <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">  
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured<?php echo $id;?></span></div></div>
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
                </div> </div>
<?php } if(mysql_num_rows($sql)==5){?>
<div id="more<?php echo $id;?>" class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
<a href="javascript:void(0)" class="moreoption" id="<?php echo $id;?>">Loading..</a>
<img src="loading.gif" id="loader" style="display:none">
</div><br/>
<?php } else {?>
<div id="more<?php echo $id;?>" class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row">
<a>No record...</a>
</div>
<?php } }?>
