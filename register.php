<?php 
include('server.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PlacementCorner</title>
    <!--Bootstrap-->
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!--CSS File--> 
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand hidden-lg" href="#">PlacementCorner<img scr="logo2.png"></a>
                <a class="navbar-brand hidden-xs " href="/">
                    <div class="logo-image">
                        <img src="logo2.png" class="img-fluid">
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home1.html">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">ACHIEVERS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container2">
        <!--        <div class="col-sm-6">-->
        <form method="post" action="register.php">
            <?php include('errors.php');?>
            <h1 style="text-align: center">Register</h1>
            <p style="text-align: center">Please fill in this form to create an account.</p>
            <hr>
            <label>
     <b>USERNAME</b>
     </label>
            <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>">
            <label><b>EMAIL</b></label>
            <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
			
	
			
			

            <label><b>PASSWORD</b></label>
            <input type="password" placeholder="Enter Password" name="password_1">

            <label><b>CONFIRM PASSWORD</b></label>
            <input type="password" placeholder="Confirm Password" name="password_2">
            <hr>
			

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            
           <button type="submit" class="registerbtn" name="reg_user">Register</button>

            <!--            <div class="container signin">-->
            <p>Already have an account? <a href="login.php">Sign in</a></p>
            <!--            </div>-->
		

        </form>
    </div>

</body>

</html>
