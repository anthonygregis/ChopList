<?php
// Include config file
require_once "assets/action/config.php";

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_GET["car"]){
    // Prepare a select statement
    $sql = "SELECT name, picture FROM cars WHERE name = ?";

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
                $error = "This is car does not exist or not in the database!"
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>
<html>
    <head>
        <title>Car Results - <?php echo $_GET["car"]; ?></title>
    </head>
    <body>
    <?php if($valid) : ?>
        <center>
            <h1><?php echo $car; ?></h1>
            <img src=https://www.igta5.com/images/400x160/<?php echo $picture; ?>>
        </center>
    <?php endif; ?>
    <?php if(!$valid) : ?>
        <center>
            <h1><?php echo $error; ?></h1>
        </center>
    <?php endif; ?>
    </body>
</html>