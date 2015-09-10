<div class="row listing-row" style="margin-top: -10px;">
                <div class="pull-left">
                    <strong>Today, <?php echo date("d");?></strong>
                    <!-- <strong id="se"></strong> -->
                    <?php if(isset($_POST['fcategory'])){ }?>
                </div>
                <div class="pull-right">
                    <span style="">Sort by:&nbsp;&nbsp;&nbsp;</span>   
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Sort from newest to oldest"> Date <i class="fa fa-chevron-up"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Sort from lowest price to highest price"> Price <i class="fa fa-chevron-down"></i></a>
                </div>
            </div>

                <?php if(isset($_POST['fcategory'])){
                    include("config.php");
                    $fc=trim($_POST['fcategory']);
                    $fc=mysqli_real_escape_string($connect,$fc);
                    //$sql="SELECT ads.*,options.* FROM ads inner join options on ads.opId=options.opId where ads.adHeading like '%".$srch."%'  ";
             $e="SELECT ads.*,options.*,category.* FROM ads left join options on ads.opId=options.opId inner join category on options.cId=category.cId where category.cId=$fc order by adId desc limit 5";
             $q = mysqli_query($connect,$e);
             $nothing=mysqli_num_rows($q);
             if($nothing>0){
            //while($row = mysql_fetch_assoc($q)){
                while($ad = mysqli_fetch_object($q)){
            $id = $ad->adId;
            ?>

                <div class="row premium box-shad brdr btm-mrg-20 bgc-fff listing-row" id="ajaxdiv">
                <!-- <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured</span></div></div> -->
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
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details.php?adId=<?php echo $ad->adId;?>&opId=<?php echo $ad->opId;?>">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
            <?php }
            if(mysqli_num_rows($q)>0){?>
            <div id="more<?php echo $id; ?>" class="pmc_loadbox">
            <a href="#" id="<?php echo $id; ?>" class="morecat" style="margin-left:200px">Loading..</a>
            <img src="image/loading.gif" id="loader" style="display:none">
            </div>
            <?php } else { ?>
            <div id="more" class="pmc_loadbox">
            <a href="#" id="" class="morecat">nnj</a>
            </div><?php }}
            if($nothing==0){echo "<br/><br/><center><b>NO result found</b></center>";}} ?>
            <?php
        
            ?>
            <br/>

            <!-- script formore load -->
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
                url: 'search_filter_cat.php?cat=<?php echo $fc;?>',
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