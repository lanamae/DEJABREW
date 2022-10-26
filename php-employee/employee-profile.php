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
    
<p><i>EMPLOYEE PROFILE</i>
<br><br>

<form action="../php-landing/logout.php">
    <input type="submit" value="LOGOUT">



    
</form>
</body>
</html>