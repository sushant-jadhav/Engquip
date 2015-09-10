<?php
	//echo $value= $_COOKIE['ID'];
	 if(!isset($_COOKIE['uniqueID'])){
   //setcookie("name", $value, time()+3600, "/","", 0);
   setcookie("uniqueID", uniqid(), time()+3600, "/", "",  0);}
?>
<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         if( isset($_COOKIE["uniqueID"]))
            echo "Welcome " . $_COOKIE["uniqueID"] . "<br />";
         if( isset($_COOKIE["age"]))
            echo "Welcome " . $_COOKIE["age"] . "<br />";
         else
            echo "Sorry... Not recognized" . "<br />";
      ?>
      
   </body>
</html>