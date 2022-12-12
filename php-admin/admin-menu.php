<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";
    require "../php-landing/date_and_time.php";
    require "../php-admin/menu-database/voucher-file.php";

   
 
    // read voucher
   
    
   
    $queryRead_voucher = "SELECT * FROM vouchers";
    $sqlRead_voucher = mysqli_query($queryVoucher, $queryRead_voucher);



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
<div class="adminMenu">
     <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-header">
            <img src="../PROJECT/Images/dejabrew-logo.png" alt="" class="logo">
           

           
        </div>
        

        <ul>
            <li><img src="../PROJECT/Images/home-icon.png" alt=""><a href="admin-home.php">Dashboard</a></li>
            <li  style="background: #000000;
                    border-radius: 10px;
                    margin-top: 5px; "><img src="../PROJECT/Images/menu-icon.png" alt=""><a href="admin-menu.php">Menu</a></li>
            <li><img src="../PROJECT/Images/sales-icon.png" alt=""><a href="admin-sales.php">Sales</a></li>
            <li><img src="../PROJECT/Images/emp-icon.png" alt=""><a href="admin-employee.php">Employee</a></li>
            <li><img src="../PROJECT/Images/prof-icon.png" alt=""><a href="admin-profile.php">Profile</a></li>
        </ul>

        
        <form action="../php-landing/logout.php" method="POST">
                    <input type="submit" name="logout" value="LOGOUT" class="logout"> 

        </form>    
        



   </div>

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
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="allMenu" name="allMenu" value="ALL MENU">
                    </form>
                </label>
                

                <label for="coffee"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="coffee" name="coffee" value="COFFEE">
                    </form>
                </label>


                <label for="bottled"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="bottled" name="bottled" value="BOTTLED">
                    </form>
                </label>

                <label for="frappucino"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="frappucino" name="frappucino" value="Frappucino">
                    </form>
                </label>

                <label for="float series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="float series" name="float-series" value="Float Series">
                    </form>
                </label>

                <label for="non-coffee"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="non-coffee" name="non-coffee" value="Non-Coffee">
                    </form>
                </label>

                <label for="fruit-tea-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="fruit-tea-series" name="fruit-tea-series" value="Fruit Tea Series" style="font-size: 11px; white-space: normal;">
                    </form>
                </label>

                <label for="fruit-splash-yogurt-smoothies"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon" style="width: 15px; height: 25px;"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="fruit-splash-yogurt-smoothies" name="fruit-splash-yogurt-smoothies" value="Fruit Splash  Yogurt Smoothies" style="font-size: 9px; white-space: normal;">
                    </form>
                </label>

                <label for="yogurt"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="yogurt" name="yogurt" value="Yogurt">
                    </form>
                </label>

                <label for="cheese-macchiato-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="cheese-macchiato Series" name="cheese-macchiato-series" value="Cheese Macchiato Series" style="font-size: 9px; white-space: normal;">
                    </form>
                </label>

                <label for="barista's-choice"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="barista's-choice" name="barista-choice" value="Barista's Choice" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>

                <label for="gourmet-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="gourmet-series" name="gourmet-series" value="Gourmet Series" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>

                <label for="tea-latte-series"><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 
                    <form action="../php-admin/admin-menu.php" method="POST">
                        <input type="submit" id="tea-latte-series" name="tea-latte-series" value="Tea Latte Series" style="font-size: 12px; white-space: normal;">
                    </form>
                </label>
             
                
                
            </ul>
        </div>



        

        <!----------------------------------------------------------------------------------------  -->
            <!-- MODAL UPLOAD PRODUCT -->
        <!-- add product form MODAL  -->
        <div class="modal-container">
            <div class="modal-header">
                <h2>ADD PRODUCT</h2>
                <div class="modal-close" onclick="closeModal()">&times;</div>
            </div>
            

         
            <div class="modal-body">
               <form action="../php-admin/menu-database/create.php" method="POST" enctype="multipart/form-data">
                       
                    <input type="file" name="uploadProduct" id="uploadProduct" class="uploadProduct" value="UPLOAD PRODUCT IMAGE"> <br>

                    <label for="productName">Product Name : </label>
                    <input type="text" name="productName" id="productName" placeholder="Enter Product Name"> <br>

                    <label for="productPrice">Product Amount:</label>
                    <input type="number" name="productPrice" id="productPrice" placeholder="Enter Product Price"> <br>
                    

                    <label for="productCategory">Product Category:</label>  
                    <input type="text" name="productCategory" id="productCategory" placeholder="Enter Product Category"> <br>
                    
                    <!-- folder for images -->
                    <input type="hidden" name="folder" value="Product-Images">
                    
                    <input type="submit" name="create-product" value="CREATE" class="create-btn">
                 </form>
            </div>
        </div>

       <!-- ------------------------------------------------------------------------------------------------ -->
        <!-- VOUCHER MODAL -->
        <!-- <div class="voucher">
        </div> -->
        <!-- ---------------------------------------------------------------------------------- -->
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
                          
                        <form action="../php-admin/admin-update-menu.php" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="product-id" value="<?php echo $results['id'] ?>">
                            <input type="hidden" name="product-name" value="<?php echo $results['productName'] ?>">
                            <input type="hidden" name="product-price" value="<?php echo $results['Price'] ?>">
                            <input type="hidden" name="product-category" value="<?php echo $results['Category'] ?>">
                            <input type="submit" name="edit" value="UPDATE" class="prodUpdate-btn">
                        </form>

                        <form action="../php-admin/menu-database/delete.php" method="POST">
                            <input type="submit" name="delete"value="DELETE" class="delete-btn">
                            <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?> ">
                        </form>

                        
                </div>


                <?php }?>
            </div>
        </div>


        <hr>

        <div class="vouchers">

            <p class="voucher-title">VOUCHERS</p>
            

            <div class="voucher-container">
                <div class="voucher-form">
                        <p>Add Voucher</p>
                    <form action="../php-admin/menu-database/voucher-file.php" method="POST">
                        
                    
                        <input type="text" name="voucher_name" placeholder="Add  Voucher Name">
                        <br>
                        
                        <input type="text" name="voucher_percentage" placeholder="Add  Voucher Percentage (N/A if not applicable)"> 
                        <br>
                        
                        <input type="text" name="voucher_price" placeholder="Add  Voucher Price (N/A if not applicable)">
                        

                        <input type="submit" name="create-voucher" class="voucher-btn"value="CREATE VOUCHER">
                    </form>
                </div>

                <div class="voucher-table">
                
                <table>
                    <tr>
                        <th>ID</th>
                        <th>VOUCHER NAME</th>
                        <th>Percentage</th>
                        <th>Price</th>

                        
                    <?php 
                    while($results_voucher = mysqli_fetch_array($sqlRead_voucher)) {?>
                    </tr>

                   

                    
                        <td><?php echo $results_voucher['id'] ?></td>
                        <td><?php echo $results_voucher['voucher_name'] ?></td>
                        <td><?php echo $results_voucher['voucher_percentage'] ?></td>
                        <td><?php echo $results_voucher['voucher_price'] ?></td>

                   
                    </tr>

                    <?php } 
                    ?>


                </table>


            </div>
            </div>

            
            
            
           


        </div>

        <div class="overlay"></div> 
        
    
    

        
        <!-- ----------------------------------------------------------------------------------- -->

    </div>
   
    
        <!-- ---------------------------------------------------------------- -->
        <!-- add product button  - the red plus button-->
        <div class="add" onclick="showModal()">
            +
        </div>
    

    
</div>




    
</body>


<script src="../javascript/date-time.js"></script>
<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>