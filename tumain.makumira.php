<?php
include 'header.php';
$conn = mysqli_connect('localhost', 'root', '', 'crud');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch featured universities
$sql = "SELECT * FROM university WHERE featured = 68";
$featured = mysqli_query($conn, $sql);

// Check for query errors
if (!$featured) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUMAINI Dar es Salaam</title>
    <link rel="stylesheet" href="university.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

<?php while ($university = mysqli_fetch_assoc($featured)): ?>
    <div class="student" style="margin-top: 8%; color:white;">
        <h3 id="details">Student Ambassador's Details</h3>
        <ul id="sifa">
            <li><p><b>Name:</b> <?=$university['name'];?></p></li>
            <li><p><b>Course:</b> <?=$university['course'];?></p></li>
            <li><b>Entry Year:</b> <?=$university['entryYear'];?></li>
            <li><b>Gender:</b> <?=$university['gender'];?></li>
            <li><b>Contacts:</b> <?=$university['contact'];?></li>
            <li><b>Socials:</b>Get connected via 
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <!-- <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a> -->
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
  

          
          </li>
             

        </ul>
    </div>
  

    <h3 color=" #2c7873">Explore the Campus Gallery</h3>
    <!-- Trigger the Modal -->
   

    <!-- The grid: four columns -->
<div class="row">
    <div class="column">
      <img src=" " alt="" width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src=" " alt=" " width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src="  " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
  </div>
  
  <!-- The expanding image container -->
  <div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  
    <!-- Expanded image -->
    <img id="expandedImg" style="width: 100%;height: 600px;">
  
    <!-- Image text -->
    <div id="imgtext"></div>
  </div>



                
<div class="otherServices">
  
    <legend>
      <p id="accomodation">Students available accomodations and cheap brokerage services outside the campus</p>
      <p id="vyumba">Huduma za kupanga ndani na nje ya chuo </p>
      

      <p id="see">See the details below </p>
      
    </legend>
  

</div>
 <div class="mu-featured-tours-content">
  <div class="row">

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img1'];?>" width="650px" height="640px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc1'];?></h3>
          <h4>  Standard quality</h4>
          <span class="mu-price-tag">Tshs 30000</span>
          <p><?= $university['des1'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details join<br>Subscribe here</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img2'];?>" width="400px" height="600px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc2'];?> </h3>
          <h4> low quality, Standard quality</h4>
          <span class="mu-price-tag">Tsh 30,000 or <br>Tshs 40,000 </span>
          <p> <?= $university['des2'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details <br>Subscribe here</a>
        </div>
      </div>
     </div>

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img3'];?>" width="650px" height="640px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc3'];?></h3>
          <h4> Vip self contained</h4>
          <span class="mu-price-tag">50,000Tshs</span>
          <p><?= $university['des3'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details<br>Subscribe here</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <!-- <ul id="eng">
    <li>  <a href="#">Negotiate with our trusted broker, the brokership price for discount via Whatsapp</a></li>
  </ul>
  <ul id="swahili">
    <li>  <a href="#">Zungumza bei na dalali wetu wa kuaminika kupitia Whatsapp</a></li>
  </ul>  -->


    </div><?php
include 'header.php';
$conn = mysqli_connect('localhost', 'root', '', 'crud');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch featured universities
$sql = "SELECT * FROM university WHERE featured = 65";
$featured = mysqli_query($conn, $sql);

// Check for query errors
if (!$featured) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICD Arusha</title>
    <link rel="stylesheet" href="university.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

<?php while ($university = mysqli_fetch_assoc($featured)): ?>
    <div class="student" style="margin-top: 8%; color:white;">
        <h3 id="details">Student Ambassador's Details</h3>
        <ul id="sifa">
            <li><p><b>Name:</b> <?=$university['name'];?></p></li>
            <li><p><b>Course:</b> <?=$university['course'];?></p></li>
            <li><b>Entry Year:</b> <?=$university['entryYear'];?></li>
            <li><b>Gender:</b> <?=$university['gender'];?></li>
            <li><b>Contacts:</b> <?=$university['contact'];?></li>
            <li><b>Socials:</b>Get connected via 
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <!-- <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a> -->
              <a href="">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
  

          
          </li>
             

        </ul>
    </div>
  

    <h3 color=" #2c7873">Explore the Campus Gallery</h3>
    <!-- Trigger the Modal -->
   

    <!-- The grid: four columns -->
<div class="row">
    <div class="column">
      <img src=" " alt="" width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src=" " alt=" " width="100%" onclick="myFunction(this);">
    </div>
    <div class="column">
        <img src=" " alt=" " width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src="  " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
      <div class="column">
        <img src=" " alt="" width="100%" onclick="myFunction(this);">
      </div>
  </div>
  
  <!-- The expanding image container -->
  <div class="container">
    <!-- Close the image -->
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  
    <!-- Expanded image -->
    <img id="expandedImg" style="width: 100%;height: 600px;">
  
    <!-- Image text -->
    <div id="imgtext"></div>
  </div>



                
<div class="otherServices">
  
    <legend>
      <p id="accomodation">Students available accomodations and cheap brokerage services outside the campus</p>
      <p id="vyumba">Huduma za kupanga ndani na nje ya chuo </p>
      

      <p id="see">See the details below </p>
      
    </legend>
  

</div>
 <div class="mu-featured-tours-content">
  <div class="row">

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img1'];?>" width="650px" height="640px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc1'];?></h3>
          <h4>  Standard quality</h4>
          <span class="mu-price-tag">Tshs 30000</span>
          <p><?= $university['des1'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details join<br>Subscribe here</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img2'];?>" width="400px" height="600px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc2'];?> </h3>
          <h4> low quality, Standard quality</h4>
          <span class="mu-price-tag">Tsh 30,000 or <br>Tshs 40,000 </span>
          <p> <?= $university['des2'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details <br>Subscribe here</a>
        </div>
      </div>
     </div>

    <div class="col-md-4">
      <div class="mu-featured-tours-single">
        <img src="<?= $university['img3'];?>" width="650px" height="640px" alt="img">
        <div class="mu-featured-tours-single-info">
          <h3>Location:<?= $university['loc3'];?></h3>
          <h4> Vip self contained</h4>
          <span class="mu-price-tag">50,000Tshs</span>
          <p><?= $university['des3'];?></p>
          <a href="book.php" class="mu-book-now-btn">For more details<br>Subscribe here</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <!-- <ul id="eng">
    <li>  <a href="#">Negotiate with our trusted broker, the brokership price for discount via Whatsapp</a></li>
  </ul>
  <ul id="swahili">
    <li>  <a href="#">Zungumza bei na dalali wetu wa kuaminika kupitia Whatsapp</a></li>
  </ul>  -->


    </div>  
    
    <div style="background-color: black;">
    <h4 style="color:white"><span style="color: orange;"> <b>NOTE:</b></span>Subscribing to any kind of rooms interested does not involve sending money to anyone, 
<span style="color: orange;">avoid scammers</span>, instead it makes us to be aware of your preference so as you being redirected to 
  our real estate  broker's agencies(dalali smart) for available,cheap and customer prefferences with 40%off brokership price service.You will not be 
  condemned by anyone incase you don't respond to the service you subscribed to:  <br></h4>

    </div>
<script src="uni.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>


<script src="uni.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
