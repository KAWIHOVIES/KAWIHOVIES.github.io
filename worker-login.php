<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/fontawesome.min.css">

    <title>KAWIHOVIES</title>
</head>

<body id="body">
<?php
session_start();  
$error="";
$username = "";  $password = "";
// obtain form data
if ( isset($_POST["Username"]) )
   $username = $_POST["Username"];
if ( isset($_POST["Password"]) )
   $password = $_POST["Password"];
// check if user filled in username and password
if ($username != "" && $password != "") {
   // connect to database
   $link = mysqli_connect("localhost","root",
                          "A12345678","restaurant")
        or die("Cannot open MySQL database connection!<br/>");

   mysqli_query($link, 'SET NAMES utf8'); 
   // define sql string
   $sql = "SELECT * FROM worker WHERE wpassword='";
   $sql.= $password."' AND wname='".$username."'";
   // execute SQL command
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);
   // check if login data matched with database
   if ( $total_records > 0 ) {
      // if matched, specify session variable login_session as true
      $_SESSION["login_session"] = true;
      header("Location: worker-user.php");
   } else {  // login fails
      $error= "<center><font color='red'>No user found!<br/></font>";
      $_SESSION["login_session"] = false;
   }
   mysqli_close($link);    
}
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-10 justify-content-center text-center form-card">
                <!-- LOGIN ARE  -->
                <form action="" method="post" class="form" id="login-form">
                    <h3>Welcome</h3>
                    <div class="brandName mb-2">
                        <img src="images/fav-icon.png" alt="KAWIHOVIES">
                    </div>

                    <div class="loginErrorLogs"></div>
                    <?php echo $error ?>
                    <div class="form-group">
                        <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter user name" data-rule="required" data-msg="Please enter your username address">
                        <div class="validation text-left text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="Password" id="Password" class="form-control" placeholder="Enter password" data-rule="minlen:6" data-msg="Please enter your password">
                        <div class="validation text-left text-danger pwd"></div>
                    </div>

                    <div class="form-group text-left">
                        <input type="checkbox" name="remember" id="remember"> Ckeck me in
                    </div>

                    <button type="submit" class="register btn btn-block" id="login">Login</button>

                </form>
            </div>
            </row>
        </div>
    </div>
</body>

</html>