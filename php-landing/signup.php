<?php
    require './database.php';
    require './read.php';
    //  require "../php-landing/session.php";
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);    
    session_start();
    
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // echo "<script>window.location.href='../php-landing/signup.php'</script>";
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


    
    if(isset($_POST['signup'])){
        $position =trim($_POST['position']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);

        if(empty($position) || empty($username) || empty($email) || empty($password)){
            
            echo "<p style='
            background: #e44040;
            width: 300px;
            height: 200px;
            border-radius: 20px;
            text-align: center;
            position: absolute;
            top: 200px;
            left: 550px;
            z-index: 10;
            padding: 20px; 
            font-size: 25px;
            color: #fff;
            font-family: sans-serif;
            '>Fill up All Fields!<br><br><br> 
           
            
            <a href='signup.php' style='
            text-decoration:none;
            background: #9C9C9C;
            color: #000;
            font-weight: bold;
            padding: 10px 70px;
            border-radius: 10px;
            font-size: 15px;
            '>BACK</a></p>";

        }
        
        // if($resultAccount)
        
        
        else if($password!=$password2){
                echo "<p style='
                background: #e44040;
                width: 300px;
                height: 200px;
                border-radius: 20px;
                text-align: center;
                position: absolute;
                top: 200px;
                left: 550px;
                z-index: 10;
                padding: 20px; 
                font-size: 25px;
                color: #fff;
                font-family: sans-serif;
                '>Password Does not match!<br><br><br> 
            
                
                <a href='login.php' style='
                text-decoration:none;
                background: #9C9C9C;
                color: #000;
                font-weight: bold;
                padding: 10px 70px;
                border-radius: 10px;
                font-size: 15px;
                '>BACK</a></p>";

        }

        

        else{
            $queryCreate = "INSERT INTO useraccounts VALUES(null, '$position', '$username', '$email', '$password') ";
            $sqlCreate = mysqli_query($connection, $queryCreate);

            echo "<script>alert('SUCCESSFULLY CREATED ACCOUNT')</script>";
            echo "<script>window.location.href='signup.php'</script>";
        }


        if(empty($position) || empty($username) || empty($password)){
            echo "<p style='
            background: #e44040;
            width: 300px;
            height: 200px;
            border-radius: 20px;
            text-align: center;
            position: absolute;
            top: 200px;
            left: 550px;
            z-index: 10;
            padding: 20px; 
            font-size: 25px;
            color: #fff;
            font-family: sans-serif;
            '>Fill up all fields!<br><br><br> 
           
            
            <a href='signup.php' style='
            text-decoration:none;
            background: #9C9C9C;
            color: #000;
            font-weight: bold;
            padding: 10px 70px;
            border-radius: 10px;
            font-size: 15px;
            '>BACK</a></p>";

        }

        else{
            $queryLogin = "SELECT * FROM useraccounts WHERE position='$position' AND username = '$username' AND password='$password'";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $userDetails = mysqli_fetch_array($sqlLogin);
            


            if(mysqli_num_rows($sqlLogin) > 0){
                $_SESSION['status'] = 'valid';
                $_SESSION['position'] = $userDetails['position'];
                $_SESSION['username'] = $userDetails['username'];
                $_SESSION['password'] = $userDetails['password'];

                // echo "<script>console.log('Hello testing')</script>";
                
                // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";

                if($_SESSION['position'] == 'admin'){
                    // echo "<script>alert('Hello testing admin')</script>";
                    echo "<script>window.location.href='../php-admin/admin-home.php'</script>";

                }

                

                if($_SESSION['position'] == 'employee'){
                    // echo "<script>alert('Hello testing employee')</script>";
                    echo "<script>window.location.href='../php-employee/employee-home.php'</script>";
                }
            }

            

            else{
                echo "<p style='
                background: #e44040;
                width: 300px;
                height: 200px;
                border-radius: 20px;
                text-align: center;
                position: absolute;
                top: 200px;
                left: 550px;
                z-index: 10;
                padding: 20px; 
                font-size: 25px;
                color: #fff;
                font-family: sans-serif;
                '>Unavailable to create Account!<br><br><br> 
               
                
                <a href='signup.php' style='
                text-decoration:none;
                background: #9C9C9C;
                color: #000;
                font-weight: bold;
                padding: 10px 70px;
                border-radius: 10px;
                font-size: 15px;
                '>BACK</a></p>";

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
                    <label for="admin" class="admintxt"> <img src="../PROJECT/Images/admin-icon.png" alt="admin-icon" class="admin-icon">ADMIN</label>

                    <!-- employee radio -->
                    <input type="radio" name="position" id="employee" class="employee" value="employee">
                    <label for="employee" class="emptxt"><img src="../PROJECT/Images/employee-icon.png" alt="employee-icon" class="employee-icon">EMPLOYEE</label>

                    </div>
            
                <br><br>

                <label for="username" class="label">Username</label><br>
                <input type="text" name="username" id="username" class="username input" placeholder="Enter your Username" required>
                <br><br>

                <label for="email" class="label">Email</label><br>
                <input type="email" name="email" id="email" class="email input" placeholder="user@gmail.com" required>
                <br><br>

                <label for="password" class="label">Password</label><br>
                <input type="password" name="password" id="password" class="password input" placeholder="Enter your Password" required>
                <br><br>

                <label for="password2" class="label">Confirm Password</label><br>
                <input type="password" name="password2" id="password2" class="password2 input" placeholder="Confirm Password" required>
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