<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/read.php';
    require '../php-landing/readLogbook.php';


       // error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);      
    // UPDATE Profile
    if(isset($_POST['save-changes'])){
        $updateId = trim($_POST['updateId']);
        $updateUsername = trim($_POST['updateUsername']);
        $updateEmail = trim($_POST['updateEmail']);
        $updatePassword = trim($_POST['updatePassword']);

        $queryUpdate_Accounts = "UPDATE useraccounts SET username= '$updateUsername', email = '$updateEmail', password = '$updatePassword' WHERE id = '$updateId' ";
        $sqlUpdate_Accounts = mysqli_query($connection, $queryUpdate_Accounts);

        echo "<script>alert('LOGIN AGAIN TO SHOW CHANGES.')</script>";
        
        // echo "<script>window.location.href='../php-admin/admin-profile.php'</script>";

        echo "<script>window.location.href='../php-landing/logout.php'</script>";

        
    }
 
    if(isset($_POST['delete-account'])){
        $updateId = trim($_POST['updateId']);

        $queryDelete_Account = "DELETE FROM useraccounts WHERE id = $updateId";
        $sqlDelete_Accounts = mysqli_query($connection, $queryDelete_Account);

        echo "<script>alert('ACCOUNT HAS BEEN DELETED.')</script>";
        echo "<script>window.location.href='../php-landing/logout.php'</script>";
        // echo "<script>window.location.href='../php-landing/landing.php'</script>";
    }

   
 



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

<div class="employeeProfile">
        <!-- SIDEBAR -->
    <div class="sidebar">
            <div class="sidebar-header">
                <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
            

            
            </div>
            

            <ul>
                <li><img src="../PROJECT/Images/home-icon.png" alt=""><a href="employee-home.php">Dashboard</a></li>
                <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="employee-menu.php">Menu</a></li>
                <li  style="background: #000000;
                        border-radius: 10px;
                        margin-top: 5px; "><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="employee-profile.php">Profile</a></li>
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


    <div class="main">

            <!-- ------------------------------ -->
        <!-- ADMIN HEADER -->
        <div class="employeeProfile-header">

        <div class="changedp">
            <img src="../PROJECT/Images/default-pic.png" class="profile-pic" alt="profile pic">

        </div>  

        <h1>Employee  <?php echo $_SESSION['username'];?></h1>

        <span>
            
        <!-- <form action="../php-landing/logout.php" method="POST">
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
        <!-- </form></span> -->


        </div>

        <hr>

        <!-- ADMIN DETAILS -->
        <div class="employeeProfile-details">
            

            <div class="details">
                    
                <form action="" method="post">


                    <div class="form-container">
                        <label for="">Id</label>
                        <input type="text" class="input" name="updateId" style="margin-left: 65px;" id="updateId" value="<?php  echo $_SESSION['id'];?>" />
                        <label for="updateId" class="edit">Edit</label>
                    </div>   
                
                    <div class="form-container">
                        <label for="username">Username</label>
                        <input type="text" class="input" name="updateUsername" style="margin-left: 0px;" id="updateUsername" value="<?php  echo $_SESSION['username'];?>" />
                        <label for="updateUsername" class="edit">Edit</label>
                    </div>
                        
                    <div class="form-container">
                        <label for="email">Email</label>
                        <input type="text" class="input" name="updateEmail"  style="margin-left: 35px;" id="updateEmail" value="<?php  echo $_SESSION['email']; ?>"/>
                        <label for="updateEmail" class="edit">Edit</label>
                    </div>  
                
                    <div class="form-container">
                        <label for="password">Password</label>
                        <input type="password" class="input" name="updatePassword"  style="margin-left: 5px;" id="updatePassword" value="<?php echo $_SESSION['password'] ?>"/>
                        <label for="updatePassword" class="edit">Edit</label>
                    </div>  

                    <div class="form-container">
                        <label for="position">Position</label>
                        <b><input type="text" class="input" name="updatePosition"  style="margin-left: 15px;" id="updatePosition" value="<?php echo $_SESSION['position'] ?>"/ disabled></b>
                        <label for="updatePosition" class="edit" disabled>Edit</label>
                
                    </div>  

                    <input type="submit" name="save-changes" class="saveChanges-btn" value="SAVE CHANGES">
                    <br><br>
                    <input type="submit" name="delete-account" class="deleteAccount-btn" value="Delete Account">

                </form>
                    
                




            </div>

        </div>


    </div>

    

    
            

            
            
        
    


</div>


</body>
</html>