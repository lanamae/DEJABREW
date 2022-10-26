<?php
    session_start();
    $_SESSION['status'] = 'invalid';
    
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    echo "<script>window.location.href='../php-landing/landing.php'</script>";
            

    // require '../php-landing/logbook.php';

    // if(isset($_POST['logout_time'])){
    //     $getLogoutTime = trim($_POST['logout_time']);

    //     $queryLogout = "SELECT * FROM log_detailS";
    //     $sqlLogout = mysqli_query($connLog, $queryLogout);
    //     $logDetails = mysqli_fetch_array($sqlLogout);


             
    //     $queryLogbook = "UPDATE log_details SET position = '$position', username='$username', date_log='$getDate', logout_time='$getLogoutTime',)";
    //     $sqlLog = mysqli_query($connLog, $queryLogbook);

    //     echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    // }



   
?>