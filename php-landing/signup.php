<?php
    require './database.php';
    //  require "../php-landing/session.php";
    session_start();
    
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // echo "<script>window.location.href='../php-landing/signup.php'</script>";
    }

    if($_SESSION['status'] == 'valid'){
        if($_SESSION['position'] == 'admin'){
            echo "<script>alert('Hello testing admin')</script>";
        }

        if($_SESSION['position'] == 'employee'){
            echo "<script>alert('Hello testing employee')</script>";
        }
            
    }


    
    if(isset($_POST['signup'])){
        $position =trim($_POST['position']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);

        if(empty($position) || empty($username) || empty($email) || empty($password)){
            
            echo "Cannot be blank";
        }
        
        
        else if($password!=$password2){
            echo "'Password does not match'";
        }

        else{
            $queryCreate = "INSERT INTO userAccounts VALUES(null, '$position', '$username', '$email', md5('$password')) ";
            $sqlCreate = mysqli_query($connection, $queryCreate);

            echo "<script>alert('SUCCESSFULLY CREATED ACCOUNT')</script>";
            echo "<script>window.location.href='signup.php'</script>";
        }
        
    }



    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - SIGN UP </title>
   
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="main-signup">
    



    <div class="signup-modal">
        <div class="signup-container">
            <form action="signup.php" method="POST">
                <h2>SIGN UP</h2>
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

                <label for="email" class="label">Email</label><br>
                <input type="email" name="email" id="email" class="email input" placeholder="Enter your Email">
                <br><br>

                <label for="password" class="label">Password</label><br>
                <input type="password" name="password" id="password" class="password input" placeholder="Enter your Password">
                <br><br>

                <label for="password2" class="label">Confirm Password</label><br>
                <input type="password" name="password2" id="password2" class="password2 input" placeholder="Confirm Password">
                <br><br>

                <input type="submit" name="signup" class="create-btn" value="CREATE ACCOUNT">

               
            </form>

            <div class="haveAccount">
                <p><i>Haven't account?</i><a href="login.php">Login</a></p>
            </div>
        </div>
    </div>

    <div class="background"></div>
</div>
    
</body>
</html>