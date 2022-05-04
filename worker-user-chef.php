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
    <a href="worker-user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a> 
    <a href="worker-user-customer.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Customer Information</a> 
    <a href="worker-user-chef.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Chef Information</a> 
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

  <div class="w3-container w3-padding-32 w3-bottombar" id="chef-info">  
    <h2><b>Chef Information</b></h2><br>
    <?php
$records_per_page = 5;  // number of records shown on each form page
// Obtain URL parameter
if (isset($_GET["Pages"])) 
  $pages = $_GET["Pages"];
else                       
  $pages = 1;

$link = mysqli_connect("localhost", "root", "A12345678", "restaurant") 
        or die("Can not connet SQL<br/>");
$sql = "SELECT cid, cname, sex, award, age, cuisine FROM chef";
mysqli_query($link, 'SET NAMES utf8');

// execute SQL command
$result = mysqli_query($link, $sql);
$total_fields=mysqli_num_fields($result); // obtain no. of fields
$total_records=mysqli_num_rows($result);  // obtain no. of records
// calculate total number of form pages
$total_pages = ceil($total_records/$records_per_page);
// calculate location of first record on this current form page
$offset = ($pages - 1)*$records_per_page;
mysqli_data_seek($result, $offset); // move pointer to this record
echo "Total record: $total_records <br/>";
echo "<table border=1 width=100%><tr>";
while ( $meta=mysqli_fetch_field($result) )
   echo "<td>".$meta->name."</td>";
echo "</tr>";
$j = 1;
while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)
       and $j <= $records_per_page) {
   echo "<tr>";
   for ( $i = 0; $i<= $total_fields-1; $i++ )
      echo "<td>".$rows[$i]."</td>";
   echo "</tr>";
   $j++;
}
echo "</table><br>";
if ( $pages > 1 )  // show previous page
   echo "<a href='worker-user-chef.php?Pages=".($pages-1).
        "'>Last</a>| ";
for ( $i = 1; $i <= $total_pages; $i++ )
   if ($i != $pages)
     echo "<a href=\"worker-user-chef.php?Pages=".$i."\">".
          $i."</a> ";
   else
     echo $i." ";
if ( $pages < $total_pages )  // show next page
   echo "|<a href='worker-user-chef.php?Pages=".($pages+1).
        "'>Next</a> ";
mysqli_free_result($result);  
mysqli_close($link);
?>
</div>

<div class="w3-container w3-padding-32 w3-bottombar" id="chef-add">  
    <h2><b>Add Chef Information</b></h2><br>
    <?php
// check if Insert button clicked
if (isset($_POST["Insert"])) {
   
   $link = @mysqli_connect("localhost","root","A12345678", "restaurant") 
         or die("Can not connet SQL<br/>");
   
   // SQL statement used to add a new record 
   $sql ="INSERT INTO chef (cid, cname, sex, award, age,";
   $sql.=" cuisine) VALUES ('";
   $sql.=$_POST["cid"]."','".$_POST["cname"]."','";
   $sql.=$_POST["sex"]."','".$_POST["award"]."','";
   $sql.=$_POST["age"]."','".$_POST["cuisine"]."')";

   mysqli_query($link, 'SET NAMES utf8'); 

   if ( mysqli_query($link, $sql) ) // 執行SQL指令
      echo "<b>successfully added: </b>". 
           mysqli_affected_rows($link) . "<br/>";
   else
      die("<b>Failed to add</b><br/>");
   mysqli_close($link);      
}
?>
<form action="worker-user-chef.php" method="post">
<table border="1">
<tr><td>id:</td>
   <td><input type="text" name="cid" size ="6"/></td>
</tr><tr><td>name:</td>
   <td><input type="text" name="cname" size="12"/></td>
</tr><tr><td>sex:</td>
   <td><input type="text" name="sex" size="25"/></td>
   </tr><tr><td>award:</td>
   <td><input type="text" name="award" size="6"/></td>
   </tr><tr><td>age:</td>
   <td><input type="text" name="age" size="12"/></td>
</tr><tr><td>cuisine:</td>
   <td><input type="text" name="cuisine" size="25"/>
	 </td></tr>
</table><hr/>
<input type="submit" name="Insert" value="Submit"/>
</form>
</div>

<div class="w3-container w3-padding-32 w3-bottombar" id="chef-update">  
    <h2><b>Update Chef Information</b></h2><br>
    <?php
// check if Update button was clicked
if (isset($_POST["Update"])) {   
   $link = @mysqli_connect("localhost","root","A12345678", "restaurant")
         or die("Can not connet SQL<br/>");

   // define sql string used to update record
   $sql = "UPDATE chef SET ";
   $sql.= "cname='".$_POST["cname-1"]."',";
   $sql.= "sex='".$_POST["sex-1"]."',";
   $sql.= "award='".$_POST["award-1"]."',";
   $sql.= "age='".$_POST["age-1"]."',";
   $sql.= "cuisine='".$_POST["cuisine-1"]."'";
   $sql.= " WHERE cid = '".$_POST["cid-1"]."'";

   mysqli_query($link, 'SET NAMES utf8'); 

   if ( mysqli_query($link, $sql) ) 
      echo "successfully update: ". 
           mysqli_affected_rows($link) . "<br/>";
   else
      die("Failed to update<br/>");
   mysqli_close($link);      
}
?>
<form action="worker-user-chef.php" method="post">
id: <input type="text" name="cid-1" size ="6"/>
<br><br>
<table border="1">
<tr><td>name:</td>
   <td><input type="text" name="cname-1" size="25"/>
	 </td></tr>
     <tr><td>sex:</td>
   <td><input type="text" name="sex-1" size="25"/>
	 </td></tr>
     <tr><td>award:</td>
   <td><input type="text" name="award-1" size="25"/>
	 </td></tr>
     <tr><td>age:</td>
   <td><input type="text" name="age-1" size="25"/>
	 </td></tr>
     <tr><td>cuisine:</td>
   <td><input type="text" name="cuisine-1" size="25"/>
	 </td></tr>
</table><hr/>
<input type="submit" name="Update" value="Update"/>
</form>
</div>

<div class="w3-container w3-padding-32 w3-bottombar" id="chef-delete">  
    <h2><b>Delete Chef Information</b></h2><br>
    <?php
// check if Delete button clicked
if (isset($_POST["Delete"])) {
   
   $link = @mysqli_connect("localhost","root","A12345678", "restaurant") 
         or die("cannot open MySQL database connection!<br/>");
      
   $sql = "DELETE FROM chef ";
   $sql.= " WHERE cid = '".$_POST["cid-2"]."'";
   mysqli_query($link, 'SET NAMES utf8'); 

   if ( mysqli_query($link, $sql) ) 
      echo "successfully Delete: ". 
           mysqli_affected_rows($link) . "<br/>";
   else
      die("Failed to delete<br/>");   
   mysqli_close($link);      
}
?>
<form action="worker-user-chef.php" method="post">
<table border="1">
<tr><td>id:</td>
   <td><input type="text" name="cid-2" size ="6"/></td>
</tr>
</table><hr>
<input type="submit" name="Delete" value="Delete"/>
</form>
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
        <a href="#worker-chef-home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
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
