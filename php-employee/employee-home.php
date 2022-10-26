<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - EMPLOYEE</title>

    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>
<body>
   <div class="main-employeeHome">   
        <!-- head section -->
        <div class="hero-section">
            <!-- NAVBAR -->
            <div class="navbar">
                    <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
                    
                    <ul>
                        <li><a href="employee-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="employee-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="employee-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
                    </ul>
                
            </div>

            <!-- HEADING -->

            <div class="header">
                <div class="line" style="width: 950px;"></div> 
                <h1> <?php
                    if($setHour == "AM"){
                        echo  "Good Morning, ";
                    }

                    else if($hours<6 || $setHour == "PM"){
                        echo  "Good Afternoon,";
                    }

                    else if($hours>=6 || $setHour == "PM" ){
                        echo  "Good Evening,";
                    }

                ?>
                
                
                
                , Employee <?php echo $_SESSION['username'];?> </h1>
                <h2>Customers Deserve Your Hardwork, Serve them!</h2>
                
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
    
    </div>    
</body>
</html> 