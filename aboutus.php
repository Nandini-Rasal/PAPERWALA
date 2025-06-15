<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page with Images</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Reset some default styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* CSS styles for the layout */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col {
            width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        .col img {
            width: 100%;
        }

        #fi img {
            padding-right: 80px;
        }

        @media (max-width: 768px) {
            .col {
                width: 100%;
            }
        }

        p {
            font-size: 20px;
            /* Reduced font size */
            padding-top: 5%;
            /* Adjusted padding */

        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar {
                justify-content: center;
                /* Align links to the center */
                padding: 10px 10px;
                /* Adjusted padding */
                height: 20px;
            }

            .navbar a {
                margin:  10px;
                /* Adjusted margin */
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 style="font-size: 20%px; color: #333; font-weight: bold; padding-left: 28%; padding-top: 40px;">About Us: The
        Journey of Paperwala</h1>

    <br>
    <br>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Our Root</h1>
                <p>PAPERWALA started out as a small Pamphalte distribution company in the
                    INDIA. Even though we began with humble roots, our goal was always crystal
                    clear - to revolutionize direct marketing and change the way businesses
                    connect with their target customers.</p>
            </div>
            <div class="col" id="fi">
                <img src="img/about1.jpg" alt="Image 1">
            </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col" id="si">
                <img src="img/about2.jpg" alt="Image 1">
            </div>
            <div class="col">
                <h1>A settlement of Partnerships</h1>
                <p>As we expanded, our partnerships grew as well. Our dedication to quality
                    and innovation attracted the interest of major companies across the nation.
                    Fortune 500 companies like Walmart, Amazon, Filpkart, Pizza Hut, Domino's,
                    Instacart, and GoPuff placed their trust in us to tell their brand stories. But
                    our collaborations didn't end there - even government organizations
                    recognized the value of our marketing approach and selected us to help
                    spread their message.</p>
            </div>
        </div>


        <br>
        <br>

        <div class="row">
            <div class="col">
                <h1>Global expansion</h1>
                <p>As each campaign became a success, PAPERWALA began to expand
                    beyond its original limits. We went from being a national company to
                    becoming a global corporation. Nowadays, businesses from all over the
                    world come to us not only for our services, but also for our expertise,
                    creativity, and unwavering dedication to their success.</p>
            </div>
            <div class="col" id="fi">
                <img src="img/about3.jpg" alt="Image 1">
            </div>
        </div>



        <br>
        <br>


        <div class="row">
            <div class="col" id="si">
                <img src="img/about4.jpg" alt="Image 1">
            </div>
            <div class="col">
                <h1>The Future Wave</h1>
                <p>Our journey has been filled with milestones, but it's far from over. We're
                    constantly growing, learning, and expanding our horizons. It all started with
                    handing out pamphlet in our local neighborhood, and now we're creating
                    marketing strategies for global giants. It's been an exciting ride so far, but
                    we're confident that the best is still ahead of us.
                </p>
            </div>
        </div>



    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
