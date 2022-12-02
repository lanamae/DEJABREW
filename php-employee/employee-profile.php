<?php
    require "../php-landing/session.php";
    // session_start();

    
    // // echo 'SESSION:' .$_SESSION['status'] .'<br>';
    // // echo 'USERNAME:' .$_SESSION['username'];
    
    // if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
    //     $_SESSION['status'] = 'invalid';

    //     // echo 'invalid session';
    //     // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
        
    //     unset($_SESSION['position']);
    //     unset($_SESSION['username']);
    //     unset($_SESSION['email']);
    //     unset($_SESSION['password']);
    
    //     echo "<script>window.location.href='../php-landing/landing.php'</script>";
                
       
    // }
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
    <div class="main-employeeProfile">
        <!-- NAVBAR -->
        <div class="navbar">
                            
            
            <ul>
                <li><a href="employee-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                <li><a href="employee-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                <li><a href="employee-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
            </ul>
                        
        </div>
        
        <!-- ADMIN HEADER -->
        <div class="employeeProfile-header">

            <div class="changedp">
                <img src="../PROJECT/Images/default-pic.png" class="profile-pic" alt="profile pic">

            </div>  


            <h1>EMPLOYEE <?php echo $_SESSION['username'];?></h1>

                <span>
                    
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
                    <input type="hidden" name="Updatedate_logout"  value="<?php echo $_SESSION['date']; ?>">
                <br><br>     
                    <input type="hidden" name="Updatelogout_time"  value="<?php echo $_SESSION['time']; ?>">
                
                    <br><br>
                </form></span>

            
        </div>

        <hr>

        <!-- ADMIN DETAILS -->
        <div class="employeeProfile-details">
                

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
                        <input type="text" class="input" name="updateEmail" id="updateEmail" value="<?php  echo $_SESSION['email'] ?>"/>
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

                    <input type="submit" class="saveChanges-btn" value="SAVE CHANGES">
                    <br>
                    <input type="submit" class="deleteAccount-btn" value="Delete Account">


                </form>
                    
                




            </div>

        </div>
    


            

        
            
        



    </div>

    
</body>
</html>