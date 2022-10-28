<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/read.php';
    require '../php-landing/readLogbook.php';


    $datesamp = $_SESSION['date'];
    echo $datesamp;

    echo $fetchData['position'];
    echo $fetchData['email'];
    echo $fetchData['username'];
    echo $fetchData['password'];
    
    
    
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

    <div class="main-adminProfile">

    
        <!-- NAV BAR -->
        <div class="navbar">

                    <ul>
                        <li><a href="admin-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-sales.php"><img src="../PROJECT/Images/sales-icon.png" alt="sales icon" style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-employee.php"><img src="../PROJECT/Images/emp-icon.png" alt="employee icon" style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
                    </ul>
                
        </div>

        <!-- ADMIN HEADER -->
        <div class="adminProfile-header">

            <h1>ADMIN  <?php echo $_SESSION['username'];?></h1>
            <form action="../php-landing/logout.php" method="POST">
                <input type="submit" name="logout" value="LOGOUT"> 


                
                <input type="text" name="date_logout" id="time" value="<?php echo $date_logout; ?>">
               
                <input type="text" name="logout_time" id="time" value="<?php echo $logout_time; ?>">
               
                <br><br>
            </form>


            <form action="admin-profile.php" method="get">
                <input type="submit" name="test" value="Click Here">
            </form>
            
        </div>

        <hr>

        <!-- ADMIN DETAILS -->
        <div class="adminProfile-details">
      

            <table> 
                <tr>
                    <td>
                        <form action="" method="post">
                            <label for="username">Username</label>
                            <input type="text" name="updateUsername" id="updateUsername" value="<?php  echo $fetchData['username'];?>" />
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>
                        <form action="" method="post">
                            <label for="email">Email</label>
                            <input type="text" name="updateEmail" id="updateEmail" value="<?php  echo $fetchData['email']; ?>"/>
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>
                        <form action="" method="post">
                            <label for="password">Password</label>
                            <input type="password" name="updatePassword" id="updatePassword" value="<?php echo $fetchData['password'] ?>"/>
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>
                        <form action="" method="post">
                            <label for="position">Position</label>
                            <input type="text" name="updatePosition" id="updatePosition" value="<?php echo $fetchData['position'] ?>"/ disabled>
                            <input type="submit" value="Edit" disabled>
                        </form>
                    </td>
                </tr>


            </table>

             
                
            
        </div>


    </div>


</body>
</html>