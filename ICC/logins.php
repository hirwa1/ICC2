
<?php session_start();
require_once('dbcon.php');



// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['pwd'];

$uname=$_POST['uname'];
$ret= mysqli_query($con,"SELECT * FROM user2 WHERE username='$uname' and passwords='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard2.php";
$_SESSION['login']=$_POST['uname'];
$_SESSION['id']=$num['uid'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="logins.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  
  <a href="#about">About Us</a>
  <a href="">Contact Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Welcome Admin </button><br><br>
  
  <div style="margin-left: 10%;">
    <form action="logins.php" method="POST">
      <input type="text" name="uname" placeholder="username">
      <input type="password" name="pwd" placeholder="************** ">
      
     
<input type="submit" name="login" value="Log in">

    </form>
  </div> 
  
</div>

<!-- m-dal login -->

  







<footer><center><br>
  
  <ul >
    <li>Our Social Media</li>
    <li class="fa fa-facebook"></li>
    <li class="fa fa-instagram"></li>
    <li class="fa fa-whatsapp"></li>
    <li class="fa fa-youtube"></li>
    <li class="fa fa-twitter"></li>
    <li class="fa fa-linkedin"></li>

  </ul>
  <p> &copy; Electonic Citizen COntribution System 2020</p></center>
  <br>
</footer>
<script type="text/javascript" src="main.js"></script>
</body>


</html>
