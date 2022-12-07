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
            <p> 
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

           
        </div>
        

        <ul>
            <li><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 


            <!-- <br>
            LOG DETAILS <br> -->
                    <input type="hidden" name="logid"  value="<?php echo $_SESSION['logId']; ?>">
                <br>     <br>     
                    <input type="hidden" name="date_logout"  value="<?php echo $_SESSION['logPosition']; ?>">
                <br><br>     
                    <input type="hidden" name="logUsername"  value="<?php echo $_SESSION['logUsername']; ?>">
                <br>     <br>     
                    <input type="hidden" name="Updatedate_logout"  value="<?php echo $date_logout; ?>">
                <br><br>     
                    <input type="hidden" name="Updatelogout_time"  value="<?php echo $logout_time; ?>">
                
                    <br><br>
        </form></span>     
        



   </div>



   <!-- main content -->
   <div class="main">
        <!-- contents -->
        <div class="dashboard">
                <!-- <div class="calendar">
                    <div class="calendar__picture">
                        <h2>18, Sunday</h2>
                        <h3>November</h3>
                    </div>
                    <div class="calendar__date">
                        <div class="calendar__day">M</div>
                        <div class="calendar__day">T</div>
                        <div class="calendar__day">W</div>
                        <div class="calendar__day">T</div>
                        <div class="calendar__day">F</div>
                        <div class="calendar__day">S</div>
                        <div class="calendar__day">S</div>
                        <div class="calendar__number"></div>
                        <div class="calendar__number"></div>
                        <div class="calendar__number"></div>
                        <div class="calendar__number">1</div>
                        <div class="calendar__number">2</div>
                        <div class="calendar__number">3</div>
                        <div class="calendar__number">4</div>
                        <div class="calendar__number">5</div>
                        <div class="calendar__number">6</div>
                        <div class="calendar__number">7</div>
                        <div class="calendar__number">8</div>
                        <div class="calendar__number">9</div>
                        <div class="calendar__number">10</div>
                        <div class="calendar__number">11</div>
                        <div class="calendar__number">12</div>
                        <div class="calendar__number">13</div>
                        <div class="calendar__number">14</div>
                        <div class="calendar__number">15</div>
                        <div class="calendar__number">16</div>
                        <div class="calendar__number">17</div>
                        <div class="calendar__number calendar__number--current">18</div>
                        <div class="calendar__number">19</div>
                        <div class="calendar__number">20</div>
                        <div class="calendar__number">21</div>
                        <div class="calendar__number">22</div>
                        <div class="calendar__number">23</div>
                        <div class="calendar__number">24</div>
                        <div class="calendar__number">25</div>
                        <div class="calendar__number">26</div>
                        <div class="calendar__number">27</div>
                        <div class="calendar__number">28</div>
                        <div class="calendar__number">29</div>
                        <div class="calendar__number">30</div>
                    </div>
                </div> -->



            <div class="time">

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
</html> 

