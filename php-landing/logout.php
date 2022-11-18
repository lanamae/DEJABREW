<?php
    require '../php-landing/logbook.php';
    require '../php-landing/date_and_time.php';
    // require '../php-landing/readLogbook.php';

    session_start();

    $idHello = $_SESSION['logId']; 


    // echo $date_logout;
    // echo $logout_time;

    if(isset($_POST['logout'])){
        $updateDate_logout = $_POST['Updatedate_logout'];
        $updateLogout_time = $_POST['Updatelogout_time'];

        // echo $updateDate_logout;
        // echo $updateLogout_time;
        // echo $idHello;

        
        $queryLogout = "UPDATE log_details SET date_logout = '$updateDate_logout', logout_time = '$updateLogout_time' WHERE id = '$idHello'";
        $sqlLogout = mysqli_query($connLog, $queryLogout);

        
    //  echo "<script>alert('SUCCESSFULLY UPDATED LOG DETAILS')</script>";
    
    }

    else{
        
     echo "<script>alert('CANNOT CHANGE LOGBOOK')</script>";
    
    }


    




  

    // DESTROYING SESSION
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    echo "<script>window.location.href='../php-landing/landing.php'</script>";
    
    //  echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    





   
?>