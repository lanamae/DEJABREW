<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require "../php-landing/read.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/readLogbook.php';


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
<div class="adminHome">  
    
    <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 
           
        </form></span>     
        



   </div>



   <!-- main content -->
   <div class="main">
        <!-- contents -->
        <div class="dashboard">
            <div class="header">
                <div class="date"><?php echo $_SESSION['date'] ?></div>
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                <div class="profile"></div>
            </div>

            <p class="greetings"> 
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
                Admin <?php echo $_SESSION['username'];?> 
            </p>

            <div class="content">
                <div class="total-sales">Top sales</div>
                <div class="total-order">Total order</div>
                <div class="total-working-hours"> Total Working Hpurs</div>

                <div class="product-carousel"></div>
                

                <div class="graph"></div>
            </div>
            
        </div>




        <hr>
        <!-- instructions -->
        <div class="instruction">
            
        </div>
   </div>
      
   

   
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


</body>

<script src="../javascript/date-time.js"></script>
</html> 

