<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kavoon&family=Poppins:wght@300&family=Quicksand:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <!-- JQuery JS -->
        <script defer src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <!-- Custom JS -->
        <!-- TODO: Comment this out after writing main.js -->
        <script defer src="js/main.js"></script>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

        <?php
                $fname = $lname = $email = $msg = $errorMsg = "";
                $success = true;
                # Process only if the form has been submitted via POST
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    # If first name is empty, user will still be able to proceed
                    if (!empty($_POST["fname"]))
                    {
                        $fname = sanitize_input($_POST["fname"]);
                    }
                    # If last name is empty, user will not be able to proceed
                    if (empty($_POST["lname"]))
                    {
                        $errorMsg .= "Last name is required.<br>";
                        $success = false;
                    } 
                    else 
                    {
                        $lname = sanitize_input($_POST["lname"]);
                    }
                    # If email is empty, user will not be able to proceed
                    if (empty($_POST["email"]))
                    {
                        $errorMsg .= "Email is required.<br>";
                        $success = false;
                    } 
                    else 
                    {
                        $email = sanitize_input($_POST["email"]);
    
                        // Additional check to make sure e-mail address is well-formed.
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            $errorMsg .= "Invalid email format.<br>";
                            $success = false;
                        }
                    }
                }
//                else 
//                {
//                   echo"<h2>This page is not meant to run directly.<h2>";
//                   exit();
//                }
                    
                    // Helper function that checks input for malicious or unwanted content
                    function sanitize_input($data)
                    {  
                       $data = trim($data); 
                       $data = stripslashes($data);  
                       $data = htmlspecialchars($data); 
                       return $data;
                    }
                ?>
    <body>
        <?php
        include "nav.inc.php"
        ?>
        <main class="container">
            <hr>
            <?php
            if ($success)
            {
                echo "<h3>Your submission is successful!</h3>";
                echo "<h4>Thank you for contacting us, " .$fname." " .$lname."</h4>";
                echo "<button onclick='history.go(-1)' class='btn btn-success'>Back</button>";    
            }
            else
            {
                echo "<h2>Oops!</h2>";
                echo "<h4>The following errors were detected:</h4>";
                echo "<p>".$errorMsg."</p>";
                echo "<button onclick='history.go(-1)' class='btn btn-danger'>Return</button>";  
            }
            ?>
        </main>
        <br>
        
        <?php
            include "footer.inc.php";
        ?>


    </body>
</html>
