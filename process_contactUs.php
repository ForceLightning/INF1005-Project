<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <!-- TODO: Comment this out after writing main.js -->
        <!-- <script defer src="js/main.js"></script> -->
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            /* 
             * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
             * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
             */
                $fname = $lname = $email = $msg = $errorMsg = "";
                $success = true;
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    if (empty($_POST["fname"])){
                        $errorMsg .= "First name is required.<br>";
                        $success = false;
                    } else {
                        $fname = sanitize_input($_POST["fname"]);
                    }
                    
                    if (empty($_POST["lname"])){
                        $errorMsg .= "Last name is required.<br>";
                        $success = false;
                    } else {
                        $lname = sanitize_input($_POST["lname"]);
                    }
                    
                    if (empty($_POST["email"])){
                        $errorMsg .= "Email is required.<br>";
                        $success = false;
                    } else {
                        $email = sanitize_input($_POST["email"]);
    
                        // Additional check to make sure e-mail address is well-formed.
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $errorMsg .= "Invalid email format.<br>";
                            $success = false;
                        }
                    } 
                }
                ?>

        <?php
        include "nav.inc.php"
        ?>
        <main class="container">
            <hr>
            <?php
            if ($success)
            {
                echo "<h4>Thank you for contacting us," .$fname."" .$lname."</h4>";
                echo '<div class="form-group">
                      <a href="contactUs.php" class="btn btn-success" type="submit">Submit</a>  
                      </div>';
            }
            else
            {
                echo "<h2>Oops!</h2>";
                echo "<h4>The following errors were detected:</h4>";
                echo "<p>".$errorMsg."</p>";

            }
            ?>
        </main>
        <br>
        
<?php
include "footer.inc.php";
?>

    </body>
</html>
