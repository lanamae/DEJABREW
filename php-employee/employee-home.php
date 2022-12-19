<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);   

    require "../php-landing/session.php";
    require "../php-landing/date_and_time.php";
    require "../php-landing/read.php";
    require '../php-landing/logbook.php';
    require '../php-landing/database.php';
    require '../php-landing/readLogbook.php';


    date_default_timezone_set('Asia/Manila');  
    $current_timezone = date_default_timezone_get();
    //    echo $current_timezone . "<br>";
    
    $hours = date("h");
    $minutes = date("i");
    $seconds = date("s");
    $setHour =  date("A");
    
    $month = date("M");
    $dateNum = date("d");
    $year = date("Y");
    $day = date("D");


    $_SESSION['month'] = $month;
    $_SESSION['dateNum'] = $dateNum;
    $_SESSION['year'] = $year;
    $_SESSION['day'] = $day;




    $_SESSION['date'] = date("M-d-Y");
    $_SESSION['time'] = $hours . ":". $minutes . ":" .$seconds .$setHour;
     
    $date_login = $_SESSION['date'];
    $login_time = $_SESSION['time']; 

     

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
<div class="employeeHome">  
    
    <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/home-icon.png" alt=""><a href="employee-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="employee-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="employee-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 


            <!-- <br>
            LOG DETAILS <br> -->
                    <input type="hidden" name="logid"  value="<?php echo $_SESSION['logId']; ?>">
                <br>     <br>     
                    <input type="hidden" name="date_logout"  value="<?php echo $_SESSION['logPosition']; ?>">
                <br><br>     
                    <input type="hidden" name="logUsername"  value="<?php echo $_SESSION['logUsername']; ?>">
                <br>     <br>     
                    <input type="hidden" name="Updatedate_logout"  value="<?php echo $date_logout; ?>">
                <br><br>     
                    <input type="hidden" name="Updatelogout_time"  value="<?php echo $logout_time; ?>">
                
                    <br><br>
        </form></span>     
        



   </div>



   <!-- main content -->
   <div class="main">
        <!-- contents -->
        <div class="dashboard">
            <div class="header">
                <!-- <div class="date"><?php echo $_SESSION['date'] ?></div> -->
                <!-- <div id="MyClockDisplay" class="clock" onload="showTime()"></div> -->

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
                Employee <?php echo $_SESSION['username'];?> 
            </p>

            <div class="content">


                <div class="date-container">
                    <h1 class="month"><?php echo $_SESSION['month']?></h1>
                    <h3 class="dateNum"><?php echo $_SESSION['dateNum'] ?></h3>
                    <p class="day"><?php echo $_SESSION['day'] ?></p>
                     
                </div>

                <div class="text">
                    <p>Customer is waiting for you!</p>
                 
                </div>

                <div class="clock-container">
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                </div>

                <div class="total-hours">
                    <span class="title">Total Hours</span>
                    <p>800+</p>
                    
                </div>


                <div class="sale-analytics">
                    <span class="title">Sales Analytics</span>
                     <!-- <div id="chart_div"></div> -->
                     <!-- <div id="root"></div> -->
                </div>
                

                <div class="order-analytics">
                     <span class="title">Order Analytics</span>
                     <!-- <div id="barchart_material" style="width: 300px; height: 200px;"></div> -->
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


<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(chart);

        function chart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Money');
            data.addColumn('number', 'Coins');
            data.addRows([
              ['EUR', 2],
              ['USD', 1],
              ['GBP', 1],
              ['SEK', 1],
              ['HUF', 1]
            ]);

            var options = {'title': 'My Coins in multiple currencies!', 'width': 500, 'height': 400, 'legend': 'left'};
            var chart = new google.visualization.PieChart(document.getElementById('root'));
            chart.draw(data, options);
        }
    </script>
</html> 

