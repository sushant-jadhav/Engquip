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