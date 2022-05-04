<!DOCTYPE html>
<html>
  <head>
    <title>KAWIHOVIES</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="0.png" type="image/x=icon">
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
  </head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="icon.jpg" style="width:45%;" class="w3-round"><br><br>
  </div>
  <div class="w3-bar-block">
    <a href="worker-user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a> 
    <a href="worker-user-customer.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Customer Information</a> 
    <a href="worker-user-chef.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Chef Information</a> 
    <a href="worker-user-table.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Table Information</a> 
    <a href="worker-user-book.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Order Information</a> 
    <a href="worker-user-information.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Personal Information</a>
    <a href="inc/logout.inc.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-close fa-fw w3-margin-right"></i>Log out</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="customer-home">
    <a href="#"><img src="icon.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container w3-bottombar">
    <h1><b>Welcome to KAWIHOVIES</b></h1>
    <div class="w3-section w3-padding-16">
      <button class="w3-button w3-black">Interesting</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Love</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Fun</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Happy</button>
    </div>
    </div>
  </header>
     
<hr id="about">
 <!-- About Section -->
 <div class="w3-container w3-padding-32" id="story">  
    <h2><b>Our Story</b></h2><br>
    <img src="0.png" alt="Me" class="w3-image" style="display:block;margin:auto" width="300" height="300" align="left">
    <div class="w3-padding-32 w3-bottombar">
      <h4><b>We Are KAWIHOVIES!</b></h4>
      <p>KAWIHOVIES is a restaurant run by 5 college students who specialize in coding. After graduation, they realized that opening a restaurant was actually very profitable. The name of the restaurant is the first two letters of the names of 5 people, which means that a group of people should work together to do business well.</p>
    </div>
  <hr>

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-bottombar" id="food">
  <h2><b>Food</b></h2>
  <p><i>The restaurant menu is diverse and can even be customized according to customer requirements.</i></p>
    <div class="w3-third">
      <img src="f0.jpg" alt="food1" style="width:100%">
    </div>
    <div class="w3-third">
      <img src="f1.jpg" alt="food2" style="width:100%">
    </div>
    <div class="w3-third">
      <img src="f2.jpg" alt="food3" style="width:100%">
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-bottombar" id="chef">
  <h2><b>Chef</b></h2>
  <p><i>The restaurant has an elite team of chefs, every two chefs will be responsible for a category of dishes. There are 5 types of dishes in this restaurant, so there are 10 in the chef. Customers can choose their favorite chef to cook for themselves.</i></p>
  <img src="c0.jpg" alt="cook" class="w3-image" style="display:block;margin:auto" width="50%" height="auto" align="left">
          </div>
  
   <!-- Third Photo Grid-->
   <div class="w3-row-padding w3-bottombar w3-bottombar" id="table">
   <h2><b>Table</b></h2>
  <p><i>The restaurant has tables for different numbers of people to choose from. Customers can have a date or party in this restaurant. If customers want a wedding or beach party on the beach, the restaurant can also host it.</i></p>
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
  
  <!-- Forth Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-bottombar" id="travel">
  <h2><b>Nearby scenery</b></h2>
  <p><i>There are many sceneries near the restaurant. Also, this restaurant is connected to several beaches, and visitors can enjoy the hot atmosphere on the beach. </i></p>
  <div class="w3-container w3-third">
    <img src="n1.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>WUUW Beach Side</h3>
      <p>Visitors can enjoy the silence on this sandy beach. Many tourists will take artistic photos, wedding photos and so on here. The famous TV series "The Mermaid" was filmed here.</p>
  </div>
  <div class="w3-container w3-third">
    <img src="n2.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>UQK Lake</h3>
      <p>UQK Lake is one of the few unpolluted lakes in the world. The lake surface of UQK Lake can reflect a variety of blue, which is very spectacular.</p>
  </div>
  <div class="w3-container w3-third">
    <img src="n3.jpg" style="width:100%;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity">
    <h3>Hott Beach</h3>
      <p>Hott Beach is a famous local beach for play. The annual music festival is held in Hott Beach.</p>
  </div>
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>
  <!-- fifth Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-bottombar" id="activity">
  <h2><b>Activity</b></h2>
  <p><i>To welcome travelers from all over the world, the restaurant hosts regular events.</i></p>
  <div class="w3-row-padding w3-center w3-section">
  <div class="w3-third">
      <img src="a1.jpg" alt="a1" style="width:100%">
      <h3>Biyu Music Festival</h3>
      <p>Biyu Music Festival is a major annual event in the local area. Teams that have won awards in the Biyu Music Competition will be invited to perform. At the same time, every year, famous singers from all over the world will be invited to participate. Customers can join the music festival on the beach while drinking.</p>
    </div>
    <div class="w3-third">
      <img src="a2.jpg" alt="a2" style="width:100%">
      <h3>Quin Sand Sculpture Competition</h3>
      <p>The Quin Sand Sculpture Competition is biennial and will invite sand sculptors from all over the world to compete locally. The competition lasts for one month. The winner will be voted by every visitor who comes to view the sand sculpture.</p>
    </div>
    <div class="w3-third">
      <img src="a3.jpg" alt="a3" style="width:100%">
      <h3>Aab Oktoberfest</h3>
      <p>The Aab Oktoberfest is a big local event. On this day, men and women, young and old, will gather at the beach and have a party together. The atmosphere is very lively. If you will also invite local art teams to perform.</p>
          </div>
          </div>
</div>
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
        <a href="#activity-home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjUxNTg3NjEzLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D" class="fa fa-facebook-official w3-hover-opacity"></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity"></a>
            <a href = "https://twitter.com/intent/tweet?url=http%3A%2F%2Fum.edu.mo&text=The%20Investart%20Trading%20System" class="fa fa-twitter w3-hover-opacity"></a>
    <!-- Footer end. -->
    </footer>

<!-- End page content -->
</div>


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
