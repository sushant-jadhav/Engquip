<?php
$connect = mysqli_connect('localhost','root',''); 
if (!$connect) { 
die('Could not connect to MySQL: ' . mysqli_error());
 }
 mysqli_select_db($connect,'classifiedads');
 $base_url='http://www.youwebsite.com/';
?>