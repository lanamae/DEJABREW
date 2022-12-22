<?php
    require '../php-landing/logbook.php';
    require '../php-landing/date_and_time.php';
    // require '../php-landing/readLogbook.php';

    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    session_start();

    $idHello = $_SESSION['logId']; 

    date_default_timezone_set('Asia/Manila');  
    $current_timezone = date_default_timezone_get();
    //    echo $current_timezone . "<br>";

    $hours = date("h");
    $minutes = date("i");
    $seconds = date("s");
    $setHour =  date("A");

    $_SESSION['date'] = date("M-d-Y");
    $_SESSION['time'] = $hours . ":". $minutes . ":" .$seconds .$setHour;
    
    $date_logout = $_SESSION['date'];
    $logout_time = $_SESSION['time']; 



    // echo $idHello;
    // echo $date_logout;
    // echo $logout_time;

    if(isset($_POST['logout'])){
        // $updateDate_logout = $_POST['Updatedate_logout'];
        // $updateLogout_time = $_POST['Updatelogout_time'];

        // echo $updateDate_logout;
        // echo $updateLogout_time;
        // echo $idHello;

        
        $queryLogout = "UPDATE log_details SET date_logout = '$date_logout', logout_time = '$logout_time' WHERE id = '$idHello'";
        $sqlLogout = mysqli_query($connLog, $queryLogout);

        
    //  echo "<script>alert('SUCCESSFULLY UPDATED LOG DETAILS')</script>";
    
    }

        // else{
            
        //  echo "<script>alert('CANNOT CHANGE LOGBOOK')</script>";
        
        // }


    




  

    // DESTROYING SESSION
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    echo "<script>window.location.href='../php-landing/landing.php'</script>";
    
    //  echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    





   
?>