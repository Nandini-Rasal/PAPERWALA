<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for additional styling */
        .container {
            max-width: 800px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .form-control {
            border-radius: 10px;
        }

        .contact-container {
            padding: 20px 0;
            color: white;
            background-color: #1a6aa3;
            /* Change this color code as desired */
            border-radius: 20px;
        }

        h2 {
            font-family: 'Arial', sans-serif;
            color: black;
            align-self: center;
        }

        .custom-container {
            background-color: #F0F0FF;
            /* Change this color code as desired */
            color: black;
            /* Text color */
        }

        .custom-f {
            background-color: #F0F0FF;
        }

        body {
            background-image: url('img/bg.jpeg');
            background-size: cover;
        }

        p {
            color: blackwhite;

        }

        h2 {
            color: white;
            align-content: center;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- Blue container for "Contact Us" -->
    <br>
    <div class="container contact-container">
        <div class="container">
            <h2 class="mb-0">Contact Us</h2>
            <p>We're always eager to connect and assist. Whether you have questions, feedback, or are looking for
                tailored solutions, reach out to us through any of the channels below:
            </p>
        </div>
    </div>

    <!-- Form container -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Contact form -->
            <div class="col-md-6">
                <div class="card p-4 custom-f">
                    <h3 class="mb-4">Get in Touch</h3>
                    <?php
                    // Check if success query parameter is set
                    if (isset ($_GET['success']) && $_GET['success'] === 'true') {
                        // Form successfully submitted
                        echo "<p class='text-success'>Form Submitted</p>";
                    }
                    ?>
                    <form action="submit_query.php" method="post">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Your Phone No."
                                pattern="[0-9]+" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="email"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea id="query" name="query" rows="4" class="form-control" placeholder="Your Query"
                                required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Dummy paragraph container -->
            <div class="col-md-6 ">
                <div class="card p-4 custom-container">
                    <h3 class="mb-4">Paperwala</h3>
                  

                    <p>    Phone: 844-783-5937  </p>
                     <p>   Email: info@Paperwala.com  </p>
                        
                     <p>   Address: Nashik , 410507
                     </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>