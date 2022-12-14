<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);   
    require '../php-landing/database.php';
    require "../php-landing/date_and_time.php";
    require '../php-landing/readLogbook.php';
    // session_start();

    // echo $_SESSION['username'];

    $queryEmployee = "SELECT * FROM useraccounts WHERE position = 'employee'";
    $sqlEmployee = mysqli_query($connection, $queryEmployee);
    

    $queryEmployee_log = "SELECT * FROM log_details WHERE position = 'employee'";
    $sqlEmployee_log = mysqli_query($connLog, $queryEmployee_log);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - EMPLOYEES</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<div class="adminEmployee">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 

        </form>    
        



    </div>

    <div class="main">
        <div class="header">
            
            <!-- <div class="search-bar">
                <form action="#" method="POST">
                    <input type="text" name="search" class="search-txt">
                    <button type="submit" name="search-btn" class="search-btn">
                        <img src="../PROJECT/Images/search-icon.png" alt="search">
                    </button>
                </form>
            </div>
                    -->

            <div class="date"><?php echo $_SESSION['date'] ?></div>
            <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

            <div class="profile"></div>
    
        </div>

      <div class="employee-container">
        <div class="employee-table">

        <?php 
                while($employee = mysqli_fetch_array($sqlEmployee)) {?>

                <div class="employee">
                        
                        <img src="../PROJECT/Images/default-pic.png" alt="" srcset="">
                        <span class="name">SAMPLE NAME</span><br>

                        <input type="hidden" name="employee-id" id="employee-id" value="<?php echo $employee['id'] ?>">
                        <div class="username"><strong>Username:</strong> <?php echo $employee['username'] ?> </div>
                        <br>
                        <div class="email" style="white-space: normal;"><strong>Email:</strong> <?php echo $employee['email'] ?></div>
                </div>

                <?php } ?>


            </div>
      </div>

      <hr>

      <div class="logbook">
        <div class="logbook-title">Logbook</div>
        
        <table border="collapsed">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Date login</th>
                <th>Time login</th>
                <th>Date Logout</th>
                <th>Time Logout</th>

            </tr>
           
                <?php

                while($resultLog = mysqli_fetch_array($sqlEmployee_log)) {?>
             <tr>
                        <td><?php echo $resultLog['id'] ?></td>
                        <td><?php echo $resultLog['username'] ?></td>
                        <td><?php echo $resultLog['date_login'] ?></td>
                        <td><?php echo $resultLog['login_time'] ?></td>
                        <td><?php echo $resultLog['date_logout'] ?></td>
                        <td><?php echo $resultLog['logout_time'] ?></td>


                
            </tr>
            <?php } ?>  


        </table>
      </div>


        


    </div>

         
</div>
    
</body>
<script src="../javascript/date-time.js"></script>
</html>