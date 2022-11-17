<html>
    <head>
        <style type="text/css">
        .topnav {
  overflow: hidden;
  background-color: blue;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: green;
  color: #ffad62;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
    </head><body>
         <div class="topnav">
  <a href="https://vmshanagal.000webhostapp.com"> | &#127968;Home</a>
  <a href="https://vmshanagal.000webhostapp.com/logout.php">| <img src="/images/power.png" height="20" width="20">Logout</img></a>
   <a href="https://vmshanagal.000webhostapp.com/reset.html">|  &#128104 Reset Password</a>
   <a>| &#128104<?php echo $_COOKIE['user'];?></a>
</div>

<div style="padding-left:16px; font-color:green;" >
  <h2>Please Go GREEN</h2>
  <p>Practice IT Process With Green..</p>
</div>

    </body>
</html>


<?php
if(isset($_POST['submit']))
{
  //company info
$target="images/".basename($_FILES['image']['name']);
$target1="images/".basename($_FILES['img1']['name']);
$cname=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$address=$_POST['address'];
$state=$_POST['state'];
$comid=$_POST['cid'];
$image=$_FILES['image']['name'];
$ceo=$_POST['cname'];
$cmob=$_POST['mob1'];
$cadd=$_POST['cadd'];
$ceoimage=$_FILES['img1']['name'];
$arsenic=$_POST['arsenic'];
$lead=$_POST['lead'];
$mercury=$_POST['mercury'];
$cadmium=$_POST['cad'];
$gid=mt_rand(10000,99999);
$username=$_POST['user'];
    define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
 $db2=mysqli_select_db($db,DB_DATABASE);
if($db)
{
  $res1=mysqli_query($db,"INSERT INTO `company` (`cname`, `email`, `mob_no`, `address`, `state`, `c_img`, `temp_gid`,`GREEN_ID`, `ceo_img`, `approved`,`user`) VALUES ('$cname', '$email', '$mob', '$address', '$state', '$image', '$comid', '$gid', '$ceoimage','no','$username');");
  if($res1)
  {
  	echo "</br>form submitted successfully";
    if(move_uploaded_file($_FILES['img1']['tmp_name'],$target1))
    {
      echo "</br>";
    }
    else
    {
      echo "</br>";
    }
 if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {
      echo "</br>image uploaded";
    
    }
  }
  else
  {
  	echo "</br> errror while uploading";
  }
}
else
{
	echo "not connected";
}
//

define("SERVER", "localhost");
    define("USERNAME", "id7339349_vishu");
    define("PASSWORD", "9663914215");
    define("DATABASE", "id7339349_greenit");
   $dbc = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
 $dbc1=mysqli_select_db($db,DATABASE);
 if($dbc)
{
  $res=mysqli_query($dbc,"INSERT INTO `usage` (`cname`, `GREEN_ID`, `lead`, `cadmium`, `mercury`, `arsenic`) VALUES ('$cname', '$gid', '$lead', '$cadmium', '$mercury', '$arsenic');
");
  if($res)
  {
    echo "</br>";
}
else
{
  echo "</br>";
}
}
//echo '</br><a href="http://vmshanagal.000webhostapp.com/logout.php">logout</a> ';
}
?>
<style type="text/css">
body
{
   font-family:sans-serif;
    background-image:linear-gradient(-90deg, #7FFFD4,Hotpink,#ffad60);
     
}
table {
    margin: 8px;
}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    background: #666;
    color: #FFF;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid #000;
}

td {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    border: 1px solid #DDD;
}
</style>