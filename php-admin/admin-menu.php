<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";
    require "../php-landing/date_and_time.php";

   if(isset($_POST['allMenu'])){
        
        $queryRead_product= "SELECT * FROM tb_product";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
   }   
   
   if(isset($_POST['coffee'])){

        $category = 'COFFEE';
            
        $queryRead_product= "SELECT * FROM tb_product WHERE Category='$category'";
        $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    }  


    if(isset($_POST['bottled'])){

        $category = 'BOTTLED';
            
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
                    

                    <li><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 

                        <form action="../php-admin/admin-menu.php" method="POST">
                            <input type="submit" name="allMenu" value="ALL MENU" style="witdh: 100%; height: 100%; cursor: pointer;">


                        </form>
                    </li>
                   
                    <li><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 

                        <form action="../php-admin/admin-menu.php" method="POST">
                            <input type="submit" name="coffee" value="COFFEE" style="witdh: 100%; height: 100%; cursor: pointer;">


                        </form>
                    </li>

                    <li><img src="../PROJECT/Images/milktea-icon.png" alt="milktea-icon"> 

                        <form action="../php-admin/admin-menu.php" method="POST">
                            <input type="submit" name="bottled" value="BOTTLED" style="witdh: 100%; height: 100%; cursor: pointer;">


                        </form>
                    </li>

                    <!-- <li>COFFEE</li> -->
                    <!-- <li>Bottled</li> -->
                    <li>Frappucino</li>
                    <li>Float Series</li>
                    <li>Non-Coffee</li>
                    <li>Fruit Tea Series</li>
                    <li>Fruit Splash Yogurt Smoothies</li>
                    <li>Yogurt</li>
                    <li>Cheese Macchiato Series</li>
                    <li>Barista's Choice</li>
                    <li>Gourmet Series</li>
                    <li>Tea Latte Series</li>
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