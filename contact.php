
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="chuo kikuu" />
  <meta name="description" content=" vyuo tanzania" />
  <meta name="author" content="vyuo bora nchini" />
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
  <title>JifunzeHub</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
       
    <div class="header_bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <p class="navbar-brand ">JifunzeHub</p>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="index1.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="service.php">Services <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
              </li>
              <form class="form-inline justify-content-center">
                <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button> -->
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
 
  </div>

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="images/contact.jpg" class="box_img" alt="about img" width="762px" height="802px">
          </div>
        </div>
        
        <div class="col-md-5 mx-auto">
          <div class="form_container">
            <div class="heading_container heading_center">
              <h2>Get In Touch</h2>
            </div>
            <form action="contact.php" method="post">
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="number" class="form-control" placeholder="Phone Number" required />
                </div>
                <div class="form-group col-lg-6">
                  <select name="service" id="service" class="form-control wide">
                    <option value="service">Select Service</option>
                    <option value="service">link to university</option>
                    <option value="service">Mkopo updates</option>
                    <option value="service">Scholarships links</option>
                    <option value="service">Career counselling and guidance</option>
                    <option value="services">Broker's help</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" name="email" class="form-control" placeholder="Email" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="message-box form-control" placeholder="Message" />
                </div>
              </div>
              <div class="btn_box">
                <button name="send">
                  SEND
                </button>
              </div>
            </form>
            <?php
// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $name = $number = $email = $service = $message = "";
    $errors = [];

    // Sanitize and validate input data
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    if (empty($_POST["number"])) {
        $errors[] = "Phone number is required.";
    } else {
        $number = sanitize_input($_POST["number"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    } else {
        $email = sanitize_input($_POST["email"]);
    }

    if (empty($_POST["service"])) {
        $errors[] = "Please select a service.";
    } else {
        $service = sanitize_input($_POST["service"]);
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    // If there are no errors, process the form
    if (empty($errors)) {
        // Email configuration
        $to = "your-email@example.com"; // Replace with your email address
        $subject = "Contact Form Submission";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Construct the email message
        $email_message = "Name: $name\n";
        $email_message .= "Phone Number: $number\n";
        $email_message .= "Service: $service\n";
        $email_message .= "Message:\n$message\n";

        // Prevent email header injection
        if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $message)) {
            $errors[] = "Invalid input.";
        } else {
            // Send the email
            if (mail($to, $subject, $email_message, $headers)) {
                echo "Thank you for your message. It has been sent.";
            } else {
                $errors[] = "There was a problem sending your message. Please try again.";
            }
        }
    }

    // Display errors if there are any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    echo "Invalid request.";
}
?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="row">
          <div class="col-md-3 ">
            <a class="navbar-brand" href="index1.html">
              JifunzeHub
            </a>
          </div>
          <div class="col-md-5 ">
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +255 750 997116
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                Company
              </h5>
              <p>
                We work to our maximum best to ensure that we serve the society to the fullest
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info_form">
              <h5>
                NEWSLETTER
              </h5>
              <form action="contact.php" method="post">
                <?php 
                $userEmail="";
                if(isset($_POST['subscibe'])){
                  $userEmail=$_POST['email'];
                  if(filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
                    $subject =" Thank you for subscribing Us . JifunzeHub community";
                    $message ="Thanks for subscribing to our blog .You will always receive latest updates from us.And we won't share personal ";
                    $sender ="From:Chumaeziberi@gmail.com";
                    if(mail($userEmail,$subject,$message,$sender)){
                    ?>
                      <div class="alert success">Thanks for subscribing Us</div>
                      <?php
                      $userEmail=" ";
                    }
                    else{
                      ?>
                      <div class="alert error">Failed while sending you Email</div>
                      <?php
                    }
                    

                  }
                  else{
                    ?>
                    <div class="alert error"> <?php echo $userEmail ?> is not a valid email</div>
                    <?php
                  }
                }
                ?>
                <input type="text" placeholder="Enter Your Email"   required value="<?php echo $userEmail ?>/>
                <input type="submit" name="subscribe" value="Subscribe">
                  Subscribe
                <!-- </button> -->
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                Services
              </h5>
              <p>
                We help you to learn new things
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="">
              <h5>
                Useful links
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="index.php">
                    Home
                  </a>
                </li>
                <li>
                  <a href="about.php">
                    About
                  </a>
                </li>
                <li>
                  <a href="service.php">
                    Services
                  </a>
                </li>
                <li>
                  <a href="team.html">
                    Team
                  </a>
                </li>
                <li class="mb-0">
                  <a href="contact.php">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">JifunzeHub</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>