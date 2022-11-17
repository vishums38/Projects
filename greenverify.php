<html>
<body>
    <title>admin-verification</title>
<head>
    <script type="text/javascript">
        function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}
    </script>
<style>
body
{
   font-family:sans-serif;
    background-image:linear-gradient(-90deg, #7FFFD4,red,#ffad60);
     
}

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

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
</head>
 <div class="topnav">
  <a href="https://vmshanagal.000webhostapp.com"> | &#127968;Home</a>
  <a href="https://vmshanagal.000webhostapp.com/logout1.php">| <img src="/images/power.png" height="20" width="20">Logout</img></a>
   <a>| &#128104 Admin</a>
    <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
</div>
	<h1>ENTER THE APPROVAL FOR THE VERIFIED COMPANY</h1>
	<form action="" method="POST">
	    <label><b>GREEN_ID :</b></label>
		<input type="text" name="gid">
		 <label><b>YES/NO</b></label> :
		<input type="text" name="app1">
		<input type="submit" name="send" value="UPDATE"></form></body></html>
<?php
     define("DB", "localhost");
    define("DB_USER1", "id7339349_vishu");
    define("DB_PASS1", "9663914215");
    define("DB_DATA1", "id7339349_greenit");
      $db = mysqli_connect(DB, DB_USER1, DB_PASS1, DB_DATA1);
             $db2=mysqli_select_db($db,DB_DATA1);
     $res=mysqli_query($db,"SELECT * FROM `company`");
     echo "<table border='1' align='center'>";
echo "<tr><th>COMPNAY_NAME</th><th>DOCUMENT</th><th>MOB_NO</td><th>ADDRESS</th><th>STATE</th><th>APPROVAL</th><tr>";
while($row=mysqli_fetch_assoc($res))
  {
  	 // echo "<tr><td width=100 height=100>";
       //    echo $row['c_img'] . " <br />";

         //                echo "<img src=\"images/". $row['c_img'] . "\" alt=\"\" /> <br /></td></tr>";
  // $s=$row['c_img'];

   //echo '</br><img src="/images/$s.jpg">';
    echo "<tr><td> {$row['cname']} </td><td width=10>";
    echo "<img src=\"images/". $row['c_img'] . "\" alt=\"\" width=40 /> <br /></td></td><td> {$row['mob_no']} </td><td> {$row['address'] }</td><td> {$row['state'] }</td><td>{$row['approved']}</td></tr>";
           


}
echo "</table></br>";
  define("DB_SER", "localhost");
    define("DB_USER", "id7339349_vishu");
    define("DB_PASS", "9663914215");
    define("DB_DATA", "id7339349_greenit");
      $db = mysqli_connect(DB_SER, DB_USER, DB_PASS, DB_DATA);
             $db2=mysqli_select_db($db,DB_DATA);
     $res1=mysqli_query($db,"SELECT * FROM `usage`");
     echo "<table border='1' align='center'>";
echo "<tr><th>COMPNAY_NAME</th><th>GREEN-ID</th><th>LEAD</td><th>CADMIUM</th><th>MERCURY</th><th>ARSENIC</th><tr>";
while($row=mysqli_fetch_assoc($res1))
  {
  	 // echo "<tr><td width=100 height=100>";
       //    echo $row['c_img'] . " <br />";

         //                echo "<img src=\"images/". $row['c_img'] . "\" alt=\"\" /> <br /></td></tr>";
  // $s=$row['c_img'];

   //echo '</br><img src="/images/$s.jpg">';
    echo "<td width=10>";
    echo "<tr><td> {$row['cname']} </td><td> {$row['GREEN_ID']} </td><td> {$row['lead']} </td><td> {$row['cadmium']} </td><td> {$row['mercury'] }</td><td> {$row['arsenic'] }</td><tr>";
    
           

                         
    

}
echo "</table>";
?>
<?php
if(isset($_POST['send']))
{
	$approval=$_POST['app1'];
	$GID=$_POST['gid'];
     define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
             $db2=mysqli_select_db($db,DB_DATABASE);
             $res2=mysqli_query($db,"SELECT `cname` FROM `company` WHERE `company`.`GREEN_ID`='$GID';");
             $row2=mysqli_fetch_array($res2);
             $company=$row2[0];
 $res1=mysqli_query($db,"UPDATE `company` SET `approved` = '$approval' WHERE `company`.`GREEN_ID` = '$GID';");
 if($res1 && $approval == "yes")
	{
		echo "</br> STATUS UPDATED </br>";
		$result = mysqli_query($db,"SELECT `mob_no` FROM `company` WHERE `company`.`GREEN_ID` = '$GID';");
		$row=mysqli_fetch_array($result);
          $value = $row[0];
		//echo " hello.$value. ";
		// Account details
	$apiKey = urlencode('Tkvl7eYYOm8-pxer5URVe1Er6SDbmNex0U5GQO4c7L');
	//CFEMd0n6Rks-Dw9Mi2Vjw8CawdrOULCreWmwpGzXhQ [fully new api ]
	// UNUOarCn8Yk-8AkW3ultGzuCSbtySkFPLxD6XIosCb [new API]
	
	// Message details
	$numbers = array($value);
	$sender = urlencode('TXTLCL');
	
	$message = "THANK YOU FOR REGISTERING WITH US $company ORGANIZATION, GREEN-IT MANAGEMENT YOUR GID IS GENERATED AND APPROVED GID :GID$GID ";
	// rawurlencode(' THANK YOU FOR REGISTERING WITH US GREEN-IT MANAGEMENT');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	//echo "username and password sent to your registered mobile no $otp";
	//echo $otp;
	echo "</br>MESSAGE SUCCESSFULLY SENT TO THE $company COMPANY, ADMIN";
}
	else
	{
			$apiKey = urlencode('Tkvl7eYYOm8-pxer5URVe1Er6SDbmNex0U5GQO4c7L');
	//CFEMd0n6Rks-Dw9Mi2Vjw8CawdrOULCreWmwpGzXhQ [fully new api ]
	// UNUOarCn8Yk-8AkW3ultGzuCSbtySkFPLxD6XIosCb [new API]
	$value1=8546878753;  //$row[0];
	// Message details
	$numbers = array($value1);
	$sender = urlencode('TXTLCL');
	
	$message = "THANK YOU FOR REGISTERING WITH US $company ORGANIZATION,  GREEN-IT MANAGEMENT YOUR GID IS REJECTED DUE TO IMPROPER USAGE OF CHEMICALS ";
	// rawurlencode(' THANK YOU FOR REGISTERING WITH US GREEN-IT MANAGEMENT');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	//echo "username and password sent to your registered mobile no $otp";
	//echo $otp;
	echo "</br>MESSAGE SUCCESSFULLY SENT TO THE ${company} COMPANY ADMIN";
	}
}
    
?>

<style>
body
{
   font-family:sans-serif;
     background-image:linear-gradient(-90deg, #7FFFD4,pink,#ffad60);
     
}
table
{
	
	left:300px;
  width:50%;
border-collapse:collapse;
border-color:black;
background-image:linear-gradient(-90deg, #ffad60 , pink,#7CFC00,#7FFFD4	);
}
}
table, thead,th
{
color:red;
border:5px solid black;
}
table td
{
   text-align:center;
color:blue;
}
</style>