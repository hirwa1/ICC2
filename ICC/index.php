
<?php session_start();
require_once('dbcon.php');


//Code for Registration 
if(isset($_POST['sub']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $tel=$_POST['tel'];
   $id=$_POST['id'];
  $province="Kigali";
  $district="Kicukiro";
  $sector="Kagarama";
  
$sql=mysqli_query($con,"select idno from user1 where idno='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert(' id already exist with another account. Please try with other  id');</script>";
} else{
 
  $msg=mysqli_query($con,"insert into user1(uid,fname,lname,email,idno,passwords,province,district,sector,tel)
   values(NULL,'$fname','$lname','$email','$id','$password','$province','$district','$sector','$tel')");

if($msg)
{
  echo "<script>alert('Register successfully');</script>";
}
}
}


// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['pwd'];

$tel=$_POST['tel'];
$ret= mysqli_query($con,"SELECT * FROM user1 WHERE tel='$tel' and passwords='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['tel'];
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
$extra="index.php";
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
  <a href="#home" >Home</a>
  <a href="javascript:void(0);" id="myBtn">Register</a>
  <a href="javascript:void(0);" id="myBtn2">Login</a>
  <a href="logins.php" >Admin Login</a>
  <a href="#about">About Us</a>
  <a href="">Contact Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Sign in now..</button><br><br>
  <p><i>Feel free to sumbmit your Problem , We are here to serve you .<br>

    You can register if you have no Account or if you Alread ahve it login </i><a href="#" class="ll">Here</a></p>
</div>

<script>

</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Register here</p>
    <form action="index.php" method="POST">
      <input type="text" name="fname" placeholder="First name ">
      <input type="text" name="lname" placeholder="Last name ">
      <input type="text" name="id" placeholder="ID card no">
      <input type="text" name="tel" placeholder="Phone number ">
      <input type="text" name="email" placeholder="exapmle@domain.com ">
      
      <input type="password" name="pwd" placeholder="************** ">
      <select name="province" >
        <option>kigali city</option>
      </select>
      <select name="district" >
        <option>kicukiro</option>
      </select>
      <select name="sector" >
        <option>kicukiro</option>
        <option>kagarama</option>
        <option>Gatenga</option>
        <option>Niboye</option>
      </select>
<input type="submit" name="sub" value="Register">

    </form>
  </div>

</div>


<!-- m-dal login -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="close2">&times;</span>
    <p>Login here</p>
    <form action="index.php" method="POST">
      <input type="text" name="tel" placeholder="Tel">
      <input type="password" name="pwd" placeholder="************** ">
      
     
<input type="submit" name="login" value="Log in">

    </form>
  </div>

</div>








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
