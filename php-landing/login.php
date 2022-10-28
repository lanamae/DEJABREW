<?php
    require '../php-landing/database.php';
    require "../php-landing/date_and_time.php";
    require '../php-landing/logbook.php';


    session_start();

    // SESSION SET DEFAULTS
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";


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


// DATABASE CONNECTION
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
                                
                    $getDateLogin = trim($_POST['date_login']);
                    $getLoginTime = trim($_POST['login_time']);
                    // $getPosition = trim($_POST['position']);
                    // $getUsername = trim($_POST['username']);
                    
                    $queryLogbook = "INSERT INTO log_details VALUES(null, '$position', '$username', '$getDateLogin', '$getLoginTime', null, null)";
                    $sqlLog = mysqli_query($connLog, $queryLogbook);

                    echo "<script>alert('SUCCESSFULLY LOG ACCOUNT')</script>";


                    //TRYING GETTING THE DETILAS OFFOR LOGOUT  

                    // $queryLogDetails = "SELECT * FROM log_details WHERE position='$position' AND username = '$username' AND date_log='$date_log' AND login_time='$login_time' AND logout_time='$logout_time')";
                    // $sqlLogDetails = mysqli_query($connLog, $queryLogDetails);
                    // $logDetails = mysqli_fetch_array($sqlLogDetails);


                    // $_SESSION['LogId'] = $logDetails['id'];
                    // $_SESSION['LogPosition'] = $logDetails['position'];
                    // $_SESSION['LogUsername'] = $logDetails['username'];
                    // $_SESSION['LogDate_log'] = $logDetails['date_log'];
                    // $_SESSION['Login_Time'] = $logDetails['login_time'];
                    // $_SESSION['Logout_Time'] = $logDetails['logout_time'];




                }

                if($_SESSION['position'] == 'employee'){
                    // echo "<script>alert('Hello testing employee')</script>";
                    echo "<script>window.location.href='../php-employee/employee-home.php'</script>";
                

                                
                    $getDateLogin = trim($_POST['date_login']);
                    $getLoginTime = trim($_POST['login_time']);
                    // $getPosition = trim($_POST['position']);
                    // $getUsername = trim($_POST['username']);
                    
                    $queryLogbook = "INSERT INTO log_details VALUES(null, '$position', '$username', '$getDateLogin', '$getLoginTime', null, null)";
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
                <input type="text" name="date_login" id="date_login" value="<?php echo $_SESSION['date']; ?>">
                <br><br>


                <!-- HIDDEN TIMES -->
                <!-- <label for="time" class="label">Time</label><br> -->
                <input type="text" name="login_time" id="time" value="<?php echo $_SESSION['time']; ?>">
                <br><br>
             
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