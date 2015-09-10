<?php  
  
//include("scripts/connect_to_mysql.php");
$dbcon=mysqli_connect("localhost","root","");
$res = mysqli_select_db($dbcon,"classifiedads");
//make connection here
$fname=trim($_POST['firstname']);
    $user_fname=mysqli_real_escape_string($dbcon,$fname);//here getting result from the post array after submitting the form.
    $lname=trim($_POST['lastname']);
    $user_lname=mysqli_real_escape_string($dbcon,$lname);
    $user_pass=mysqli_real_escape_string($dbcon,trim($_POST['password']));//same
    $user_phone=mysqli_real_escape_string($dbcon,trim($_POST['phone']));
    $user_email=mysqli_real_escape_string($dbcon,trim($_POST['email']));//same
    $user_college = mysqli_real_escape_string($dbcon,trim($_POST['college']));
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
    $check_email_query="SELECT * from users WHERE uEmail='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
        //echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
        $msg= "Email $user_email is already exist in our database, Please try another one";
        //echo"<script>window.open('register.php','_self')</script>";
        //exit();
    }
    $insert_user = "INSERT into users (uFirstname,uLastname,uPassword,uEmail,uCollege,uPhone) VALUE ('$user_fname','$user_lname','$user_pass','$user_email','$user_college','$user_phone')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('index.php','_self')</script>";
    }
?>