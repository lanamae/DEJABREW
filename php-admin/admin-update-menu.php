<?php
    require "../php-admin/menu-database/menu-database.php";
    require "../php-admin/menu-database/read.php";


    if(isset($_POST['edit'])){
        $edit_productId  = trim($_POST['product-id']);
        $edit_productName  = trim($_POST['product-name']);
        $edit_productPrice  = trim($_POST['product-price']);
        $edit_productCategory = trim($_POST['product-category']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEJA BREW - UPDATE MENU</title>

    
    
    <link rel="shortcut icon" href="../PROJECT/Images/dejabrew-logo.png" type="image/x-icon">
   
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>



<body>
    <div class="updateMenu">
        
        

            <!-- ---------------------------------------------------------------------------- -->
            <!-- MODAL UPDATE PRODUCT -->
            <div class="modal-container">
                <div class="modal-header">
                    <h2>UPDATE </h2>
                    
                </div>
        
                <div class="modal-body">
                    <form action="../php-admin/menu-database/update.php" method="POST" enctype="multipart/form-data">
                        
                        <input type="file" name="update_Image" id="uploadProduct" class="uploadProduct"> <br>

                        <input type="text" name="updateId" value="<?php echo $edit_productId ?>">
                        
                        <label for="productName">UPDATE Product Name : </label>
                        <input type="text" name="update_productName" id="productName" value="<?php echo $edit_productName?> "> <br>

                        <label for="productPrice">UPDATE Product Amount:</label>
                        <input type="number" name="update_productPrice" id="productPrice" value="<?php echo $edit_productPrice?> "> <br>
                        

                        <label for="productCategory">UPDATE Product Category:</label>  
                        <input type="text" name="update_productCategory" id="productCategory" value="<?php echo $edit_productCategory?> "> <br>
                        
                        <!-- folder for images -->
                        <input type="hidden" name="folder" value="Product-Images">
                        
                        <input type="submit" name="update" value="UPDATE" class="create-btn">
                    </form>
                </div>
            </div>
            
        

            
            <!-- ----------------------------------------------------------------------------------- -->


    

        

        
    </div>


    
</body>

<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>