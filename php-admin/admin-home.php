<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);    
    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require "../php-landing/read.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/readLogbook.php';

    

    // echo $_SESSION['username'];
    // echo $_SESSION['dateLogin'];
    // echo $_SESSION['timelogin'];

    // $usernameSamp = $_SESSION['username'];
    // $getDateLoginSamp = $_SESSION['dateLogin'];
    // $getLogoutTimeSamp = $_SESSION['timelogin'];

     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - ADMIN</title>

    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>
<body>
<div class="adminHome">  
    
    <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 
           
        </form></span>     
        



   </div>



   <!-- main content -->
   <div class="main">
        <!-- contents -->
        <div class="dashboard">
            <div class="header">
                <div class="date"><?php echo $_SESSION['date'] ?></div>
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                <div class="profile"></div>
            </div>

            <p class="greetings"> 
                <?php
                    if($setHour == "AM"){
                        echo  "Good Morning, ";
                    }

                    else if($hours<6 && $setHour == "PM"){
                        echo  "Good Afternoon,";
                    }

                    else if($hours>=6 && $setHour == "PM" ){
                        echo  "Good Evening,";
                    }

                
                

                ?>        
                Admin <?php echo $_SESSION['username'];?> 
            </p>

            <div class="content">


                <div class="total-sales">
                    <img src="../PROJECT/Images/money-icon.png" alt="money-icon">
                    <span class="title"> Top Sales</span>
                    <p>PHP 50,000</p> <span>&uarr; this month</span>  
                </div>

                <div class="total-profit">
                    <img src="../PROJECT/Images/chartline-icon.png" alt="profit-icon">
                    <span class="title"> Top Profit</span>
                    <p>PHP 256,000</p> <span>&uarr; this month</span>  
                </div>


                <div class="total-orders"> 
                    <img src="../PROJECT/Images/coffee-icon.png" alt="total orders-icon">
                    <span class="title"> Top Orders</span>
                    <p>+547</p> <span>&uarr; this month</span>  
                </div>

                <div class="sale-analytics">
                    <span class="title">Sales Analytics</span>
                     <div id="chart_div"></div>
                </div>
                

                <div class="order-analytics">
                     <span class="title">Order Analytics</span>
                     <div id="barchart_material" style="width: 300px; height: 200px;"></div>
                </div>
            </div>
            
        </div>




        <hr>
        <!-- instructions -->
        <div class="instruction">
            
        </div>
   </div>
      
   

   
</div>  
 <!-- FOOTER -->
     <div class="footer">
            <img src="../PROJECT/Images/dejabrew-logo.png" class="logo" alt="dejabrew logo">
                  
            <div class="footer-details" style="display:flex;">
                <div class="column1">
                    <h4>Deja brew</h4><br>  
                    <span>95 National Road Pulilan Bulacan</span><br> <br> <br> <br>
                    <p>All Right Reserved 2023 &copy;</p>   
                </div>

                <div class="column2">
                    <h4>Page Content</h4> <br>
                    <p><a href="admin-home.php">Home</a></p>
                    <p><a href="admin-menu.php">Menu</a></p>
                    <p><a href="admin-sales.php">Sales</a></p>
                    <p><a href="admin-employees.php">Employees</a></p>
                    <p><a href="admin-profile.php">Profile</a></p>
                </div>

                <div class="column3">
                    <h4>Social</h4><br>

                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Twitter</a></p>
                    <p><a href="#">Instagram</a></p>
                    <p><a href="#">FGmail</a></p>
                </div>
                
            </div>

    </div>                

</body>

    <script src="../javascript/date-time.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>

        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('number', 'X');
            data.addColumn('number', 'Sales');

            data.addRows([
                [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
                [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
                [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
                [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
                [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
                [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
                [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
                [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
                [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
                [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
                [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
                [66, 70], [67, 72], [68, 75], [69, 80]
            ]);

            var options = {
                hAxis: {
                title: ''
                },
                vAxis: {
                title: ''
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
            }
    </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Days', 'Dine-in', 'Take-out'],
          ['S', 1190, 340],
          ['M', 1000, 400],
          ['T', 1170, 460],
          ['W', 660, 1120],
          ['T', 760, 221],
          ['F', 989, 332],
          ['S', 748, 456],
          
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 -->

  </html>

</html> 

