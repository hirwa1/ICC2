<?php
require_once('dbcon.php');
  session_start();
   if ($_SESSION['id']==0) {
  header('location:logout.php');
  } else{
?>


<?php

if(isset($_POST['submit']))
  {
    
    $respo=$_POST['respo'];
    $redate=$_POST['redate'];
  $pui=$_POST['pid'];

  
    $query=mysqli_query($con, "update  prob SET respo='$respo', redate='$redate'  WHERE pid = $pui");
if($query){
echo "<script>alert('Reply sent ');</script>";
echo "<script>window.location.href='plobs2.php'</script>";
} else {
echo "Error updating record: " . mysqli_error($con);

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
  <a href="">View Submited Problems</a>
  
  <a href="#about">About Us</a>
  <a href="">Contact Us</a>
   <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a><br>
</div>

<div  class="cld">
  <h1>Electonic Citizen Contribution System</h1>
  <button>Welcome</button><br><br>
  <p><i>Solove citizesn problems as fst as posible , You are here for them.<br>

    Make them feel like they are in right hand  as leader. </i></p>
    
      <?php

                        if(isset($_GET['delid']))
                        {
            $rowid=intval($_GET['delid']);
            
            
            
            }
            
                        ?>
            
            <?php
$result = mysqli_query($con,"SELECT * FROM prob WHERE pid='" . $_GET['delid'] . "'");
$row= mysqli_fetch_array($result);

     ?>
     <form method="POST" action="reply.php" style="margin-left: 10%;">
       <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>" readonly="ok">
       <input type="text" name="pid" class="form-control" value="<?php echo $row['pid']; ?>" hidden>
       <input type="text" value="<?php echo date('Y-m-d') ;?>"  name="redate" readonly >
       <input type="text" name="respo" placeholder="Enter response here">
       <input type="submit" name="submit" value="Reply">
     </form>
       
     
</div>

 

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Register here</p>
    <form>
      <input type="text" name="title" placeholder="Enetr yout problem title ">
     <textarea></textarea>
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
<?php  
}
?>
