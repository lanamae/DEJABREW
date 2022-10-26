<?php
    session_start();
    $_SESSION['status'] = 'invalid';
    
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    echo "<script>window.location.href='../php-landing/landing.php'</script>";
            




   
?>