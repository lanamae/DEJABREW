<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require "../php-landing/read.php";
    // require "../php-landing/read.php";


    // echo $_SESSION['username'];
    // echo $_SESSION['dateLogin'];
    // echo $_SESSION['timelogin'];

    // $usernameSamp = $_SESSION['username'];
    // $getDateLoginSamp = $_SESSION['dateLogin'];
    // $getLogoutTimeSamp = $_SESSION['timelogin'];

     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - ADMIN</title>

    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>
<body>
   <div class="main-adminHome">   
    
        <!-- head section -->
        <div class="hero-section">
            <!-- NAVBAR -->
            <div class="navbar">
                    <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
                    
                    <ul>
                        <li style=" border-bottom: #fff 5px solid;"><a href="admin-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-sales.php"><img src="../PROJECT/Images/sales-icon.png" alt="sales icon" style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-employee.php"><img src="../PROJECT/Images/emp-icon.png" alt="employee icon" style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>

                        <!-- <li>
                            <form action="admin-profile.php" method="post">
                                <input type="submit" value="PROFILE" /></li>
                            </form>
                            
                         -->
                    
                    </ul>
                
            </div>




           

            <!-- HEADING -->

            <div class="header">
                <div class="line" style="width: 950px;"></div> 
                <h1>
                    
                <?php
                    if($setHour == "AM"){
                        echo  "Good Morning, ";
                    }

                    else if($hours<6 && $setHour == "PM"){
                        echo  "Good Afternoon,";
                    }

                    else if($hours>=6 && $setHour == "PM" ){
                        echo  "Good Evening,";
                    }

                   
                   

                ?>
                
                Admin <?php echo $_SESSION['username'];?> </h1>
                <h2>Check How Today’s Deja Brew’s Sale</h2>
        
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non aliquam, at <br>
                duis ac. Vel eleifend iaculis sit aliquet urna vehicula malesuada interdum pharetra.</p>

                <div class="line" style="width:750px;margin-left: 415px;"></div>
            </div>

           <hr>
        </div>
 <!-- admin instructions -->
        <div class="admin-ins">
            <div class="instruction1"></div>
            <div class="instruction2"></div>
            <div class="instruction3"></div>
        </div>


        <!-- FOOTER -->
        <div class="footer">
            <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
                  
            <div class="footer-details" style="display:flex;">
                <div class="column1">
                    <h4>Deja brew</h4><br>  
                    <span>95 National Road Pulilan Bulacan</span><br> <br> <br> <br>
                    <p>All Right Reserved 2023 &copy;</p>   
                </div>

                <div class="column2">
                    <h4>Page Content</h4> <br>
                    <p><a href="admin-home.php">Home</a></p>
                    <p><a href="admin-menu.php">Menu</a></p>
                    <p><a href="admin-sales.php">Sales</a></p>
                    <p><a href="admin-employees.php">Employees</a></p>
                    <p><a href="admin-profile.php">Profile</a></p>
                </div>

                <div class="column3">
                    <h4>Social</h4><br>

                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Twitter</a></p>
                    <p><a href="#">Instagram</a></p>
                    <p><a href="#">FGmail</a></p>
                </div>
                
            </div>

        </div>
    </div>    
</body>
</html> 