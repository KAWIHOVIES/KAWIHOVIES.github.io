<!DOCTYPE html>
<html>
  <head>
    <title>KAWIHOVIES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/lib/w3.css">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
    .w3-bar-block .w3-bar-item {padding:20px}
    /* Create a Parallax Effect */
    .bgimg-1{
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            /* First image (Logo. Full height) */
            .bgimg-1 {
                background-image: url('table0.jpg');
                min-height: 100%;
            }

        
            .w3-wide {
                letter-spacing: 10px;
            }

            .w3-hover-opacity {
                cursor: pointer;
            }

            /* Turn off parallax scrolling for tablets and phones */
            @media only screen and (max-device-width: 1600px) {

                .bgimg-1{
                    background-attachment: scroll;
                    min-height: 400px;
                }
            }
    </style>
  </head>
<body>
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="index.html" onclick="w3_close()"
  class="w3-bar-item w3-button">Home</a>
  <a href="story.php" onclick="w3_close()" class="w3-bar-item w3-button">Our Story</a>
  <a href="food.php" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="chef.php" onclick="w3_close()" class="w3-bar-item w3-button">Chef</a>
  <a href="table.php" onclick="w3_close()" class="w3-bar-item w3-button">Table Type</a>
  <a href="travel.php" onclick="w3_close()" class="w3-bar-item w3-button">Nearby Scenery</a>
  <a href="activity.php" onclick="w3_close()" class="w3-bar-item w3-button">Activity</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Book table</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">Log in</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:100%;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16 "><b>KAWIHOVIES</b></div>
  </div>
</div> 
<br><br>
 <!-- First Parallax Image with Logo Text -->
 <div class="bgimg-1 w3-display-container w3-opacity-min" id="table-home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Table Type</span>
        </div>
    </div>
 <!-- About Section -->
 <div class="w3-row-padding" id="table0">
   <h2><b>Inside(Table)</b></h2>
  <div class="w3-container w3-third">
    <img src="t1.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>Party Sea View Table</h3>
      <p>Customers can enjoy the sea view at the Party Sea View Table for family gatherings or friends gatherings</p>
  </div>
  <div class="w3-container w3-third">
    <img src="t2.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>Rectangular Table</h3>
      <p>There are a lot of rectangular tables in this shop, if customers hold birthday parties or other parties, they can book such tables.</p>
  </div>
  <div class="w3-container w3-third">
    <img src="t3.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>Small square table</h3>
      <p>Small square table is more leisurely. Customers who are tired of playing on the beach can enter the restaurant for a drink or snack at any time.</p>
  </div>
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>
<hr id="about">
<div class="w3-row-padding" id="table0">
   <h2><b>Outside</b></h2>
   <div class="w3-container">
    <img src="t4.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <p>If the customers want to hold some beach party, we can move our table on the beach and arrange the party. Juat feel free to contact us!</p>
  </div>
    </div>
</div>
<hr id="about">
  <!-- Footer -->
  <div class="w3-row-padding w3-padding-32">
    <div class="w3-third">
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="p1.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Winnie</span><br>
          <span>Yummy food</span>
        </li>
        <li class="w3-padding-16">
          <img src="p2.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Tui</span><br>
          <span>Nice!!!</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> 
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> 
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span>
      </p>
    </div>
          </div>
  <footer class="w3-center w3-black w3-padding-60 w3-opacity w3-hover-opacity-off">
        <a href="#table-home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- Footer end. -->
    </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

</script>

</body>
</html>
