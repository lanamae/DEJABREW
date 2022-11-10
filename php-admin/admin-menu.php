<?php
    

    



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



<body>
<div class="main-adminMenu">
    <div class="menu">
     <!-- sidebar -->
        <div class="sidebar">
                <div class="sidebar-header">
                    <p class="side-title">MENU</p>
                    <div class="close">&times;</div>
                    
                </div>
                
                <ul>
                    <li>COFFEE</li>
                    <li>Bottled</li>
                    <li>Frappucino</li>
                    <li>Float Series</li>
                    <li>Non-Coffee</li>
                    <li>Fruit Tea Series</li>
                    <li style="font-size: 12px;">Fruit Splash Yogurt Smoothies</li>
                    <li>Yogurt</li>
                    <li>Chees Macchiato Series</li>
                    <li>Barista's Choice</li>
                    <li>Gourmet Series</li>
                    <li>Tea Latte Series</li>

                </ul>
                </ul>
        </div>



        <!-- NAVBAR -->
        <div class="navbar">
                <ul>
                    <li><a href="admin-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                    <li style=" border-bottom: #fff 5px solid;"><a href="admin-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                    <li><a href="admin-sales.php"><img src="../PROJECT/Images/sales-icon.png" alt="sales icon" style="width: 30px; height: 30px"></a></li>
                    <li><a href="admin-employee.php"><img src="../PROJECT/Images/emp-icon.png" alt="employee icon" style="width: 30px; height: 30px"></a></li>
                    <li><a href="admin-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>

                    <!-- <li>
                        <form action="admin-profile.php" method="post">
                            <input type="submit" value="PROFILE" /></li>
                        </form>
                        
                        -->
                
                </ul>
        </div>

        <!-- menu bar -->
        <div class="menu-bar">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

            
        </div>
        
        <!-- menu header -->
        <div class="menu-header">
            <div class="line" style="width: 100%; margin-left: 0px; height: 2px;"></div> 
            <marquee class="title-menu">Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu .Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu . Deja brew Menu .</marquee> 
            
            <div class="line" style="width: 100%; margin-left: 0px; height: 2px;"></div> 
            </div>

        <!-- menu category -->
        <!-- <div class="menu-category">
            <ul>
                <li>Cofee</li>
                <li>Bottled</li>
                <li>Frappucino</li>
                <li>Float Series</li>
                <li>Non-Coffee</li>
                <li>Fruit Tea Series</li>
                <li></li>
            </ul>
        </div> -->

        <!-- add product button -->
        <div class="add" onclick="showModal()">
            +
        </div>
        

        
        <!-- add product form MODAL  -->
        <div class="modal-container">
            <div class="modal-header">
                <h2>ADD PRODUCT</h2>
                <div class="modal-close" onclick="closeModal()">&times;</div>
            </div>
            
            <div class="modal-body">
               <form action="" method="post">
                    <input type="file" name="uploadProduct" id="uploadProduct" class="" value="UPLOAD PRODUCT IMAGE"> <br>

                    <label for="productName">Product Name : </label>
                    <input type="text" name="productName" id="productName" placeholder="Enter Product Name"> <br>

                    <label for="productPrice">Php:</label>
                    <input type="text" name="productPrice" id="productPrice" placeholder="Enter Product Price"> <br>
                    <input type="submit" value="CREATE" class="create-btn">
                 </form>
            </div>
        </div>

            <!-- MENU -->
        <div class="product-container">

                <!-- <div class="product" style="justify-content: flex-start; background: #9C9C9C; border: 2px solid red;">
                <h2 class="product-name">ADD PRODUCT</h2>
                <form action="" class="addproduct-form">
                    <input type="file" name="uploadProduct" id="uploadProduct" class="" value="UPLOAD PRODUCT IMAGE"> <br>

                    <label for="productName">Product Name : </label>
                    <input type="text" name="productName" id="productName" placeholder="Enter Product Name"> <br>
                    
                    <label for="productPrice">Php:</label>
                    <input type="text" name="productPrice" id="productPrice" placeholder="Enter Product Price"> <br>
                    <input type="submit" value="CREATE" class="create-btn">
                </form>

                

            </div>        -->




            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

            

            <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="Label as Unavailable" class="unavail-btn">
                </form>

            </div>

        </div>

        <div class="overlay"></div>
        

    </div>

   
    
</div>


    
</body>

<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>