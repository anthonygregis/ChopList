<?php

?>
<html>
    <head>
        <title>Chop Shop List</title>
    </head>
    <body>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="login" id="login-form">
            <div class="form-group">
                <input type="text" name="car" id="car" value="<?php echo $car; ?>" placeholder="Name of Car"/>
            </div>
            <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
            </div>
        </form>
    </body>
</html>