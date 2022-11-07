<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/read.php';
    require '../php-landing/readLogbook.php';


    // echo $_SESSION['username'];
    // echo $_SESSION['dateLogin'];
    // echo $_SESSION['timelogin'];
     


    
//    echo  $_SESSION['logId'] .'<br>'; 
//     echo $_SESSION['logPosition'] .'<br>';
//     echo $_SESSION['logUsername'].'<br>' ;
//    echo $_SESSION['date_login'] .'<br>';
//    echo $_SESSION['login_time'] .'<br>';
//    echo $_SESSION['date_logout'] .'<br>'; 
//    echo $_SESSION['logout_time'];

    // if(isset($_POST['logout'])){
    //     $updateDate = trim($_POST['Updatedate_logout']);
    //     $updateTime = trim($_POST['Updatedate_logout']);
    // }
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
                        <li style=" border-bottom: #fff 5px solid;"><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
                    </ul>
                
        </div>

        <!-- ADMIN HEADER -->
        


        <div class="adminProfile-header">

            <div class="changedp">
                <img src="../PROJECT/Images/default-pic.png" class="profile-pic" alt="profile pic">

            </div>  


            <h1>ADMIN  <?php echo $_SESSION['username'];?></h1>

            
            <div class="line" style="width: 550px;"></div> 
            <div class="line" style="width: 550px; margin-top: 10px;"></div>

                
        
            
                <span><form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 


                    <!-- <br>
                    LOG DETAILS <br> -->
                    <input type="hidden" name="logid" id=time" value="<?php echo $_SESSION['logId']; ?>">
                <br>     <br>     
                    <input type="hidden" name="date_logout" id="" value="<?php echo $_SESSION['logPosition']; ?>">
                <br><br>     
                    <input type="hidden" name="logUsername" id="" value="<?php echo $_SESSION['logUsername']; ?>">
                <br>     <br>     
                    <input type="hidden" name="Updatedate_logout" id="" value="<?php echo $_SESSION['date']; ?>">
                <br><br>     
                    <input type="hidden" name="Updatelogout_time" id="" value="<?php echo $_SESSION['time']; ?>">
                
                    <br><br>
                </form></span>

            
        </div>

        <hr>

        <!-- ADMIN DETAILS -->
        <div class="adminProfile-details">
                

            <div class="details">
                    
                <form action="" method="post">


                    <div class="form-container">
                        <label for="">Id</label>
                        <input type="text" class="input" name="updateId" id="updateId" value="<?php  echo $_SESSION['id'];?>" />
                        <label for="updateId" class="edit">Edit</label>
                    </div>   
                
                
                

            
                    <div class="form-container">
                        <label for="username">Username</label>
                        <input type="text" class="input" name="updateUsername" id="updateUsername" value="<?php  echo $_SESSION['username'];?>" />
                        <label for="updateUsername" class="edit">Edit</label>
                    </div>
                        
                
                
        
                    <div class="form-container">
                        <label for="email">Email</label>
                        <input type="text" class="input" name="updateEmail" id="updateEmail" value="<?php  echo $_SESSION['email']; ?>"/>
                        <label for="updateEmail" class="edit">Edit</label>
                    </div>  
                
            
                    <div class="form-container">
                        <label for="password">Password</label>
                        <input type="password" class="input" name="updatePassword" id="updatePassword" value="<?php echo $_SESSION['password'] ?>"/>
                        <label for="updatePassword" class="edit">Edit</label>
                    </div>  
            
                    <div class="form-container">
                        <label for="position">Position</label>
                        <b><input type="text" class="input" name="updatePosition" id="updatePosition" value="<?php echo $_SESSION['position'] ?>"/ disabled></b>
                        <label for="updatePosition" class="edit" disabled>Edit</label>
                
                    </div>  

                    <input type="submit" value="SAVE CHANGES">
                    <br>
                    <input type="submit" value="Delete">

                </form>
                    
                




            </div>

        </div>
           

        
                

             
                
            
        


    </div>


</body>
</html>