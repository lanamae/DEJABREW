<?php
    require "../php-landing/session.php";
    // session_start();

    
    echo 'SESSION:' .$_SESSION['status'] .'<br>';
    echo 'POSITION:' .$_SESSION['position'];
    
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


    // if($_SESSION['status'] == 'valid' || $userDetails['position'] == 'admin'){
    //     echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
            
    // }

    // else if($_SESSION['status'] == 'valid' || $userDetails['position'] == 'employee'){
    //     echo "<script>window.location.href='../php-employee/employee-home.php'</script>";
            
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - EMPLOYEE</title>
</head>
<body>
<h1 > WELCOME TO EMPLOYEE DASHBOARD, </h1>

    <br> <br>
    <a href="employee-profile.php">PROFILE</a></p>
   
</body>
</html> 