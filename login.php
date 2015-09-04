<?php
session_start();
// username and password sent from Form


if(isset($_POST['submit'])){
	$dbcon=mysqli_connect("localhost","root","");
$res = mysqli_select_db($dbcon,"classifiedads");
$myusername=mysqli_real_escape_string($_POST['email']); 
$mypassword=mysqli_real_escape_string($_POST['password']); 

$sql="SELECT * FROM users WHERE uEmail='$myusername' and uPassword='$mypassword'";
$result=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);
//echo $count;
if($count==1){
	$_SESSION['user'] = $row['uFirstname'];
	$_SESSION['uid'] = $row['uId'];

	echo header("location:account_ad_create.php");
}
else
{
	$error= "Please Enter valid creditentials";
	echo $error;
}
if(isset($formData['remember_me'])){ // if user check the remember me checkbox
        $twoDays = 60 * 60 * 24 * 2 + time();
        setcookie('username', $formData['email'], $twoDays);
        setcookie('password', $formData['password'], $twoDays);
    } else { // if user not check the remember me checkbox
        $twoDaysBack = time() - 60 * 60 * 24 * 2;
        setcookie('username', '', $twoDaysBack);
        setcookie('password', '', $twoDaysBack);
    }

}
 if(isset($_POST['sub'])){
	$dbcon=mysqli_connect("localhost","root","");
$res = mysqli_select_db($dbcon,"classifiedads");
$myusername=$_POST['email']; 
$mypassword=$_POST['password']; 

$sql="SELECT * FROM users WHERE uEmail='$myusername' and uPassword='$mypassword'";
$result=mysqli_query($dbcon,$sql);
$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);
//echo $count;
if($count==1){
	$_SESSION['user'] = $row['uFirstname'];
	$_SESSION['uid'] = $row['uId'];

	echo header("location:account_dashboard.php");
}
else
{
	$error= "Please Enter valid creditentials";
	echo $error;
}
if(isset($formData['remember_me'])){ // if user check the remember me checkbox
        $twoDays = 60 * 60 * 24 * 2 + time();
        setcookie('username', $formData['email'], $twoDays);
        setcookie('password', $formData['password'], $twoDays);
    } else { // if user not check the remember me checkbox
        $twoDaysBack = time() - 60 * 60 * 24 * 2;
        setcookie('username', '', $twoDaysBack);
        setcookie('password', '', $twoDaysBack);
    }
}

?>