<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <!-- bootstrap CDN(Content Delivery Network) - provides styles tied to keyword classes -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity=
            "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">
        <!-- css file in local files -->
        <link rel="stylesheet" href="css/main.css">
        <!-- jQuery CDN-->
        <!-- defer keyword to allow the browser to load the rest of the webpage first-->
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <!--Bootstrap JS CDN-->
        <!-- defer keyword to allow the browser to load the rest of the webpage first-->
        <script defer 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <!-- custom JS, in local files -->
        <script defer src="js/main.js" ></script> <!-- this line will auto func the document ready function in js-->

        <title>Placeholder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>   
        <?php
            include "nav.inc.php";
        ?>
        <main>
            <?php
            /* 
             * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
             * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
             */

                $lname = $pwd = $cfmpassword = $email = $errorMsg = "";
                $success = true;

                //last name validation
                if(empty($_POST["lname"])){
                    $errorMsg .= "Last Name is required.<br>";
                    $success = false;
                }
                else{
                    $lname = sanitize_input($_POST["lname"]);        
                }

                //email validation
                if (empty($_POST["email"])){
                    $errorMsg .= "Email is required.<br>";
                    $success = false;
                }
                else{
                    $email = sanitize_input($_POST["email"]);
                    // Additional check to make sure e-mail address is well-formed.
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $errorMsg .= "Invalid email format.";
                        $success = false;
                    }
                }

                //password validation
                if(empty($_POST["pwd"])){
                    $errorMsg .= "Password is required.<br>";
                    $success = false;
                }
                else{
                    $password = $_POST["pwd"];
                    //cfm password validation
                    if(empty($_POST["pwd_confirm"])){
                        $errorMsg .= "Password confirmation is required.<br>";
                        $success = false;
                    }
                    else{
                        $cfmpassword = $_POST["pwd_confirm"];
                        //if passwords do not match, add to error message
                        if($password !== $cfmpassword){
                            $errorMsg.= "Passwords do not match";
                            $success = false;
                        }
                        else{
                            $password = password_hash($password, PASSWORD_DEFAULT);
                            $cfmpassword = $password; //this line might not be needed as it will not be used to login 
                        }

                    }
                }




                if ($success)
                {
                    echo "<h4>Registration successful!</h4>";
                    echo "<p>Email: " . $email;                    
                    echo "<div class>"
                            ."<a href='register.php'>"
                                . "<button type='button'> "
                                        . "Return to Main Page"
                                . "</button>"
                            . "</a>"
                        ."</div>";
                }
                else
                {
                    echo "<h4>The following input errors were detected:</h4>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<a href='register.php'>"
                            . "<button type='button'> "
                                    . "Return to Main Page"
                            . "</button>"
                        . "</a>";
                }
                //Helper function that checks input for malicious or unwanted content.
                function sanitize_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
        </main>
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>