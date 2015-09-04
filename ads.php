<?php
session_start();
$uid=$_SESSION['uid'];
$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"classifiedads");
$title = $_POST['heading'];
$cat = $_POST['category'];
$des = $_POST['description'];
$price = $_POST['price'];
$pincode = $_POST['pincode'];
$status = $_POST['status'];
$city =$_POST['city'];
$region=$_POST['region'];
$country=$_POST['country'];
$key=$_POST['key'];
// image upload
function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
          default: return false;
       }
     }


if (!empty($_FILES["image1"]["name"])) {

    $file_name1=$_FILES["image1"]["name"];
    $temp_name1=$_FILES["image1"]["tmp_name"];
    $imgtype1=$_FILES["image1"]["type"];
    $ext= GetImageExtension($imgtype1);
    $imagename=time().$ext;
    $target_path1 = "image/ads/img1/".$imagename;}
if (!empty($_FILES["image2"]["name"])) {

    $file_name2=$_FILES["image2"]["name"];
    $temp_name2=$_FILES["image2"]["tmp_name"];
    $imgtype2=$_FILES["image2"]["type"];
    $ext= GetImageExtension($imgtype2);
    $imagename=time().$ext;
    $target_path2 = "image/ads/img2/".$imagename;}

 if (!empty($_FILES["image3"]["name"])) {

    $file_name3=$_FILES["image3"]["name"];
    $temp_name3=$_FILES["image3"]["tmp_name"];
    $imgtype3=$_FILES["image3"]["type"];
    $ext= GetImageExtension($imgtype3);
    $imagename=time().$ext;
    $target_path3 = "image/ads/img3/".$imagename;
    }
 if (!empty($_FILES["image4"]["name"])) {

    $file_name4=$_FILES["image4"]["name"];
    $temp_name4=$_FILES["image4"]["tmp_name"];
    $imgtype4=$_FILES["image4"]["type"];
    $ext= GetImageExtension($imgtype4);
    $imagename=time().$ext;
    $target_path4 = "image/ads/img4/".$imagename;
    }

$t1 = move_uploaded_file($temp_name1, $target_path1);
$t2 = move_uploaded_file($temp_name2, $target_path2);
$t3 = move_uploaded_file($temp_name3, $target_path3);
$t4 = move_uploaded_file($temp_name4, $target_path4);


if($t1==True && $t2==True && $t3==True && $t4==True ){
     $query_upload="INSERT into ads (adHeading,adText,adPrice,adPincode,opId,adStatus,adKey,adCountry,adRegion,adCity,uId,adImg1,adImg2,adImg3,adImg4) VALUES
     ('$title','$des','$price','$pincode','$cat','$status','$key','$country','$region','$city','$uid','".$target_path1."','".$target_path2."','".$target_path3."','".$target_path4."')";
    mysqli_query($dbcon,$query_upload) or die("error in $query_upload == ----> ".mysql_error());
    echo"<script>window.open('index.php','_self')</script>";
    }else 
{
   exit("Error While uploading image on the server");
}




//$sql = "INSERT INTO ads (adType, adHeading,adText,adPrice,adPincode,adName,adPhone,adEmail,opId,cId)VALUES
//	('$type','$title','$des','$price','$pincode','$uname','$phone','$email','$option','$cat')";
//$result=mysqli_query($dbcon,$sql);
//if($result)
  //  {
        //echo"<script>window.open('test.php','_self')</script>";
    //}

?>