<!DOCTYPE html>
<html>
<title>DELL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 body {
            background-image:url("logo.jpg");
			 background-repeat: no-repeat;
            background-size:cover;  
        }    

.naviclass{
    color: #fff!important;
    background-color: #0076fa;
}
.w3-teal, .w3-hover-teal:hover {
    color: #fff!important;
    background-color: #0076fa!important;
}
</style>
<body>

	<!-- Navbar -->
	<div class="w3-top">
	  <div class="w3-bar naviclass w3-card">
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('LoginModal').style.display='block'"><i class="fa fa-user"> LOGIN</i></a>
		  </div>
	</div>


  <!-- Login Modal -->
  <div id="LoginModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('LoginModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>LOGIN PORTAL</h2>
      </header>
      <form action="login.php" method="POST">
      <div class="w3-container">    
        <p><label><i class="fa fa-google"></i>Username</label></p>
        <input class="w3-input w3-border" type="text" name="user" placeholder="Enter username">
        <p><label><i class="fa fa-user"></i> PASSWORD</label></p>
        <input class="w3-input w3-border" type="password" name="pass" placeholder="password">
        <button class="button w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" type="submit" name="submit">CONFIRM<i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('LoginModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
	  </form>
	    </div>
  </div>
<?php  
if(isset($_POST["submit"])){
    
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die((mysqli_error($con)));  
    mysqli_select_db($con,'dell') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {
	session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: front.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
<!-- End Page Content -->
</div>

<script>	

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
