<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Shop</title>
    <link rel="stylesheet" href="bikeshop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

   <nav class="navbar">
     <div class="navbar-container">
         <a href="#home" id="navbar-logo">Bike Shop</a>
         <div class="navbar-toggle" id="mobile-menu">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>
         </div>
         <ul class="navbar-menu">
             <li class="navbar-item">
                 <a href="index.php" class="navbar-links page" id="home-page">Home</a>
             </li>
             <li class="navbar-item">
                 <a href="#menu" class="navbar-links page" id="menu-page">Menu</a>
             </li>
             <li class="navbar-item">
                 <a href="#contact" class="navbar-links page" id="contact-page">Contact Us</a>
             </li>
             <?php
                if(isset($_SESSION["useruid"])){
                    echo"<li class='navbar-item'><a href='welcome.php' class='navbar-links page'>Welcome Page!!</a></li>";
                    echo"<li class='navbar-item'><a href='logout.inc.php' class='navbar-links page'>Log Out!</a></li>";
                }
                else{
                    echo"<li class='navbar-item'><a href='register.php' class='navbar-links page'>Sign up</a></li>";
                    echo"<li class='navbar-item'><a href='login.php' class='navbar-links page'>Log in</a></li>";
                }
            ?>
             <!-------<li class="navbar-item">
                 <a href="login.php" class="navbar-links page">Login</a>
             </li>
             <li class="navbar-item">
                 <a href="register.php" class="navbar-links page">Sign Up</a>
             </li> ---->
         </ul>
     </div>
 </nav>
