<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Meta description will often show up in search results">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="src/style.css">
    </head>  

    <body>

<header>
    <nav class="nav-header-main">

        <a class="header-logo" href="index.php">

            <img src="src/img/logo.jpg" alt="logo" class="logo">

        </a>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About me</a></li>

        </ul>

        <div class="loggin_section">

        <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '
                    <form action="includes/login.inc.php" method="post">
                    
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        
                        <input type="password" name="pwd" placeholder="Password...">

                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Sign Up</a>';
                }

        ?>

 

        </div>


    </nav>


</header>

    </body>  
</html>