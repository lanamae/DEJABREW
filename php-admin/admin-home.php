<?php 
    session_start();

    echo 'status: ' .$_SESSION['status'];
    echo 'username: ' .$_SESSION['username'];


    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';
    }

    // else if ($_SESSION['status'] = 'valid'){
    //     echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
    // }

    
    // $_SESSION['status'] = 'invalid';
    
    // unset($_SESSION['username']);

    // echo "<script>window.location.href='../php-landing/landing.php'</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - ADMIN</title>
</head>
<body>
    <h1> WELCOME TO ADMIN DASHBOARD, </h1>

    <br> <br>
    <a href="admin-profile.php">PROFILE</a></p>
   
</body>
</html> 