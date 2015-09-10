<?php
include 'config.php';
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=mysqli_real_escape_string($connection,$_GET['code']);
$c=mysqli_query($connect,"SELECT uId FROM users WHERE activation='$code'");

if(mysqli_num_rows($c) > 0)
{
$count=mysqli_query($connect,"SELECT uId FROM users WHERE activation='$code' and status='inactive'");

if(mysqli_num_rows($count) == 1)
{
mysqli_query($connection,"UPDATE users SET status='active' WHERE activation='$code'");
$msg="Your account is activated"; 
}
else
{
$msg ="Your account is already active, no need to activate again";
}

}
else
{
$msg ="Wrong activation code.";
}

}
?>
//HTML Part
<?php echo $msg; ?>