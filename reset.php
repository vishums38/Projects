<?php
	 define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 $db2=mysqli_select_db($db,DB_DATABASE);
    $db1="user";
$username = $_POST['username'];
$res1=mysqli_query($db,"SELECT `password` FROM `login` WHERE `login`.`username`='$username';");
$row=mysqli_fetch_array($res1);
$oldpassword=$row[0];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        if($newpassword == $confirmnewpassword && $password == $oldpassword)
         {
        $res=mysqli_query($db,"UPDATE `login` SET `password` = '$newpassword' WHERE `login`.`username` = '$username' and `login`.`password`='$password';");
        if($res)
        {
        //echo "Congratulations You have successfully changed your password";
        	echo "<script type='text/javascript'>alert('SUCCESSFULLY CHANGED YOUR Password! THANK-YOU')</script>";
        }
         }
         else if($newpassword != $confirmnewpassword)
        {
           echo "<script type='text/javascript'>alert('password do not match in both password fields !!!!!')</script>";
        }
       else
        {
        	echo "<script type='text/javascript'>alert('ENTER CORRECT EXISTING USERNAME OR PASSWORD')</script>";
       }
      ?>