<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";
    require "../php-landing/date_and_time.php";

   

    
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - ADMIN MENU</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>

<style>

    .main-chart {
        /* width: 1000px; */
        height: auto;
        background-color: none;
        /* background: #444e80; */
        color: #abafc6;
        border-radius: 5px;
        padding: 20px;
       
        font-family: 'Arimo', sans-serif;
        /* overflow-x: auto; */

        display: flex;
        flex-direction: column;

    }

    .year-stats {
        white-space: nowrap;
        max-height: 170px;
        
        margin-left: 100px;
        margin-top:  100px;
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
        width: 700px;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        /* position: relative; */
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

<div class="adminSales">
    
     <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li   style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 

        </form>    
        



   </div>

   <div class="main">
        <div class="header">
                
                <!-- <div class="search-bar">
                    <form action="#" method="POST">
                        <input type="text" name="search" class="search-txt">
                        <button type="submit" name="search-btn" class="search-btn">
                            <img src="../PROJECT/Images/search-icon.png" alt="search">
                        </button>
                    </form>
                </div>
                        -->

                <div class="date"><?php echo $_SESSION['date'] ?></div>
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                <div class="profile"></div>
        </div>

        <div class="content">
                <div class="sale-analytics">
                        <span class="title">Sales Analytics</span>
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
                    <span class="title">Order Analytics</span>
                    <!-- <div id="barchart_material" style="width: 300px; height: 200px;"></div>
                    -->
                    <div class="main-chart">
                        <div class="year-stats">
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Sun</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Mon</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Tues</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Wed</p>
                            </div>
                            <div class="month-group selected">
                                <div class="bar h-100"></div>
                                <p class="month">Thurs</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Fri</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Sat</p>
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
                                <p style="color: #000;">Total: 907+</p>
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

        <table>
        <tr>
            <th>No.</th>
            <th>Order Code</th>
            <th>Employee in Charge</th>
            <th>Total No.</th>
            <th>Mode of Payment</th>
            <th>Time</th>
            <th>Dine-in/Take-out</th>
            <th>Voucher or Discount<br>(% or Amount)</th>
            <th>Total Amount</th>
        </tr>

        <tr>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
        </tr>

        <tr>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
            <td>sample data</td>
        </tr>

        

    </table>
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
</html>