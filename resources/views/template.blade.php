<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="css/style2.css">
    <!------- font awesome 5 cdn link ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!------- font awesome 4.7.0 cdn link ---------->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!---------google fonts link ------------------>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Crud With Image</title>
</head>
<body>
<header>
        <a href="" class="logo"><img src="https://codemanbd.com/wp-content/uploads/2022/04/codemanBD-1.webp" alt=""></a>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" id="sub1">Courses <i class="fa-solid fa-angle-down"></i></a>
                    <div class="sub-menu no1">
                        <ul>
                            <li><a href="#">Wordpress updated exclusive with bonus</a></li>
                            <li><a href="#">Woocommerce</a></li>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Fiverr crash</a></li>
                            <li><a href="#">Creative frontend</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" id="sub2">Our Team <i class="fa-solid fa-angle-down"></i></a>
                    <div class="sub-menu no2">
                        <ul>
                            <li><a href="#">Team codemanbd</a></li>
                            <li><a href="#">meet our instructor</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Success</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#" id="sub3">Blog <i class="fa-solid fa-angle-down"></i></a>  
                    <div class="sub-menu no3">
                        <ul>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Fiverr</a></li>
                            <li><a href="#">Shopify</a></li>
                            <li><a href="#">Woocommerce</a></li>
                            <li><a href="#">Lead Generation</a></li>
                            <li><a href="#">Email Marketing</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
        <div class="cart">
            <h3></i>TK 0.00 <i class="fa-solid fa-cart-arrow-down"></i></h3>
        </div>
        <i class="fa-solid fa-bars" id="menu-bar"></i>
        <i class="fa-solid fa-xmark" id="close-bar"></i>
    </header>

    <div class="container my-3">
        @yield('content')
    </div>

    <section class="footer" id="contact">
        <div class="box-container">
            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi vitae doloremque beatae? Mollitia, culpa repellendus eaque tempore optio voluptatibus officiis quod facilis quidem!</p>
            </div>
            <div class="box">
                <h3>branch location</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">Japan</a>
                <a href="#">France</a>
            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#book">Book</a>
                <a href="#packages">Packages</a>
                <a href="#services">Services</a>
                <a href="#gallery">Gallery</a>
                <a href="#review">Review</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i> linkedin</a>
            </div>
        </div>
        <h1 class="credit">&copy 2017 - 2022 | Developed By <br> <span>Dhaka Digital</span> </h1>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>