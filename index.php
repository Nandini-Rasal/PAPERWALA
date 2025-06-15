<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage New</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
    
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
           
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        body {
            background-color: #f8f9fa;
            /* Set background color */
            color: #000;
            /* Set text color */
            margin: 0;
            padding: 0;
        }

        /* Header styling */
        .header {
            background-color: black;
            /* Transparent background color */
            color: #fff;
            /* Light text color */
            padding: 10px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            /* Smooth transition */
        }

        /* Header with logo styling */
        .header.with-logo {
            background-color: white;
            /* White background color */
            padding: 20px;
        }

        /* Logo styling */
        .logo {
            width: auto;
            /* Adjust logo width */
            max-height: 50px;
            /* Limit logo height */
            transition: all 0.3s ease;
            /* Smooth transition */
        }

        /* Navigation links */
        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: #000;
            margin-right: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        /* Social media icons */
        .social-icons a {
            color: cornflowerblue;
            /* Default color */
            margin-left: 20px;
            font-size: 20px;
            text-decoration: none;
            /* Remove underline from links */
            transition: color 0.3s ease;
            /* Smooth color transition */
            padding: 20px;
        }

        .social-icons a:hover {
            color: #ff4500;
            /* Change color on hover */
        }


        /* Slider container */
        .slider-container {
            margin-top: 20px;
            /* Add margin on top */
            opacity: 0;
            transition: opacity 1s ease;
        }

        .slider-container.show {
            opacity: 1;
        }

        /* Button styling */
        .button-group {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .button-group a {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .button-group a:hover {
            background-color: #0056b3;
        }


        /* Stylish Block Styling */
        .block {
            border-radius: 10px;
            padding: 30px;
            /* Increased padding for increased height */
            margin-bottom: 20px;
            background-color: #f8f9fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            line-height: 1.5;
            /* Ensures text content is vertically centered */
        }

        .block:hover {
            transform: scale(1.05);
        }

        .block h2 {
            color: #343a40;
            margin-bottom: 10px;
        }

        .block p {
            color: #6c757d;
            margin-bottom: 20px;
        }

        .block a.btn {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .block a.btn:hover {
            background-color: #0056b3;
        }


        /* Large Text Styling */
        .large-text {
            font-size: 24px;
            /* Adjust the font size as needed */
            line-height: 1.5;
        }

        @media (min-width: 768px) {
            .large-text {
                font-size: 32px;
                /* Increase font size for larger screens */
            }
        }

        /* GIF Image Styling */
        .gif-image {
            max-width: 100%;
            /* Adjust the maximum width of the image */
            height: auto;
            margin-bottom: 20px;
            /* Adjust margin as needed */
        }


        .dropdown-content.dropdown-menu {
            padding: 0;
            border: none;
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #1e2125;
            text-decoration: none;
            background-color: #f8f9fa;
        }
    
        /* Styling for the chatbot icon */
        .chatbot-icon {
            position: fixed;
            bottom: 20px;
            /* Adjust as needed */
            right: 20px;
            /* Adjust as needed */
            font-size: 36px;
            /* Adjust icon size */
            color: #007bff;
            /* Adjust icon color */
            background-color: #fff;
            /* Background color for the icon container */
            border-radius: 50%;
            /* Rounded shape */
            padding: 15px;
            /* Adjust padding */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Add a shadow for depth */
            cursor: pointer;
            z-index: 9999;
            /* Ensure it's above other content */ 
            transition: transform 0.1s ease;
            /* Add a smooth transition */
        }

        /* Hover effect */
        .chatbot-icon:hover {
            transform: scale(1.1);
            /* Scale up on hover */
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="nav-links">
            <!-- Logo -->
            <img src="logo.png" alt="Logo" class="logo">
            <!-- Navigation Links -->
            <a href="#" class="nav-link">Home</a>

            <a href="contact.php" class="nav-link">Contact</a>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAbout" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-content" aria-labelledby="navbarDropdownAbout">
                    <a class="dropdown-item" href="aboutus.php">Our Story</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServices" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-content" aria-labelledby="navbarDropdownServices">
                    <a class="dropdown-item" href="#">Pamphlate Distribution</a>
                    <a class="dropdown-item" href="#">Coupon Advertising</a>
                    <a class="dropdown-item" href="#">Design Services</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownIndustries" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    Industries
                </a>
                <div class="dropdown-content dropdown-menu" aria-labelledby="navbarDropdownIndustries">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#">Real Estate</a>
                            <a class="dropdown-item" href="#">Restaurant and Food Services</a>
                            <a class="dropdown-item" href="#">Automotive Dealerships</a>
                        </div>
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#">Health & Fitness Centers</a>
                            <a class="dropdown-item" href="#">Marketing Firms</a>
                            <a class="dropdown-item" href="#">Marketing Firms</a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </header>

    <div>


    </div>

    <!-- Image Slider -->
    <div class="container slider-container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/welcome1.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="img/welcome2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>

            </div>
            <!-- Carousel navigation buttons -->
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Paragraph with GIF Image -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <p class="large-text" style="font-weight:Bold;">Paperwala: India's #1 Choice for National printing
                    Distribution Services and Door
                    Hanger Delivery, Supported by Our Street Team Brand Ambassadors
                    Empowering Your Brand with Diverse printing Marketing Solutions</p>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <img src="moving.gif" alt="GIF Image" class="img-fluid gif-image">
            </div>
        </div>
    </div>


    <br>
    <!-- Stylish Blocks -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block">
                    <h2>Business</h2>
                    <p>We have Created a Effiecient Feature For Businesses To Give Order To Printing Press


                    </p>
                    <a href="busilogin.php" class="btn">Click For Login</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <h2>Door-to-Door printing Distribution</h2>
                    <p>Deliver your message directly to your audience's doorstep. Our door-to-door service ensures
                        maximum visibility, while our tracking platform lets you monitor campaign success. A personal
                        touch for effective marketing.</p>
                    <a href="distlogin.php" class="btn">Click For Login</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <h2>Printing</h2>
                    <p>Bring your designs to life with our versatile printing options. Whether it's door hangers,
                        printings, or postcards, we cater to various sizes and ensure top-quality prints that make a
                        lasting impression. Rely on MarketAnywhere for crisp and vibrant marketing materials.</p>
                    <a href="print_login.php" class="btn">Click For Login</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <h2>Printing</h2>
                    <p>Bring your designs to life with our versatile printing options. Whether it's door hangers,
                        printings, or postcards, we cater to various sizes and ensure top-quality prints that make a
                        lasting impression. Rely on MarketAnywhere for crisp and vibrant marketing materials.</p>
                    <a href="print_login.php" class="btn">Click For Login</a>
                </div>
            </div>

        </div>
    </div>


    <!-- Bootstrap JS and Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
        // JavaScript to toggle header styles based on logo presence
        $(document).ready(function () {
            // Check if logo is present
            if ($('.logo').attr('src')) {
                $('.header').addClass('with-logo');
            }

            // Check if slider container is in the viewport
            $(window).scroll(function () {
                $('.slider-container').each(function () {
                    var imagePos = $(this).offset().top;
                    var imageHeight = $(this).height();
                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow + $(window).height() && imagePos + imageHeight > topOfWindow) {
                        $(this).addClass("show");
                    } else {
                        $(this).removeClass("show");
                    }
                });
            });
        });
    </script>



    <div class="chatbot-icon">
        <i class="fas fa-comments"></i>
    </div>




    <!-- Footer -->
    <footer class="footer bg-dark text-white mt-auto">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Service 1</a></li>
                        <li><a href="#">Service 2</a></li>
                        <li><a href="#">Service 3</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>About Us</h5>
                    <p>Paperwala: India's #1 Choice for National printing Distribution Services and Door Hanger Delivery,
                        Supported by Our Street Team Brand Ambassadors</p>
                </div>
                <div class="col-lg-4">
                    <h5>Contact</h5>
                    <address>
                        <strong>Paperwala</strong><br>
                        Nashik<br>
                        India<br>
                        <abbr title="Phone">Phone:</abbr> (123) 456-7890
                    </address>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            &copy; 2024 Your Company. All rights reserved.
        </div>
    </footer>






</body>

</html>