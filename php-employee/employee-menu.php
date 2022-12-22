<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";
    require "../php-landing/date_and_time.php";
    require "../php-admin/menu-database/voucher-file.php";
    require "../php-employee/order-database.php";
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 


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


     
    //add add ons
    if(isset($_POST['add-addons'])){
        
       $addons_id = $_POST['add-ons-id'];
       

       $querySelect_Addons = "SELECT * FROM addons WHERE id= '$addons_id'";
       $sqlSelect_Addons = mysqli_query($connAddons, $querySelect_Addons);
        $result_Addons = mysqli_fetch_array($sqlSelect_Addons);
       
     }




     //add voucher
    if(isset($_POST['add_voucher'])){
        
        $voucher_id = $_POST['updateVoucher_Id'];
        
 
        $querySelect_Voucher = "SELECT * FROM vouchers WHERE id= '$voucher_id'";
        $sqlSelect_Voucher = mysqli_query($queryVoucher, $querySelect_Voucher);
         $result_Voucher = mysqli_fetch_array($sqlSelect_Voucher);
        
      }

    // // read order
    // $queryRead_order = "SELECT * FROM tb_orders";
    // $sqlRead_order = mysqli_query($connOrder,$queryRead_order);

        


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
    
    <div class="add-orders" style="position: fixed; right: 0;">
        <div class="add-order-title">ADD ORDERS</div>

        <div class="order">
            
            <form action="../php-employee/employee-menu.php" method="POST">
                <div class="order-number">
                        
                    <label for="order-num">ORDER NUMBER</label>
                    <input type="text" name="order-num" id="order-num">
                </div>
                                
                <div class="order-container" style="height: 400px; padding: 0;">
                    
                <?php 
                   // read order
                    $queryRead_order = "SELECT * FROM tb_orders";
                    $sqlRead_order = mysqli_query($connOrder,$queryRead_order);  

                        
                    if(mysqli_num_rows($sqlRead_order)>0){
    
                        while($results = mysqli_fetch_array($sqlRead_order)) {?>




                    <div class="order-box" style="width: 350px; ">




                            <img src="../php-admin/menu-database/uploads/<?php echo $results['order-name'].".png"?>">
                            
                            <div class="info" style="margin-lfet: 50px;">
                                <input type="text" name="order-name" id="order-name" value="<?php echo $results['order-name']?>" readonly="readonly"  style="background: #5A5A5A; border:none; color: white; font-size: 15px; letter-spacing: 1px;"><br><br>
                                
                                <span>Php</span>
                                <input type="number" name="order-price" class="order-price" value="<?php echo $results['order-price']?>" style="width: 75px; background: #5A5A5A; border:none; font-size: 18px" readonly="readonly" ><br>
                                
                                <span>Qty:</span>
                                <input type="number" name="order-qty" class="order-qty" value="1" style="width: 50px;" onchange="subTotal();" min="1"  >
                                <br>  
                                <pre><span>Add Ons: </span><input type="text" name="order-addons" id="order-addons" value="<?php echo $result_Addons['add-ons-name'] ?>" style="width: 100px; font-size: 10px; background: none; border-none;" "><input type="number" name="addons-price" id="addons-price" class="addons-price" value="<?php echo $result_Addons['price']?>"  style="width: 50px;" >
                                </pre>
                                
                                <span>Php</span>
                                <input type="number" name="subtotal" id="subtotal" class="subtotal" value="0"  style="width: 65px; background: #5A5A5A; border:none; font-size: 20px; font-weight: 800;" readonly="readonly">
                                <input type="hidden" name="order-id" value="<?php echo $results['id']?>">

                            </div>
                              
                            <label for="remove-order"><img src="../PROJECT/Images/delete-icon.png" style="width: 20px; height: 20px; cursor: pointer;"></label>      
                             <input type="submit" name="remove-order" value=" " id="remove-order" style="background: #5A5A5A; border:none;">

                    </div>


                    

                <?php } }?>        
                        
                </div>
                    <div class="grandtotal" style=" height: 100px; padding: 20px;background: lightblue; font-family: sans-serif; display: flex; justify-content: center; align-item: center; gap: 15px; " >
                                
                            <h3>TOTAL: </h3>
                            <div class="" style="display: inline;">
                                <input type="text" name="voucher-name" id="voucher-name" value="<?php echo $result_Voucher['voucher_name'] ?>" style="background: none; width: 60px; border:none">
                                <span>-</span><input type="number" name="voucher-price" id="voucher-price" value="<?php echo $result_Voucher['voucher_percentage']?>" style="width: 35px; border: none; background:none; color: #000';" onchange="minusVoucher();"><span>%</span>
                                <hr>
                                <br>
                                <span>Php </span>
                                <input type="number" name="grand-total" id="grand-total" class="grand-total" value=""  style="width: 75px; font-family: sans-serif; font-size: 25px; font-weight: 900; letter-height: 2px; background: none; border: none;">
                            
                            </div>
                           
                        
                            
                            <input type="submit" value="Place Order" name="place-order" class="place-order" style="width: 100px; height: 40px; background: blue; border: none; border-radius: 5px; font-family: sans-serif; color: white; cursor: pointer;">
                    
                    </div>

            </form>
                

        </div>

        


    </div>
</div>

    <!-- <div class="footer">
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

    </div>      -->
    

</body>
<script src="../javascript/date-time.js"></script>
<script src="../javascript/events.js"></script>

<script src="../shopping cart/script.js"></script>

 <script>
 if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
 </script>


 <script>
  //  
        var productPrice = document.querySelectorAll('.order-price');
        var qty = document.querySelectorAll('.order-qty');
        // var subTotal = document.querySelectorAll('.sub-total');
        var order = document.querySelectorAll('.order-box');
        
        var grandTotal = document.querySelector('.grand-total');
        var sample = document.querySelectorAll('.sample');
        var subtotal = document.querySelectorAll('.subtotal');
        var totaltext = document.querySelectorAll('.total-text');

        var vouPer = document.querySelector('#voucher-price');
        var addons = document.querySelectorAll('addons-price')

   
        const subTotal = () =>{
            gt = 0;
            for(let i=0;i<order.length;i++){

                subtotal[i].value = (productPrice[i].value* qty[i].value);
               
                gt = gt+ (productPrice[i].value * qty[i].value) ;

             
                
            }
            grandTotal.value = gt;

            // var percent =vouPer.value/100;
             
            // grandtotal.value = grandtotal.value - (grandtotal.value*percent);
 
        }


        subTotal();

           
          
    

       

        

 </script>


</html>

