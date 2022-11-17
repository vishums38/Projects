 <?php
     define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
    $username=$_COOKIE['user'];
      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
             $db2=mysqli_select_db($db,DB_DATABASE);
     $query = mysqli_query($db,"SELECT `GREEN_ID` FROM `company` WHERE `company`.`user`='$username';");
     if (mysqli_num_rows($query) != 0)
    {
          echo "<script type='text/javascript'>alert('YOU ALREADY APPLIED FOR GREEN-ID !!!!! THANK YOU')</script>";
           echo "<script language='javascript' type='text/javascript'> location.href='company.php' </script>"; 
    }
    else
    {
        echo "<script language='javascript' type='text/javascript'> location.href='apply.html' </script>"; 
    }
        ?>
 
 
 
 
 
 
 
 
 
 
