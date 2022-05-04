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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-10 col-sm-10 col-10 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <form action="" method="post" class="form" id="register-form">
                    <h3>Register</h3>
                    <div class="brandName mb-2">
                        <img src="images/fav-icon.png" alt="Rusiru Ashan Kulathunga || Rusiru Official">
                    </div>
                    <div class="errorLogs"></div>
                    <div class="form-group">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter user name" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger uName"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" data-rule="email" data-msg="Please enter your email address">
                        <div class="validation text-left text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="Enter your birthday" data-msg="Enter your birthday no late than today">
                        <div class="validation text-left text-danger vali-date"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger"></div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="re_pass" id="re_pass" class="form-control" placeholder="Re-enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger pwd-retype"></div>
                    </div>

                    <button type="submit" class="register btn btn-block" id="register">Register</button>

                    <div class="link mt-4">
                        <p>Already a member ? <a href="login.php" id="loginLink">Login </a></p>
                    </div>
                </form>
            </div>
            </row>
        </div>
    </div>

    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/js/fontawesome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/js/fontawesome.min.js"></script>
</body>

</html>