

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
<body>
    <!-------Navbar Section------->
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
                <li class="navbar-item">
                    <a href="index.php" class="navbar-links page">Logout</a>
                </li>
               
            </ul>
        </div>
    </nav>
   
    <!------Hero Section------>
    <div class="hero" id="home">
        <div class="hero-container">
            <h1 class="hero-heading">World's Bike Store</h1>
            <p class="hero-description">Large variety of bicycle collections</p>
            <button class="main-btn"><a href="#menu">Checkout Our Bike Collections</a></button>
        </div>
    </div>
    <!----Main Section------->
    <div class="main" id="menu">
        <div class="main-container">
            <div class="main-img">
                <img src="./images/bmx-min.jpg" alt="">
            </div>
            <div class="main-content">
                <h1>BMX for thrill seekers</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam debitis doloribus aliquid voluptate explicabo cupiditate sequi magni neque pariatur iusto voluptatum reprehenderit dolorem ex,
                 assumenda vel ab voluptatibus saepe?</p>
                <button class="main-btn"><a href="#">Order Now!</a></button>
            </div>
        </div>
        <div class="main-container" >
            
            <div class="main-content">
                <h1>Cruising bicycles</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam debitis doloribus aliquid voluptate explicabo cupiditate sequi magni neque pariatur iusto voluptatum reprehenderit dolorem ex,
                 assumenda vel ab voluptatibus saepe?</p>
                <button class="main-btn"><a href="#">Order Now!</a></button>
            </div>
            <div class="main-img-1" >
                <img src="./images/city-min.jpg" alt="" >
            </div>
        </div>
        <div class="main-container" >
            <div class="main-img">
                <img src="./images/electric-min.jpg" alt="">
            </div>
            <div class="main-content">
                <h1>Electric bikes</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam debitis doloribus aliquid voluptate explicabo cupiditate sequi magni neque pariatur iusto voluptatum reprehenderit dolorem ex,
                 assumenda vel ab voluptatibus saepe?</p>
                <button class="main-btn"><a href="#">Order Now!</a></button>
            </div>
        </div>
        <div class="main-container">
            <div class="main-content">
                <h1>Mountain biking for nature lovers</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam debitis doloribus aliquid voluptate explicabo cupiditate sequi magni neque pariatur iusto voluptatum reprehenderit dolorem ex,
                 assumenda vel ab voluptatibus saepe?</p>
                <button class="main-btn"><a href="#">Order Now!</a></button>
            </div>
            <div class="main-img-1">
                <img src="./images/mountainbike-min.jpg" alt="">
            </div>
        </div>
    </div>
   
    <!----Footer----->
    <?php
            include_once'footer.php';
    ?>
      
      <script src="bikeshop.js"></script>
      
</body>
</php>