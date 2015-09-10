<?php  
  
    include("config.php");
    if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
    $fname=trim($_POST['firstname']);
    $user_fname=mysqli_real_escape_string($connect,$fname);//here getting result from the post array after submitting the form.
    $lname=trim($_POST['lastname']);
    $user_lname=mysqli_real_escape_string($connect,$lname);
    $user_pass=mysqli_real_escape_string($connect,trim($_POST['password']));//same
    $user_phone=mysqli_real_escape_string($connect,trim($_POST['phone']));
    $user_email=mysqli_real_escape_string($connect,trim($_POST['email']));//same
    $user_college = mysqli_real_escape_string($connect,trim($_POST['college']));
    // $user_fname=$_POST['firstname'];//here getting result from the post array after submitting the form.
    // $user_lname=$_POST['lastname'];
    // $user_pass=$_POST['password'];//same
    // $user_phone=$_POST['phone'];
    // $user_email=$_POST['email'];//same
    // $user_college = $_POST['college'];
    if($user_fname=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the firstname')</script>";
        exit();//this use if first is not work then other will not show
    }
    if($user_lname=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the lastname')</script>";
        exit();//this use if first is not work then other will not show
    }
    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
        exit();
    }
    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
        exit();
    }
    
        //here query check weather if user already registered so can't register again.
    // $check_email_query="SELECT * from users WHERE uEmail='$user_email'";
    // $run_query=mysqli_query($dbcon,$check_email_query);

    // if(mysqli_num_rows($run_query)>0)
    // {
    //     echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
    //     exit();
    // }
    // $insert_user = "INSERT into users (uFirstname,uLastname,uPassword,uEmail,uCollege,uPhone) VALUE ('$user_fname','$user_lname','$user_pass','$user_email','$user_college','$user_phone')";
    // if(mysqli_query($dbcon,$insert_user))
    // {
    //     echo"<script>window.open('index.php','_self')</script>";
    // }
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
    if(preg_match($regex, $user_email)){
        $user_pass=md5($user_pass);
        $activation=md5($user_email.time());
        $q="SELECT uId FROM users WHERE uEmail='$user_email'";
        $count=mysqli_query($connect,$q);
        if(mysqli_num_rows($count) < 1){
            $insert_user = "INSERT into users(uFirstname,uLastname,uPassword,uEmail,uCollege,uPhone,activation) VALUE ('$user_fname','$user_lname','$user_pass','$user_email','$user_college','$user_phone',$activation)";
            mysqli_query($connect,$insert_user);
            include("email_activation/Send_Mail.php");
            $to=$user_email;
            $subject="Email verification";
            $body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
            Send_Mail($to,$subject,$body);
            $msg= "Registration successful, please activate email.";
            
         echo "<script>window.open('index.php','_self')</script>";
     

         }
         else
{
$msg= 'The email is already taken, please try new.'; 
}
    }
    else
{
$msg = 'The email you have entered is invalid, please try again.'; 
}
}
?>