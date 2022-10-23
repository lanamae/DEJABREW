<?php
    require '../php-landing/database.php';

    session_start();

    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // echo 'invalid session';
        // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";


    }

    if($_SESSION['status'] == 'valid'){
        echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
            
    }



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
                $_SESSION['username'] = $userDetails['username'];
                
                echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
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