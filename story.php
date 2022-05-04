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
                background-image: url('story0.jpg');
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
 <div class="bgimg-1 w3-display-container w3-opacity-min" id="story-home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Our Story</span>
        </div>
    </div>

 <!-- About Section -->
 <div class="w3-container w3-padding-32" id="story0">  
    <h2><b>Restaurant Story</b></h2><br>
    <img src="0.png" class="w3-image" style="display:block;margin:auto" width="600" height="600" align="left">
    <div class="w3-padding-32">
      <h4><b>We Are KAWIHOVIES!</b></h4>
      <p>KAWIHOVIES is a restaurant run by 5 college students who specialize in coding. After graduation, they realized that opening a restaurant was actually very profitable. The name of the restaurant is the first two letters of the names of 5 people, which means that a group of people should work together to do business well.</p>
      <p>5 college graduates choose the seaside to start a business because they think the seaside is a fun place. If there is any pain, the sea can help you, you can play in the sand, or swim. And the seaside scenery is generally very good.</p>
    </div>

    <div class="w3-container w3-padding-32" id="person0">  
    <h2><b>Restaurant Entrepreneur</b></h2><br>
    <div class="w3-row-padding">
    <div class="w3-third w3-container">
      <img src="per0.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Winnie, LI JIA YING</b></p>
        <p>A person who loves life. She was one of the people who came up with the idea of opening a restaurant.</p>
        <p>Tel: 0000000</p>
        <p>Wechat: 000000</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="per1.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Estelle, MA YI HANG</b></p>
        <p>A very cool guy. She is the person who is primarily responsible for managing the restaurant menu and staff.</p>
        <p>Tel: 111111</p>
        <p>Wechat: 111111</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="per2.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Vivian, YE YI DAN</b></p>
        <p>A very lovely person. She is the one who is mainly in charge of event planning.</p>
        <p>Tel: 222222</p>
        <p>Wechat: 222222</p>
      </div>
    </div>
  </div>
  <div class="w3-third w3-container">
      <img src="per3.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Horatio, RUAN SONG YANG</b></p>
        <p>A very serious person. He is mainly responsible for coordinating the work of the department.</p>
        <p>Tel: 333333</p>
        <p>Wechat: 333333</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="per4.jpg" style="width:100%" >
      <div class="w3-container w3-white">
        <p><b>Karson, IONG KA CHON</b></p>
        <p>A very friendly person. He is the one who is primarily responsible for the scheduled work.</p>
        <p>Tel: 444444</p>
        <p>Wechat: 444444</p>
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
        <a href="#story-home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
