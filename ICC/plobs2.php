<?php
require_once('dbcon.php');
  session_start();
   if ($_SESSION['id']==0) {
  header('location:logout.php');
  } else{
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
     <table role="table" style="background-color: white; opacity: 0.9; color: #0073bc;  ">
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">N0</th>
      <th role="columnheader">Submit Date</th>
      <th role="columnheader">Respose Date</th>
      <th role="columnheader">Title</th>
      
      
      <th role="columnheader">Action</th>
     
    </tr>
  </thead>
  <tbody role="rowgroup">
    <?php 
    $op = $_SESSION['id'];
    $ret=mysqli_query($con,"select * from prob  ");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>
    <tr role="row">
      <td role="cell"><?php echo $cnt;?></td>
      <td role="cell"><?php echo $row['dates'];?></td>
      <td role="cell">Response</td>
      <td role="cell"><?php echo $row['title'];?></td>
      <td role="cell"><a href="reply.php?delid=<?php echo $row['pid'];?>">Reply</a></td> 
    </tr>
    <?php $cnt=$cnt+1; }?>

  </tbody>
</table>
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
