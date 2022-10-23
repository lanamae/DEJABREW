<?php
    require "../php-landing/session.php";
    // session_start();

    
    // echo 'SESSION:' .$_SESSION['status'] .'<br>';
    // echo 'POSITION:' .$_SESSION['position'];
    
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
    <title>DEJA BREW - ADMIN</title>

    <link rel="stylesheet" href="../css/style.css">
    
</head>



<body>
   <div class="main-adminHome">

    <!-- head section -->
    <div class="head-section">
        <!-- NAVBAR -->
        <div class="navbar">
            <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
            
            <ul>
                <li><a href=""><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                <li><a href=""><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                <li><a href=""><img src="../PROJECT/Images/sales-icon.png" alt="sales icon" style="width: 30px; height: 30px"></a></li>
                <li><a href=""><img src="../PROJECT/Images/emp-icon.png" alt="employee icon" style="width: 30px; height: 30px"></a></li>
                <li><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
            </ul>
        
        </div>

        <!-- HEADING -->
        
    </div>

        <!-- admin instructions -->
        <div class="admin-ins">


        </div>


   </div>
</body>
</html> 