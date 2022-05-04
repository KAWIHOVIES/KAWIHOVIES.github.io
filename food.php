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
                background-image: url('food0.jpg');
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
 <div class="bgimg-1 w3-display-container w3-opacity-min" id="food-home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Food</span>
        </div>
    </div>
 <!-- About Section -->

    <div class="w3-container w3-padding-32" id="person0">  
    <h2><b>Food Kinds</b></h2><br>
    <div class="w3-row-padding">
    <div class="w3-third w3-container">
      <img src="food-ch.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Chinese Food</b></p>
        <p>Chinese cuisine is an important part of Chinese culture and includes cuisines originating from China. Because of the Chinese diaspora and historical power of the country, Chinese cuisine has influenced many other cuisines in Asia and beyond, with modifications made to cater to local palates.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="food-ko.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Korean Food</b></p>
        <p>Korean cuisine or Korean food, also known as Korean food, Korean food, Korean food, Korean food, refers to the general term for the food culture of the Korean nation, with "five colors, five flavors, and five methods" as the core concept.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="food-ja.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Japanese Food</b></p>
        <p>Japanese cuisine or Japanese cuisine, also known as Japanese food, Japanese food, Japanese food, generally refers to the food culture and habits formed by Japan and the Japanese from the Edo period to the Meiji period.</p>
      </div>
    </div>
  </div>
  <div class="w3-third w3-container">
      <img src="food-thai.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Thai food</b></p>
        <p>Thai food generally refers to the food culture of the Thai nation. Thai food is characterized by a balance of sour, spicy, salty, sweet and bitter flavors, using more fish sauce and fresh spices, and less dry ingredients.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="food-we.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Western food</b></p>
        <p>European food, also known as European cuisine, Western food, referred to as Western food or Western food, is a general term for the cooking methods, edible utensils, dining etiquette and dishes themselves shared by Western countries.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="food-ram.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Others</b></p>
        <p>If customers have other food they want to eat, they can also communicate with the restaurant. Restaurants will try their best to arrange.</p>
      </div>
    </div>
  </div>
    <hr id="about">

    
  <!-- About Menu -->
  <div class="w3-container w3-padding-32" id="person0">  
    <h2><b>All Menu</b></h2><br>
    <div class="w3-row-padding">
    <div class="w3-third w3-container">
      <img src="CF_menu.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Chinese Food Menu</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="KF_menu.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Korean Food</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="JF_menu.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Japanese Food</b></p>
      </div>
    </div>
  </div>
  <div class="w3-third w3-container">
      <img src="TF_menu.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Thai food</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="WF_menu.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Western food</b></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="others.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Others</b></p>
        <p>If customers have other food they want to eat, they can also communicate with the restaurant. Restaurants will try their best to arrange.</p>
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
        <a href="#food-home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
