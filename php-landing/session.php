<?php
    session_start();

    
    // echo 'SESSION:' .$_SESSION['status'] .'<br>';
    // echo 'USERNAME:' .$_SESSION['username'];
    
    if($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';

        // echo 'invalid session';
        // echo "<script>window.location.href='../php-admin/admin-home.php'</script>";
        
        unset($_SESSION['position']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    
        echo "<script>window.location.href='../php-landing/landing.php'</script>";
                
       
    }



    
?>