<?php
  session_start();
   if ($_SESSION['id']==0) {
  header('location:logout.php');
  } else{
?>

<?php 
require_once('dbcon.php');

//Code for Registration 
if(isset($_POST['sub']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['pwd'];
  $tel=$_POST['tel'];
  $dates=$_POST['dates'];
   $uname=$_POST['uname'];
  $province="Kigali";
  $district="Kicukiro";
  $sector="Kagarama";
   $stat="1";
$sql=mysqli_query($con,"select email from user2 where email='$email'");
$row=mysqli_num_rows($sql);

if($row>0)
{
  echo "<script>alert(' id already exist with another account. Please try with other  id');</script>";
} else{
 
  $msg=mysqli_query($con,"insert into user2(uid,fname,lname,username,email,passwords,province,district,sector,tel,dates,stat)
   values(NULL,'$fname','$lname','$uname','$email','$password','$province','$district','$sector','$tel','$dates','$stat')");

if($msg)
{
  echo "<script>alert('Register successfully');</script>";
}
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
  <a href="javascript:void(0);" id="myBtn">Create User</a>
  <a href="#about">About Us</a>
  <a href="">Contact Us</a>
  <a href="">View user</a>
   <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Welcome</button><br><br>
  
</div>

<script>

</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Create new</p>
    <form method="POST" action="dashboard.php">
      <input type="text" name="fname" placeholder="First name">
       <input type="text" name="lname" placeholder="Last name">
        <input type="text" name="uname" placeholder="Username">
             <input type="text" name="tel" placeholder="Tel">
              <input type="date" value="<?php echo date('Y-m-d') ;?>"  name="dates" readonly>
         <input type="text" name="email" placeholder="E-mail">
          <input type="password" name="pwd" placeholder="*********">
       <select name="province" >
        <option>kigali city</option>
      </select>
      <select name="district" >
        <option>kicukiro</option>
      </select>
      <select name="district" >
        <option>kicukiro</option>
        <option>kagarama</option>
        <option>Gatenga</option>
        <option>Niboye</option>
      </select>
      
<input type="submit" name="sub" value="Send">

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
<?php } ?>
