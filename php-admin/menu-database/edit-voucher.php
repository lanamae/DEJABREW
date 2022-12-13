<?php
    require 'c:/xampp/htdocs/SOFTWARE-DESIGN/Source-Code/php-admin/menu-database/voucher-file.php';


    if(isset($_POST['edit_voucher'])){
        $edit_voucherId  = trim($_POST['updateVoucher_Id']);
        $edit_voucherName  = trim($_POST['updateVoucher_Name']);
        $edit_voucherPercentage  = trim($_POST['updateVoucher_Percentage']);
        $edit_voucherPrice = trim($_POST['updateVoucher_Price']);
    }

    if(isset($_POST['update-voucher'])){
        $update_voucherId  = trim($_POST['update_voucher_id']);
        $update_voucherName  = trim($_POST['update_voucher_name']);
        $update_voucherPercentage  = trim($_POST['update_voucher_percentage']);
        $update_voucherPrice = trim($_POST['update_voucher_price']);


        $updateVoucher = "UPDATE vouchers SET voucher_name = '$update_voucherName', voucher_percentage = '$update_voucherPercentage', voucher_price = '$update_voucherPrice' WHERE id = '$update_voucherId'";
        $sqlUpdateVoucher = mysqli_query($queryVoucher, $updateVoucher);  
        
        echo "<script>window.location.href='../admin-menu.php'</script>";
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
    <div class="main-updateMenu">
        
        

            <!-- ---------------------------------------------------------------------------- -->
            <form action="../menu-database/edit-voucher.php" method="POST">
                                
                                <p>Edit Voucher</p>

                                <input type="text" name="update_voucher_id" value="<?php echo $edit_voucherId ?>">

                                <br>
                                <input type="text" name="update_voucher_name" value="<?php echo $edit_voucherName ?>">
                                <br>
                                
                                <input type="text" name="update_voucher_percentage" value="<?php echo $edit_voucherPercentage ?>"> 
                                <br>
                                
                                <input type="text" name="update_voucher_price" value="<?php echo $edit_voucherPrice  ?>">
                                
    
                                <input type="submit" name="update-voucher" class="voucher-btn"value="UPDATE VOUCHER">
                            </form>
            
        

            
            <!-- ----------------------------------------------------------------------------------- -->


    

        

        
    </div>


    
</body>

<script src="../javascript/events.js">
alert('testingggg')

</script>
</html>