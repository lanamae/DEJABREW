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
    <title>DEJA BREW - MENU</title>

    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <div class="main-employeeMenu">
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
                    <div class="line" style="margin-left: 0; margin-bottom: 10px;"></div>
                    <h1>Voucher List</h1><br>
                    
                    <li>Sample Voucher</li>
                    <li>Sample Voucher</li>
                    <li style="background: #5A5A5A; margin-bottom: 20px; border-radius: 10px; border: 2px white solid;">+ Add Voucher</li>
                    

                </ul>
                </ul>
        </div>



        <!-- NAVBAR -->
        <div class="navbar">
                    
                    
                    <ul>
                        <li><a href="employee-home.php"><img src="../PROJECT/Images/home-icon.png" alt="home icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="employee-menu.php"><img src="../PROJECT/Images/menu-icon.png" alt="menu icon"style="width: 30px; height: 30px"></a></li>
                        <li><a href="employee-profile.php"><img src="../PROJECT/Images/prof-icon.png" alt="profile icon" style="width: 30px; height: 30px"></a></li>
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
            
            <!-- MODAL UPLOAD PRODUCT -->
            <div class="modal-body">
               <form action="../php-admin/menu-database/create.php" method="POST" enctype="multipart/form-data">
                    <img src="<?php echo $results['image'] ?>" alt="" class="productImg">
                    <input type="file" name="uploadProduct" id="uploadProduct" class="uploadProduct" value="UPLOAD PRODUCT IMAGE"> <br>

                    <label for="productName">Product Name : </label>
                    <input type="text" name="productName" id="productName" placeholder="Enter Product Name"> <br>

                    <label for="productPrice">Product Amount:</label>
                    <input type="text" name="productPrice" id="productPrice" placeholder="Enter Product Price"> <br>
                    

                    <label for="productCategory">Product Category:</label>  
                    <input type="text" name="productCategory" id="productCategory" placeholder="Enter Product Category"> <br>
                    
                    <!-- folder for images -->
                    <input type="hidden" name="folder" value="Product-Images">
                    
                    <input type="submit" name="create-product" value="CREATE" class="create-btn">
                 </form>
            </div>
        </div>


        <!-- ---------------------------------------------------------------------------------- -->
            <!-- MENU -->
        <div class="product-container">
            <div class="product-table">

                <?php 

                while($results = mysqli_fetch_array($sqlRead_product)){?>

                <div class="product">

                   

                        <h3 class="product-name"><?php echo $results['productName'] ?></h3  >
                        <img src="../PROJECT/Images/<?php echo $results['productName'] . ".png" ?>" alt="" class="product-img">
                        <h4 class="product-amount"><?php echo "Php " . $results['Price'] ?></h4>


                        <form action="">
                            <input type="submit" value="UPDATE" class="prodUpdate-btn">
                        </form>

                        <form action="">
                            <input type="submit" value="DELETE" class="delete-btn">
                        </form>

                        
                </div>


                <?php }?>
            </div>


           

            <!-- <div class="product">
                <h2 class="product-name">Sample Name</h2>
                <img src="../PROJECT/Images/Almond Tea Latte.png" alt="" class="product-img">
                <h4 class="product-amount">PHP 00.00</h4>

                <form action="">
                    <input type="submit" value="UPDATE" class="prodUpdate-btn">
                </form>

                <form action="">
                    <input type="submit" value="DELETE" class="delete-btn">
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
                    <input type="submit" value="DELETE" class="delete-btn">
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
                    <input type="submit" value="DELETE" class="delete-btn">
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
                    <input type="submit" value="DELETE" class="delete-btn">
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
                    <input type="submit" value="DELETE" class="delete-btn">
                </form>

            </div>
             -->

        </div>

        <div class="overlay"></div>
    
    </div>



</body>
<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>