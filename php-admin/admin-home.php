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

<style>

    .main-chart {
        width: 350px;
        height: 200px;
        background-color: none;
        /* background: #444e80; */
        color: #abafc6;
        border-radius: 5px;
        padding: 20px;
       
        font-family: 'Arimo', sans-serif;
        overflow-x: auto;


    }

    .year-stats {
        white-space: nowrap;
        max-height: 170px;
        /* overflow: hidden; */
    }

    .year-stats:hover {
        /* overflow-x: auto; */
    }

    /* SCROLL BAR STYLE (ONLY WORKS IN CHROME) */
    /* Width */
    /* ::-webkit-scrollbar {
        height: 5px;
        width: 100%;
    } */

    /* Track */
    /* ::-webkit-scrollbar-track {
        background: #444e80;
    } */

    /* Handle */
    /* ::-webkit-scrollbar-thumb {
        background: #abafc6;
        border-radius: 10px;
    } */

    /* ::-webkit-scrollbar-thumb {
        background: #5397d6;
    } */

    .month-group {
        cursor: pointer;
        max-width: 400px;
        height: 110px;
        margin: 10px;
        display: inline-block;
    }

    .bar {
        background-color: #abafc6;
        width: 20px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .month-group:hover .bar,
    .selected .bar {
        background: #5397d6;
    }

    .month-group:hover p,
    .selected p {
        color: #fff;
    }

    .h-25 {
        height: 25%;
    }
    .h-50 {
        height: 50%;
    }
    .h-75 {
        height: 75%;
    }
    .h-100 {
        height: 100%;
    }

    .stats-info {
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        position: relative;
    }

    .graph-container {
        position: relative;
    }

    .percent {
        display: block;
        width: 120px;
        height: 120px;
    }

    .circle {
        stroke: #915db1;
        fill: none;
        stroke-width: 3;
    }

    .circle:nth-child(2) {
        stroke: #e59f3c;
    }

    .circle:nth-child(3) {
        stroke: #5397d6;
    }

    .circle:nth-child(4) {
        stroke: #4cc790;
    }

    .graph-container p {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        color: #fff;
        text-align: center;
    }

    .info p {
        margin-bottom: 10px;
    }

    .info span {
        color: #fff;
    }
</style>



<body>
<div class="adminHome container-fluid mt-2">  
    
    <!-- SIDEBAR -->
   <div class="sidebar col p-2">
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
   <div class="main col p-2">
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
                    <span class="title"> Total Sales</span>
                    <p>PHP 50,000</p> <span>&uarr; this month</span>  
                </div>

                <div class="total-profit">
                    <img src="../PROJECT/Images/chartline-icon.png" alt="profit-icon">
                    <span class="title"> Total Profit</span>
                    <p>PHP 256,000</p> <span>&uarr; this month</span>  
                </div>


                <div class="total-orders"> 
                    <img src="../PROJECT/Images/coffee-icon.png" alt="total orders-icon">
                    <span class="title"> Total Orders</span>
                    <p>+547</p> <span>&uarr; this month</span>  
                </div>

                <div class="sale-analytics">
                    <span class="title"><a href="../php-admin/admin-sales.php">Sales Analytics</a></span>
                     <!-- <div id="chart_div"></div> -->

                    <div class="main-chart">
                        <div class="stats-info">
                            <div class="graph-container">
                                <div class="percent">
                                    <svg viewBox="0 0 36 36" class="circular-chart">
                                        <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    </svg>
                                </div>
                                <p style="color: #000;">Total: $2075</p>
                            </div>

                            <div class="info">
                                <p style="color: #000;">Most expensive category <br /><span style="color: #000; font-weight: bold;">Restaurants & Dining</span></p>
                                <p style="color: #000;">Updated categories <span style="color: #000; font-weight: bold;">2</span></p>
                                <p style="color: #000;">Bonus payments <span style="color: #000; font-weight: bold;">$92</span></p>
                            </div>
                        </div>

                        <div class="year-stats">
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Jan</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Feb</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Mar</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Apr</p>
                            </div>
                            <div class="month-group selected">
                                <div class="bar h-100"></div>
                                <p class="month">May</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Jun</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Jul</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Aug</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Sep</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Oct</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Nov</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Dez</p>
                            </div>
                        </div>

                        
                    </div>

                </div>
                

                <div class="order-analytics">
                     <span class="title"><a href="../php-admin/admin-sales.php">Order Analytics</a></span>
                     <!-- <div id="barchart_material" style="width: 300px; height: 200px;"></div>
                     -->
                     <div class="main-chart">
                        <div class="year-stats">
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Jan</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Feb</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Mar</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Apr</p>
                            </div>
                            <div class="month-group selected">
                                <div class="bar h-100"></div>
                                <p class="month">May</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Jun</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Jul</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Aug</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Sep</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Oct</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Nov</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Dez</p>
                            </div>
                        </div>

                        <div class="stats-info">
                            <div class="graph-container">
                                <div class="percent">
                                    <svg viewBox="0 0 36 36" class="circular-chart">
                                        <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="85, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                                                <path class="circle" stroke-dasharray="30, 100" d="M18 2.0845
                                            a 15.9155 15.9155 0 0 1 0 31.831
                                            a 15.9155 15.9155 0 0 1 0 -31.831" />
                                    </svg>
                                </div>
                                <p style="color: #000;">Total: $2075</p>
                            </div>

                            <div class="info">
                                <p style="color: #000;">Most expensive category <br /><span style="color: #000; font-weight: bold;">Restaurants & Dining</span></p>
                                <p style="color: #000;">Updated categories <span style="color: #000; font-weight: bold;">2</span></p>
                                <p style="color: #000;">Bonus payments <span style="color: #000; font-weight: bold;">$92</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>



<!-- 
        <hr>
        <!-- instructions -->
        <!-- <div class="instruction"> -->
            
        <!-- </div> -->
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

