<?php
    if(isset($_POST['send']))
     {
     
	
$GID=$_POST['gid'];
//$username=$_POST['user'];
//$password=$_POST['pwd'];
$company=$_POST['cname'];
$otp=mt_rand(10000,99999);
setcookie("otp", "$otp", time()+3600);
setcookie("cname", "$company", time()+3600);
//setcookie("uname", "$username", time()+3600);
//setcookie("pwd", "$password", time()+3600);
setcookie("gid", "$GID", time()+3600);
     define("DB", "localhost");
    define("DB_USER1", "id7339349_vishu");
    define("DB_PASS1", "9663914215");
    define("DB_DATA1", "id7339349_greenit");
      $db = mysqli_connect(DB, DB_USER1, DB_PASS1, DB_DATA1);
             $db2=mysqli_select_db($db,DB_DATA1);
     $res1=mysqli_query($db,"SELECT `mob_no` FROM `company` WHERE `company`.`GREEN_ID`='$GID';");
     $row1=mysqli_fetch_array($res1);
     $mob=$row1['0'];
	
 // Account details
	$apiKey = urlencode('Tkvl7eYYOm8-pxer5URVe1Er6SDbmNex0U5GQO4c7L');
	//CFEMd0n6Rks-Dw9Mi2Vjw8CawdrOULCreWmwpGzXhQ [fully new API]
	// UNUOarCn8Yk-8AkW3ultGzuCSbtySkFPLxD6XIosCb [new API]
	
	// Message details
	$numbers = array($mob);
	$sender = urlencode('TXTLCL');
	
	$message = "THANK YOU FOR REGISTERING WITH US $company  GREEN-IT MANAGEMENT ! OTP to Register OTP : $otp ";
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
	//echo "</br>OTP sent to registered mobile no";
	echo "<script type='text/javascript'>alert('One Time Password sent to your Registered Mobile Number!')</script>";
}


 if(isset($_POST['verify']))
		   {
		   
		   	$otp1=$_POST['otp'];
		   	$ot=$_COOKIE['otp'];
		   		$GID=$_COOKIE['gid'];
		   			$username=$_COOKIE['uname'];
		   				$password=$_COOKIE['pwd'];
		   				  $company=$_COOKIE['cname'];
		 if($_COOKIE['otp'] == $otp1)
		 {

     define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
             $db2=mysqli_select_db($db,DB_DATABASE);
                $res=mysqli_query($db,"SELECT `approved` FROM `company` WHERE `company`.`GREEN_ID`='$GID' AND `company`.`approved`='yes';");
                       if($res)
                        {
                            $txt="GREEN-ID : $GID is approved to the $company Oraganization ";
 	                        
require('./fpdf.php');
 $pdf=new FPDF();
 $pdf->AddPage();
$pdf->SetFont('Times','',12);
	$pdf->Cell(40,10,$txt);
 $pdf->Output();


                          }
                          else
                          {
                             	echo "<script type='text/javascript'>alert('Sorry your GREEN-ID is not Approved Due to increased threshold levels of Chemicals')</script>";
                          }
		 }
                          
		 		 else
		 {
		 	//echo "please enter correct OTP";
		 	echo "<script type='text/javascript'>alert('please enter correct OTP')</script>";
		 }
		   }
	

//echo "<script type='text/javascript'>alert('One Time Password sent to your Registered Mobile Number!')</script>";
?>
<html>
    <head>
        <title>E-Certificate</title>
        <style type="text/css">
           body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
pre, form, fieldset, input, textarea, p, blockquote, th, td { 
  padding:0;
  margin:0;}

fieldset, img {border:0}

ol, ul, li {list-style:none}

:focus {outline:none}

body,
input,
textarea,
select {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  color: #191970;
}

p {
  font-size: 12px;
  width: 150px;
  display: inline-block;
  margin-left: 18px;
}
h1 {
  font-size: 32px;
  font-weight: 300;
  color: #4c4c4c;
  text-align: center;
  padding-top: 10px;
  margin-bottom: 10px;
}

html{
  background-color: Hotpink;
}

.testbox {
  margin: 20px auto;
  width: 348px; 
  height: 600px; 
  -webkit-border-radius: 8px/7px; 
  -moz-border-radius: 8px/7px; 
  border-radius: 8px/7px; 
  background-color: #ebebeb; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
  border: solid 1px #cbc9c9;
}

input[type=radio] {
  visibility: hidden;
}

form{
  margin: 0 30px;
}

label.radio {
	cursor: pointer;
  text-indent: 35px;
  overflow: visible;
  display: inline-block;
  position: relative;
  margin-bottom: 15px;
}

label.radio:before {
  background: #3a57af;
  content:'';
  position: absolute;
  top:2px;
  left: 0;
  width: 20px;
  height: 20px;
  border-radius: 100%;
}

label.radio:after {
	opacity: 0;
	content: '';
	position: absolute;
	width: 0.5em;
	height: 0.25em;
	background: transparent;
	top: 7.5px;
	left: 4.5px;
	border: 3px solid #ffffff;
	border-top: none;
	border-right: none;

	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

input[type=radio]:checked + label:after {
	opacity: 1;
}

hr{
  color: #a9a9a9;
  opacity: 0.3;
}

input[type=text],input[type=password]{
  width: 200px; 
  height: 39px; 
  -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
  border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
  background-color: #fff; 
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 1px #cbc9c9;
  margin-left: -5px;
  margin-top: 13px; 
  padding-left: 10px;
}

input[type=password]{
  margin-bottom: 25px;
}

#icon {
  display: inline-block;
  width: 30px;
  background-color: #3a57af;
  padding: 8px 0px 8px 15px;
  margin-left: 15px;
  -webkit-border-radius: 4px 0px 0px 4px; 
  -moz-border-radius: 4px 0px 0px 4px; 
  border-radius: 4px 0px 0px 4px;
  color: white;
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
  border: solid 0px #cbc9c9;
}

.gender {
  margin-left: 30px;
  margin-bottom: 30px;
}

.accounttype{
  margin-left: 8px;
  margin-top: 20px;
}

a.button {
  font-size: 14px;
  font-weight: 600;
  color: white;
  padding: 6px 25px 0px 20px;
  margin: 10px 8px 20px 0px;
  display: inline-block;
  float: right;
  text-decoration: none;
  width: 50px; height: 27px; 
  -webkit-border-radius: 5px; 
  -moz-border-radius: 5px; 
  border-radius: 5px; 
  background-color: #3a57af; 
  -webkit-box-shadow: 0 3px rgba(58,87,175,.75); 
  -moz-box-shadow: 0 3px rgba(58,87,175,.75); 
  box-shadow: 0 3px rgba(58,87,175,.75);
  transition: all 0.1s linear 0s; 
  top: 0px;
  position: relative;
}

a.button:hover {
  top: 3px;
  background-color:#2e458b;
  -webkit-box-shadow: none; 
  -moz-box-shadow: none; 
  box-shadow: none;
  
}

        </style>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="testbox">
  <h1>Registration</h1>

  <form action="" method="POST">
      <hr>
 
  <hr>
  //<label id="icon" for="name"><i class="icon-envelope "></i></label>
  //<input type="text" name="user" id="name" placeholder="Username" required/>
  //<label id="icon" for="name"><i class="icon-user"></i></label>
  //<input type="password" name="pwd" id="name" placeholder="Password" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="cname" id="name" placeholder="Company Name" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="gid" id="name" placeholder="Green-ID" required/>
  
  
  
    <button class="btn waves-effect waves-light puls" type="submit"  name="send" value="send OTP" class="registerbtn">SENDOTP</button></br>
  </form>
  <form action="" method="POST">
		<h1>Enter OTP</h1>
		 <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="otp" id="name" placeholder="OTP" required/>
  	<button class="btn waves-effect waves-light puls" type="submit" value="Download" name="verify">DOWNLOAD</button>
  	</br>
  	<a href="https://vmshanagal.000webhostapp.com/login.php">Click Here To LOGIN</a>
  </form>
  
</div>
</body>
</html>