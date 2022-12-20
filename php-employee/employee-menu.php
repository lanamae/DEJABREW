<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";
    require "../php-landing/date_and_time.php";
    require "../php-admin/menu-database/voucher-file.php";
    require "../php-employee/order-database.php";




    // delete order
    if(isset($_POST['remove-order'])){
        $order_id = $_POST['order-id'];

        $queryDelete_order = "DELETE FROM `tb_orders` WHERE id = '$order_id' ";
        $sqlDelete_order = mysqli_query($connOrder, $queryDelete_order);

        
        // echo "<script>windows.location.href='../php-employee/employee-menu.php'</script>";
        
    }


    // Insert Order
    if(isset($_POST['add-orders-btn'])){
        $product_id = $_POST['product-id'];
        $product_name = $_POST['product-name'];
        $product_price = $_POST['product-price'];

        $queryAdd_order = "INSERT INTO tb_orders VALUES(null, '$product_id', '$product_name', '$product_price')";
        $sqlAdd_order = mysqli_query($connOrder,$queryAdd_order);


        
        
        

    }

    // read order
    $queryRead_order = "SELECT * FROM tb_orders";
    $sqlRead_order = mysqli_query($connOrder,$queryRead_order);

        


    // read voucher
    $queryRead_voucher = "SELECT * FROM vouchers";
    $sqlRead_voucher = mysqli_query($queryVoucher, $queryRead_voucher);

    // -------------------------------
   
    // read add ons
    $queryRead_addons = "SELECT * FROM addons";
    $sqlRead_addons = mysqli_query($connAddons, $queryRead_addons);


    // ------------------------------------------------------

        // sorting menu
    if(isset($_POST['allMenu'])){
        $queryRead_product= "SELECT * FROM tb_product";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }   

    if(isset($_POST['coffee'])){
        $category = 'coffee';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['bottled'])){
        $category = 'bottled';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['frappucino'])){
        $category = 'frappucino';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['float-series'])){
        $category = 'float series';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['non-coffee'])){
        $category = 'non-coffee';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['fruit-tea-series'])){
        $category = 'fruit tea series';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['fruit-splash-yogurt-smoothies'])){
        $category = 'fruit splash yogurt smoothies';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    } 

    if(isset($_POST['yogurt'])){
        $category = 'yogurt';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  

    if(isset($_POST['cheese-macchiato-series'])){
        $category = 'cheese macchiato series';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }

    if(isset($_POST['barista-choice'])){
        $category = "Barista Choice";
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }

    if(isset($_POST['gourmet-series'])){
        $category = 'gourmet series';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }

    if(isset($_POST['tea-latte-series'])){
        $category = 'tea latte series';
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }

    if(isset($_POST['search-btn'])){
        $search_text = $_POST['search'];

        
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$search_text' || productName = '$search_text' ";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);

        
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - MENU</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
<div class="employeeMenu">

      <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li><a href="../php-employee/employee-home.php"><img src="../PROJECT/Images/home-icon.png" alt=""><a href="employee-home.php"></a></li>
            <li  style="width: 50px; height: 50px;
                    background: #000000;
                    padding: 10px;
                    border-radius: 10px;
                    margin-top: 10px; "><a href="../php-employee/employee-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="employee-menu.php"></a></li>
           <li><a href="../php-employee/employee-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="employee-profile.php"></a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">

                <label for="logout"><img src="../PROJECT/Images/logout-icon.png"  class="logout"> </label>
                <input type="submit" name="logout" value="" id="logout" style="visibility: hidden;"> 

        </form>    
        



   </div>'
   
   
    <div class="main">

        <div class="header">
                
            <div class="search-bar">
                <form action="#" method="POST">
                    <input type="text" name="search" class="search-txt">
                    <button type="submit" name="search-btn" class="search-btn">
                        <img src="../PROJECT/Images/search-icon.png" alt="search">
                    </button>
                </form>
            </div>


                <div class="date"><?php echo $_SESSION['date'] ?></div>
                <div id="MyClockDisplay" class="clock" onload="showTime()"></div>

                <div class="profile"></div>
        </div>


        <div class="category">
             <ul>
                

                <label for="allMenu"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="allMenu" name="allMenu" value="ALL MENU">
                    </form>
                </label>
                

                <label for="coffee"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="coffee" name="coffee" value="COFFEE">
                    </form>
                </label>


                <label for="bottled"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="bottled" name="bottled" value="BOTTLED">
                    </form>
                </label>

                <label for="frappucino"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="frappucino" name="frappucino" value="Frappucino">
                    </form>
                </label>

                <label for="float series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="float series" name="float-series" value="Float Series">
                    </form>
                </label>

                <label for="non-coffee"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="non-coffee" name="non-coffee" value="Non-Coffee">
                    </form>
                </label>

                <label for="fruit-tea-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="fruit-tea-series" name="fruit-tea-series" value="Fruit Tea Series" style="font-size: 11px; white-space: normal;">
                    </form>
                </label>

                <label for="fruit-splash-yogurt-smoothies"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon" style="width: 15px; height: 25px;"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="fruit-splash-yogurt-smoothies" name="fruit-splash-yogurt-smoothies" value="Fruit Splash  Yogurt Smoothies" style="font-size: 9px; white-space: normal;">
                    </form>
                </label>

                <label for="yogurt"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="yogurt" name="yogurt" value="Yogurt">
                    </form>
                </label>

                <label for="cheese-macchiato-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="cheese-macchiato Series" name="cheese-macchiato-series" value="Cheese Macchiato Series" style="font-size: 9px; white-space: normal;">
                    </form>
                </label>

                <label for="barista's-choice"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="barista's-choice" name="barista-choice" value="Barista's Choice" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>

                <label for="gourmet-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="gourmet-series" name="gourmet-series" value="Gourmet Series" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>

                <label for="tea-latte-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-employee/employee-menu.php" method="POST">
                        <input type="submit" id="tea-latte-series" name="tea-latte-series" value="Tea Latte Series" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>
             
                
                
            </ul>
        </div>

        <!-- MENU -->
        <div class="product-container">
            <div class="product-table">

                <?php 

                while($results = mysqli_fetch_array($sqlRead_product)){?>

                <div class="product">

                            <?php  $pic = '../php-admin/menu-database/uploads/' .$results['productImage'];
                            $_SESSION['pic'] = $pic;
                            ?>
                            
                    
                        <h3 class="product-name"><?php echo $results['productName'] ?> </h3>                       
                        <img src="<?php echo $pic?>" alt="productImage" class="product-img">
                        <h4 class="product-amount"><?php echo "Php " . $results['Price'] ?></h4>
                        
                        <form action="../php-employee/employee-menu.php" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="product-id" value="<?php echo $results['id'] ?>">
                            <input type="hidden" name="product-name" value="<?php echo $results['productName'] ?>">
                            <input type="hidden" name="product-price" value="<?php echo $results['Price'] ?>">
                            <input type="hidden" name="product-category" value="<?php echo $results['Category'] ?>">
                            
                            <input type="submit" name="add-orders-btn" value="ADD to Orders" class="add-orders-btn  ">
                        </form>

                      

                        
                </div>


                <?php }?>
            </div>
        </div>

        <!-- ADD ONS -->
        
        <hr>
        <div class="add-ons">
            <div class="add-ons-title">ADD ONS</div>

            <div class="add-ons-container">
                    <div class="add-ons-table">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Add  Ons</th>
                            <th>Price</th>
                            <th>Actions</th>
                           
                            
                    
                        </tr>
                        

                        <?php
                        while($results_addons = mysqli_fetch_array($sqlRead_addons)) {?>

                        
                            <td><?php echo $results_addons['id'] ?></td>
                            <td><?php echo $results_addons['add-ons-name'] ?></td>
                            <td><?php echo "Php " .$results_addons['price'] ?></td>
                  

                            <td class="action-addons">
                                <!-- <form action="../php-admin/addons.php" method="POST">
                                    <input type="submit" name="edit_addons" class="edit-addons" value="EDIT">
                                    <input type="hidden" name="updateVoucher_Id" value="<?php echo $results_addons['id'] ?>">
                                    <input type="hidden" name="updateVoucher_Name" value="<?php echo $results_addons['add-ons-name'] ?>">
                                    <input type="hidden" name="updateVoucher_Percentage" value="<?php echo $results_addons['price'] ?>">
                               </form> -->

                                <form action="../php-employee/employee-menu.php" method="POST">
                                    <input type="submit" name="add-addons" class="add-addons" value="ADD">
                                    <input type="hidden" name="add-ons-id" value="<?php echo $results_addons['id'] ?>">
                                </form>
                            </td>

                            
                        </tr>
                    
                        <?php } 
                        ?>


                    </table>


                    </div>
                    
            </div>

           

            
        </div>



        <!-- VOUCHER -->
        <hr>

        <div class="vouchers">

            <p class="voucher-title">VOUCHERS</p>
            

            <div class="voucher-container">
    
                <div class="voucher-table">
                
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>VOUCHER NAME</th>
                            <th>Percentage</th>
                            <th>Price</th>
                            <th>Actions</th>
                            
                    
                        </tr>
                        

                        <?php
                        while($results_voucher = mysqli_fetch_array($sqlRead_voucher)) {?>

                        
                            <td><?php echo $results_voucher['id'] ?></td>
                            <td><?php echo $results_voucher['voucher_name'] ?></td>
                            <td><?php echo $results_voucher['voucher_percentage'] . " %" ?></td>
                            <td><?php echo "P " .$results_voucher['voucher_price'] ?></td>

                            <td class="action-voucher">
                                <form action="../php-employee/employee-menu.php" method="POST">
                                    <input type="submit" name="add_voucher" class="add-voucher" value="ADD">
                                    <input type="hidden" name="updateVoucher_Id" value="<?php echo $results_voucher['id'] ?>">
                                    <input type="hidden" name="updateVoucher_Name" value="<?php echo $results_voucher['voucher_name'] ?>">
                                    <input type="hidden" name="updateVoucher_Percentage" value="<?php echo $results_voucher['voucher_percentage'] ?>">
                                    <input type="hidden" name="updateVoucher_Price" value="<?php echo $results_voucher['voucher_price'] ?>">
                                </form>

                            </td>

                            
                        </tr>
                    
                        <?php } 
                        ?>


                    </table>


                </div>
            </div>

            
            
            
           


        </div>






        <!-- ----------------------------------------------------------------------------------- -->
    </div>    
    
    <div class="add-orders">
        <div class="add-order-title">ADD ORDERS</div>

        <div class="order">
            
            <form action="../php-employee/employee-menu.php" method="POST">
                <div class="order-number">
                        
                    <label for="order-num">ORDER NUMBER</label>
                    <input type="text" name="order-num" id="order-num">
                </div>
                                
                <div class="order-container">
                    
                <?php 
                while($results = mysqli_fetch_array($sqlRead_order)) {?>

                    <div class="order-box" style="background: #5A5A5A;
                            width: 300px;
                            height: 100px;
                            margin-bottom: 30px;
                            display: flex;
                            gap: 8px;
                            justify-content: center;
                            align-items: center;
                            padding: 0px 20px; 
                            border-radius: 10px;">




                        <img src="../php-admin/menu-database/uploads/<?php echo $results['order-name'].".png"?>">
                        
                            <div class="order-name"><?php echo $results['order-name']?></div>
                            <div class="order-price"><?php echo $results['order-price']?></div>
                            <div class="order-qty">
                                
                                <input type="number" name="order-qty" id="order-qty" value="1" class="order-qty" style="width: 50px;" min="1">
                                
                            </div>

                            <input type="hidden" name="order-id" value="<?php echo $results['id']?>">

                            <input type="hidden" name="order-name" value="<?php  $results['order-name']?>">
                            <input type="hidden" name="order-price" value="<?php  $results['order-price']?>">


                        <input type="submit" name="remove-order" value="Remove">

                    </div>


                    

                <?php }?>        
                        
                </div>

                <div class="total">
                    <h1>TOTAL</h1>
                    <div class="total-amount">Php 500.00</div>
                    <input type="submit" value="PLACE ORDER" name="place-order">
                </div>
            </form>
                

        </div>

        <div class="total">
            
        </div>


    </div>
</div>



</body>
<script src="../javascript/date-time.js"></script>
<script src="../javascript/events.js">

<script src="../shopping cart/script.js"></script>
   

alert('testingggg')

</script>
</html>