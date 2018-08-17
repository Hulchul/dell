<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:member.html");  
} else {  
?>  
<!DOCTYPE html>
<html>
<title>DELL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.naviclass{
    color: #fff!important;
    background-color: #2020a9;
}
.w3-teal, .w3-hover-teal:hover {
    color: #fff!important;
    background-color: #003096!important;
}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

	<!-- Navbar -->
	<div class="w3-top">
	  <div class="w3-bar naviclass w3-card">
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="document.getElementById('LoginModal').style.display='block'"><i class="fa fa-shopping-cart"> My Orders</i></a>
		<a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">HOME</a>
		<a href="#products" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MOVIES</a>
		<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
		<div class="w3-dropdown-hover w3-hide-small">
		  <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
		  <div class="w3-dropdown-content w3-bar-block w3-card-4">
			<a href="#" class="w3-bar-item w3-button">Extras</a>
			<a href="#" class="w3-bar-item w3-button">Media</a>
		  </div>
		</div>
		<a  href="logout.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-out"></i></a>
	  </div>
	</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="wallpapers/alienware vindicator.jpg" style="width:40%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
      <h3>Alien Vindicator</h3>
      <p><b></b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="wallpapers/ax210 usb stereo.jpg" style="width:40%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
      <h3>AX210 USB Stereo Speaker</h3>
      <p><b></b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="wallpapers/dell 19.5 inch.jpg" style="width:40%">
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
      <h3>Dell 19.5 inch LED</h3>
      <p><b></b></p> 
    </div>
  </div>
</div>
 <!-- movies Section --><!--
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="home">
    <h2 class="w3-wide">ORDER.MY.SHOW</h2>
    <p class="w3-opacity"><i>why wait in queue!!</i></p>
    <p class="w3-justify">ORDER.My.Show is India’s largest entertainment ticketing website. Headquartered in Jaipur, it is the only destination for movie and non-movie options like events, plays and sports. ORDERMyShow aims to present their clients with endless options to purchase tickets for the latest movies, music concerts, plays, stand up comic acts, and major sporting events to name a few. </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>HARSHAL RAJAN </p>
        <img src="" class="w3-round w3-margin-bottom" alt="CREATOR" style="width:60%">
      </div>
    </div>
  </div>-->

  <!-- The Tour Section -->
  <div class="w3-white" id="movie">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PRODUCTS</h2>
      <p class="w3-opacity w3-center"><i>Remember to ORDER your favorite!</i></p><br>

      <!--<ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">6</span></li>
      </ul>-->

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/alienware vindicator.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Alienware Vindicator Backpack</b></p>
            <p class="w3-opacity">Gamer's Edtion</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/ax210 usb stereo.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>AX210 USB Stereo Speaker</b></p>
            <p class="w3-opacity">For smooth listening</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/dell 19.5 inch.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
           <p><b>Dell 19.5 inch LED</b></p>
            <p class="w3-opacity">Professional Screen</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
      </div>
      <br>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/Dell Alienware 17 Laptop.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
           <p><b>Dell Alienware Laptop 17"</b></p>
            <p class="w3-opacity">For Hardcore Gamers</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/wireless set.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>WIRELESS KEYBOARD AND MOUSE</b></p>
            <p class="w3-opacity">Wireless connectivity</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="wallpapers/Dell Vostro 3470.jpg" alt="" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
           <p><b>DELL VOSTRO 3470 Desktop</b></p>
            <p class="w3-opacity">Classic Design</p>
            <p class="w3-opacity"></p>
            <p></p>
            <a href="in.php" class="w3-button naviclass w3-margin-bottom button">ORDER NOW</a>
          </div>
        </div>
      </div>
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
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
  

  <!-- The Contact Section--> 
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i></i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Jaipur , INDIA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps --><!--
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(26.9124, 75.7873);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-faceORDER-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">MUJ</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

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
<?php  
}  
?> 