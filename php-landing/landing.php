<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);    
session_start();


    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

    }

    if($_SESSION['status'] == 'valid'){
        if($_SESSION['position'] == 'admin'){
            // echo "<script>alert('Hello testing admin')</script>";
            echo "<script>window.location.href='../php-admin/admin-home.php'</script>";

        }

        if($_SESSION['position'] == 'employee'){
            // echo "<script>alert('Hello testing employee')</script>";
            echo "<script>window.location.href='../php-employee/employee-home.php'</script>";
        }
            
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deja Brew</title>

    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- IMPORTED FONT LINKS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,800;1,700&display=swap" rel="stylesheet">


</head>
<body>
    

    <div class="main">
        <div class="hero-section">
            <div class="navbar">
                <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
            </div>

            <div class="hero-container">
                <div class="hero-img">
                    <img src="../PROJECT/Images/img-hero1.png" alt="image hero- product">
                </div>
                


                <div class="hero-content">

                    <div class="line" style="width: 900px; height: 5px; background: #fff;"></div>
                    <div class="headline">
                        DEJA BREW AUTOMATED SALES RECORD SYSTEM
                    </div>

                    <p class="desc"> Today???s a good mood to make a perfect blend, BREWmates! 
                    </p>

                    <div class="line" style="width: 550px; height: 5px; background: #fff;"></div>
                    <div class="buttons">
                        <form action="signup.php" method="POST">
                            <input type="submit" name="signup-btn" class="signup" value="SIGN UP">
                        </form>

                        <form action="login.php" method="POST">
                            <input type="submit" name="loginbtn" class="login" value="LOGIN">
                        </form>
                    </div>
                
            </div>

            </div>
            


        </div>

        <hr>
        <!--INSTRUCTIONS  -->
        <div class="instructions">
            <h1>INSTRUCTIONS</h1>
            <p>To make a perfect blend, make sure to follow all the instructions before<br> 
                proceeding to our world of coffee and sweets, BREWmates!</p>

            <div class="box-container">

                <!-- instruction # 1 -->
                 <div class="ins1">
                    <div class="num">1</div>
                    <img src="../PROJECT/Images/ins-1.png" class="icon"></img>
                    <div class="content">To log-in, you need to make
                         sure that you already have an
                          account that is already existing.
                           If not, proceed to sign-up for a new account..</div>
                 </div>

                  <!-- instruction # 2 -->
                  <div class="ins2">
                    <div class="num">2</div>
                    <img src="../PROJECT/Images/ins-2.png" class="icon"></img>
                    <div class="content">For signing-in, make sure
                         to identify if you???re the admin
                          or the employee before filling 
                          up all the necessary requirements
                           for creating a new account.</div>
                 </div>

                  <!-- instruction # 3 -->
                  <div class="ins3">
                    <div class="num">3</div>
                    <img src="../PROJECT/Images/ins-3.png" class="icon"></img>
                    <div class="content">
                    Alert sign will pop up if you???ve
                     failed to give the required
                      details for creating an account. </div>
                 </div>
                 
            </div>


        </div>
    </div>
    
</body>
</html>