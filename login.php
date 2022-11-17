<?php
    if (isset($_POST['submit']))
        {     
          
 
     define("DB_SERVER", "localhost");
    define("DB_USERNAME", "id7339349_vishu");
    define("DB_PASSWORD", "9663914215");
    define("DB_DATABASE", "id7339349_greenit");
      $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
             $db2=mysqli_select_db($db,DB_DATABASE);
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    setcookie("user", "$username", time()+3600);
    $_SESSION['login_user']=$username; 
    $query = mysqli_query($db,"SELECT `username` FROM `login` WHERE `login`.`username`='$username' and `password`='$password';");
     if (mysqli_num_rows($query) != 0)
    {
       
     echo "<script language='javascript' type='text/javascript'> location.href='company.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css">
html, body {
    width:100%;
    height:100%;
}
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    /*  background: url(bg.jpg); */
    background-image: linear-gradient(to right top, #1db9ff, #a2a0ff, #fb7ad4, #ff677a, #f48603);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}
.box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #FFF;
    text-align: center;
}

.box .inputBox {
    position: relative;
}
.box .inputBox input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #FFF;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #FFF;
    outline: none;
    background: transparent;
}
.box .inputBox label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #FFF;
    pointer-events: none;
    transition: .5s;
    animation: LabelOnLoad 1s forwards 0s ease;
}
@keyframes LabelOnLoad{
    0%{
        transform: rotate(0) translateY(-19px);
        opacity: 0;
        }
    100%{
        transform: rotate(0) translateY(0);
        opacity: 1;
        }
}
.box .inputBox input:focus ~ label, 
.box .inputBox input:valid ~ label {
    top: -19px;
    left:0;
    color: #03A9F4;
    font-size: 12px;
}
.box input[type='submit'] {
    background: transparent;
    border: none;
    outline: none;
    color: #FFF;
    background: #03A9F4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 14px;
}
.box input[type='submit']:hover {
    background-color: rgba(3, 169, 244, 0.7);
}
.box input[type='reset'] {
    background: transparent;
    border: none;
    outline: none;
    color: #FFF;
    background: #03A9F4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 14px;
}
.box input[type='submit']:hover {
    background-color: rgba(3, 169, 244, 0.7);
@media(max-width: 720px){
    .box {
        width: 80%;
    }
}
</style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form action="" method="POST">
            <img src="images/login.jpg" height="45" width="45">
            <div class="inputBox">
                <input type="text" name="username" required="">
                <label for="">Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="">
                                <label for="">password</label>
                            
            </div>
            <input type="submit" name="submit" value="Submit">
 <input name="reset" type="reset" value="reset">
        </form>
    </div>
</body>
</html>
</body>
</html>