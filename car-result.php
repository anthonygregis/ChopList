<?php
// Include config file
require_once "assets/action/config.php";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET["car"])){
    // Prepare a select statement
    $sql = "SELECT name, image FROM cars WHERE name = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_name);
        
        // Set parameters
        $param_name = trim($_GET["car"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            /* store result */
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $car_name, $car_picture);
                if(mysqli_stmt_fetch($stmt)){
                    $car = $car_name;
                    $picture = $car_picture;
                    $valid = true;
                }
            } else{
                $error = "This is car does not exist or not in the database!";
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Car Results - <?php echo $_GET["car"]; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
  

  <div id="overlayer" style="display: none;"></div>
  <div class="loader" style="display: none;">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">
    
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 0px;"></div>

  
     
    <div class="site-blocks-cover overlay aos-init aos-animate" style="background-image: <?php if($valid) : ?>url(images/source.gif);<?php endif; ?><?php if(!$valid) : ?>url(images/JURASSIC.gif);"<?php endif; ?> data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
          <?php if($valid) : ?>
            <img src=https://www.igta5.com/images/400x160/<?php echo $picture; ?>>
            <h1 class="text-uppercase aos-init aos-animate" data-aos="fade-up"><?php echo $car; ?></h1>  
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
          <?php endif; ?>
          <?php if(!$valid) : ?>  
            <h1 class="text-uppercase aos-init aos-animate" data-aos="fade-up"><?php echo $error; ?></h1>   
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
          <?php endif; ?>
          </div>
            
        </div>
      </div>

      
    </div>  
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  
</body>
</html>