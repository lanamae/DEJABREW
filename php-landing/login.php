<?php
    require '../php-landing/database.php';
    require '../php-landing/date_and_time.php';
    require '../php-landing/logbook.php';



    // echo $_SESSION['date'];

    session_start();

    // SESSION SET DEFAULTS
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


// DATABASE CONNECTION to login
    if(isset($_POST['login'])){
        $position = trim($_POST['position']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(empty($position) || empty($username) || empty($password)){
            echo "Fill up all fields!";
        }

        else{
            $queryLogin = "SELECT * FROM useraccounts WHERE position='$position' AND username = '$username' AND password= md5('$password')";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $userDetails = mysqli_fetch_array($sqlLogin);
        
            $_SESSION['id'] = $userDetails['id'];
            $_SESSION['position'] = $userDetails['position'];
            $_SESSION['username'] = $userDetails['username'];
            $_SESSION['email'] = $userDetails['email'];
            $_SESSION['password'] = $userDetails['password'];

            

            if(mysqli_num_rows($sqlLogin) > 0){
                $_SESSION['status'] = 'valid';
                
                $_SESSION['id'] = $userDetails['id'];
                $_SESSION['position'] = $userDetails['position'];
                $_SESSION['username'] = $userDetails['username'];
                $_SESSION['password'] = $userDetails['password'];

          

                // echo "<script>console.log('Hello testing')</script>";
                
                // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";

                if($_SESSION['position'] == 'admin'){
                    // echo "<script>alert('Hello testing admin')</script>";
                    echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
                    echo "<script>alert('SUCCESSFULLY LOG ACCOUNT')</script>";
                                
                    // LOGIN TIME        //    
                    $getDateLogin = trim($_POST['date_login']);
                    $getLoginTime = trim($_POST['login_time']);
                    $getDateLogout = trim($_POST['date_logout']);
                    $getLogoutTime = trim($_POST['logout_time']);
                    
                    
                    $queryLogbook = "INSERT INTO log_details VALUES(null, '$position', '$username', '$getDateLogin', '$getLoginTime', '$getDateLogout', '$getLogoutTime' )";
                    $sqlLog = mysqli_query($connLog, $queryLogbook);
                   


                    
                    // $queryLogout = "SELECT * FROM log_details";
                    // $sqlLogout = mysqli_query($connLog, $queryLogout);
                    // $logbookfetch = mysqli_fetch_array($sqlLogout);

                    // $SESSION['samplelog'] = $logbookfetch['id'];

                    echo "<script>alert('SUCCESSFULLY LOG ACCOUNT')</script>";

                    $_SESSION['datelogin'] = $getDateLogin;
                    $_SESSION['timelogin'] = $getLoginTime;




                    //READING LOGBOOK DETAILS
                    
                    // $id2 = $_SESSION['id'];
                    // $position2 = $_SESSION['position'];
                    // $username2 = $_SESSION['username'];
                    

                    // $queryLog = "SELECT * FROM log_details WHERE id='$id2' ANDposition='$position2' AND username = '$username2' AND date_login='$getDateLogin' AND login_time='$getLoginTime' AND date_logout='$getDateLogout' AND logout_time='$getLogoutTime'";
                    // $sqlLog = mysqli_query($connLog, $queryLog);
                    // $logData = mysqli_fetch_array($sqlLog);

                    // $_SESSION['logId']  = $logData['id'];
                    // $_SESSION['logPosition'] =  $logData['position'];
                    // $_SESSION['logUsername'] = $logData['username'];
                
                    // $_SESSION['date_login'] = $logData['date_login'];
                    // $_SESSION['login_time'] =$logData['login_time'];
                    // $_SESSION['date_logout'] =$logData['date_logout'];
                    // $_SESSION['logout_time']= $logData['logout_time'];





                }

                if($_SESSION['position'] == 'employee'){
                    // echo "<script>alert('Hello testing employee')</script>";
                    echo "<script>window.location.href='../php-employee/employee-home.php'</script>";
                

                                
                    $getDateLogin = trim($_POST['date_login']);
                    $getLoginTime = trim($_POST['login_time']);
                    $getDateLogout = trim($_POST['date_logout']);
                    $getLogoutTime = trim($_POST['logout_date']);
                    
                    $queryLogbook = "INSERT INTO log_details VALUES(null, '$position', '$username', '$getDateLogin', '$getLoginTime', '$getDateLogout', '$getLogoutTime' )";
                    $sqlLog = mysqli_query($connLog, $queryLogbook);

                    echo "<script>alert('SUCCESSFULLY LOG ACCOUNT')</script>";


                  
                  
                }

                 
               

            }

            else{
                echo "Details not found!";
                $_SESSION['status'] = 'invalid';
                
            }
        }
    
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - LOGIN</title>

    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="main-login">

        <div class="login-modal">

            <div class="login-container">
                <form action="login.php" method="POST">
                    <h2>LOGIN </h2>
                    <div class="radio-container">
                        <!-- admin radio -->
                    <input type="radio" name="position" id="admin" class="admin" value="admin">
                    <label for="admin" class="admintxt"> <img src="../PROJECT/Images/admin-icon.png" alt="admin-icon">ADMIN</label>

                    <!-- employee radio -->
                    <input type="radio" name="position" id="employee" class="employee" value="employee">
                    <label for="employee" class="emptxt"><img src="../PROJECT/Images/employee-icon.png" alt="admin-icon">EMPLOYEE</label>

                    </div>
            
                <br><br>

                <label for="username" class="label">Username</label><br>
                <input type="text" name="username" id="username" class="username input" placeholder="Enter your Username">
                <br><br>

                <label for="password" class="label">Password</label><br>
                <input type="password" name="password" id="password" class="password input" placeholder="Enter your Password">
                <br><br>

                <!-- HIDEN DATE -->
                <!-- <label for="date" class="label">Date</label><br> -->
                <input type="hidden" name="date_login" id="date_login" value="<?php echo $_SESSION['date']; ?>">
               
               <input type="hidden" name="login_time" id="login_time" value="<?php echo $_SESSION['time']; ?>">
              
             
                <input type="hidden" name="date_logout" id="date_logout" value="<?php echo $date_logout; ?>">
               
               <input type="hidden" name="logout_time" id="logout_time" value="<?php echo $logout_time; ?>">
              
                <input type="submit" name="login" class="login-btn" value="LOGIN">

                

                </form>
                <div class="noAccount">
                <i><p>Don't have an account?<a href="signup.php">Create Account</a></p></i>
                </div>

                
            </div>
        </div>
        <div class="background"></div>
    </div>
</body>
</html>