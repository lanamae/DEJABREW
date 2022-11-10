<?php
    require '../php-landing/logbook.php';
    require '../php-landing/date_and_time.php';
    // require '../php-landing/readLogbook.php';

    session_start();


    // $logidNum = trim($_POST['logid']);

    

    $idHello = $_SESSION['logId']; 



    // $dateHello =  $_SESSION['date']; 
    // $timeHello =  $_SESSION['time']; 

    date_default_timezone_set('Asia/Manila');  
    $current_timezone = date_default_timezone_get();
    //    echo $current_timezone . "<br>";

    $hours = date("h");
    $minutes = date("i");
    $seconds = date("s");
    $setHour =  date("A");

    $newdate = date("M-d-Y");
    $newtime = $hours . ":". $minutes . ":" .$seconds .$setHour;

    // echo $idHello;
    // echo  $dateHello;
    // echo $timeHello;

    // echo "<br>";
    // echo $newdate;
    // echo $newtime;

    



    $queryLogout = "UPDATE log_details SET date_logout = '$newdate' AND logout_time = '$newtime' WHERE id = '$idHello'";
    $sqlLogout = mysqli_query($connLog, $queryLogout);

  

    // DESTROYING SESSION
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

        echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    // }





   
?>