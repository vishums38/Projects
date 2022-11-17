 <?php
  $username=$_COOKIE['user'];
  echo "<table>";
    echo "<tr>";
    
       echo "WEL-COME  ${username} TO GREEN-IT MANAGEMENT ONLINE WEB PORTAL";
 
  
  ?>
<html>
    <title>company-login</title>
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
table
{
  width:50%;
border-collapse:collapse;
border-color:black;
background-color: #ffad60;
}
table, thead,th
{
color:red;
border:1px solid red;
}
table td
{
   text-align:center;
color:blue;
}
</style>
<html>
<head>
<style type="text/css">
.container {
  background:#000;
  width:500px;
  margin: 0 auto;
  padding: 10px 10px 0 10px;
  
  
}

.slideshow_wrapper {
  width:500px;
  height:280px;
  overflow: hidden;
   
}

.slideshow {
  width:1500px;
  height:280px;
  margin: 0 0 0 -1000px;
 position: relative;
  -webkit-animation-name: slide_animation;
  -webkit-animation-duration:10s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-direction:alternate;
   -webkit-animation-play-state: running;
}

.slide {
  
  width:500px;
  height: 270px;
  position:relative;
  float:left;
  overflow:hidden;
  
}

.slideshow img{
  width:500px; height:270px;
}

@-webkit-keyframes slide_animation {
  
  0% {left:0px;}
  10% {left:500px;}
  20% {left:500px;}
  30% {left:500px;}
  40% {left:500px;}
  50% {left:500px;}
  60% {left:500px;}
  70% {left:1000px;}
  80% {left:1000px;}
  90% {left:1000px;}
  100% {left:1000px;}
  
  
}

</style>
</head>
<body>
    <div class="topnav">
  <a href="https://vmshanagal.000webhostapp.com"> | &#127968;Home</a>
  <a href="https://vmshanagal.000webhostapp.com/logout.php">| <img src="/images/power.png" height="20" width="20">Logout</img></a>
  <a href="https://vmshanagal.000webhostapp.com/apply_check.php">| &#xf044 Apply GREEN-ID</a>
   <a href="https://vmshanagal.000webhostapp.com/reset.html">|  &#128104 Reset Password</a>
   <a>| &#128104<?php echo $_COOKIE['user'];?></a>
    <span id="date_time"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
</div>

<div style="padding-left:16px; font-color:green;" >
  <h2>Please Go GREEN</h2>
  <p>Practice IT Process With Green..</p>
</div>

<div class="container">
  <div class="slideshow_wrapper">
    <div class="slideshow">
      <div class="slide_one slide">
<?php
        echo '<img src="/images/green5.jpg"/>';
?>
      </div>
      
      <div class="slide_two slide">  <img class="slide_img" src="/images/green1.jpg" />
      </div>
<?php
       echo '<img src="/images/green1.jpg"/>';
?>        
      </div>
              <div class="slide_three slide">   <img class="slide_img" src="/images/green2.jpg" />
      </div>
<?php
        echo '<img src="/images/green2.jpg"/>';
?>
      </div>
    </div></div></div>
  </body></html>
 