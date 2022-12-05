<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";

   

    

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
                    <br>

                    <!-- for voucher -->
                    <div class="line" style="margin-left: 0; margin-bottom: 10px; width: 243px; height: 3px;"></div>
                    <!-- <hr> -->
                    <h1>Voucher List</h1><br>
                    
                    <li>Sample Voucher</li>
                    <li>Sample Voucher</li>
                    <li style="background: #5A5A5A; margin-bottom: 20px; border-radius: 10px; border: 2px white solid;">+ Add Voucher</li>
                    

                </ul>
                </ul>
        </div>

<!-- ---------------------------------------------------------------- -->
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

        <!-- menu bar icon-->
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

       
        <!-- ---------------------------------------------------------------- -->
        <!-- add product button  - the red plus button-->
        <div class="add" onclick="showModal()">
            +
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
        <div class="voucher">
        </div>
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

        <div class="overlay"></div>

        
        <!-- ----------------------------------------------------------------------------------- -->


   

    

    
</div>


    
</body>

<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>