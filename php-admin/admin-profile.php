<?php
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require '../php-landing/logbook.php';

    // if(isset($_PST['logout'])){
    //     $getLogoutTime = trim($_POST['logout_time']);

    //     $queryLogout = "SELECT * FROM log_detailS";
    //     $sqlLogout = mysqli_query($connLog, $queryLogout);
    //     $logDetails = mysqli_fetch_array($sqlLogout);


             
    //     $queryLogbook = "UPDATE log_details SET position = '$position', username='$username', date_log='$getDate', logout_time='$getLogoutTime',)";
    //     $sqlLog = mysqli_query($connLog, $queryLogbook);

    //     echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - ADMIN</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    
<p><i>ADMIN PROFILE</i>
<br><br>

<form action="../php-landing/logout.php">
    <input type="submit" name="logout" value="LOGOUT"> 
    <label for="time" class="label">Time</label><br>
                <input type="text" name="logout_time" id="time" value="<?php echo $time; ?>">
                <br><br>
</form>
    <div class="main-adminProfile">
        <div class="adminProfile-header">

            <h1>ADMIN  <?php echo $_SESSION['username'];?></h1>

            
        </div>




    </div>


</body>
</html>