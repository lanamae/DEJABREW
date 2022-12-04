<?php
    require "../php-landing/logbook.php";
    // require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require "../php-landing/read.php";
   
 

   $usernameSamp = $_SESSION['username'];
   $getDateLoginSamp = $_SESSION['datelogin'];
   $getLogoutTimeSamp = $_SESSION['timelogin'];
    


    $queryLog = "SELECT * FROM log_details WHERE username='$usernameSamp' AND date_login='$getDateLoginSamp' AND login_time='$getLogoutTimeSamp'";
    $sqlLog = mysqli_query($connLog, $queryLog);
    $logData = mysqli_fetch_array($sqlLog);

        
        $_SESSION['logId']  = $logData['id'];   


        
        $_SESSION['logPosition'] =  $logData['position'];
        $_SESSION['logUsername'] = $logData['username'];

        $_SESSION['date_login'] = $logData['date_login'];
        $_SESSION['login_time'] =$logData['login_time'];
        $_SESSION['date_logout'] =$logData['date_logout'];
        $_SESSION['logout_time']= $logData['logout_time'];



        
        
        // echo $_SESSION['logId']  ;


        
        // echo $_SESSION['logPosition'];
        // echo $_SESSION['logUsername'];

        // echo $_SESSION['date_login'] ;
        // echo $_SESSION['login_time'] ;
        // echo $_SESSION['date_logout'] ;
        // echo $_SESSION['logout_time'];

    

  
    



?>