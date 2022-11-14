<?php
    require '../php-landing/database.php';

    // session_start();

    // echo $_SESSION['username'];

    $queryEmployee = "SELECT * FROM useraccounts WHERE position = 'employee'";
    $sqlEmployee = mysqli_query($connection, $queryEmployee);
    // $employee =  mysqli_fetch_array($sqlEmployee);

    // if(mysqli_num_rows($sqlEmployee) >0){
        
    //     echo $employee['id'];
    //     echo $employee['username'];

        
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - EMPLOYEES</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <div class="main-adminEmployee">

        <!-- EMPLOYEE HEADER -->
        <div class="employee">

            <div class="navbar">
                    
                    <ul>
                        <li><a href="admin-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-sales.php"><img src="../PROJECT/Images/sales-icon.png" alt="sales icon" style="width: 30px; height: 30px"></a></li>
                        <li  style=" border-bottom: #fff 5px solid;"><a href="admin-employee.php"><img src="../PROJECT/Images/emp-icon.png" alt="employee icon" style="width: 30px; height: 30px"></a></li>
                        <li><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>

                        <!-- <li>
                            <form action="admin-profile.php" method="post">
                                <input type="submit" value="PROFILE" /></li>
                            </form>
                            
                         -->
                    
                    </ul>
                
            </div>

            <div class="employee-header">
                <p class="title-employee">EMPLOYEE</p> 
                <div class="line" style="width: 360px; margin-left: 0px;"></div> 
                <div class="line" style="width: 360px; margin-left: 0px;"></div> 
            </div>


        <!--EMPLOYEE CONTAINER  -->
            <div class="employee-container">

                <div class="employee-table">

                <div class="employee">
                    Employee Sample

                    ID: 
                </div>




                </div>

            </div>


        </div>

         
    </div>
    
</body>
</html>