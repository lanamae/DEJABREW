<?php
session_start();

$connss =mysqli_connect('localhost','root','','products');

if(isset($_POST['add-order-btn'])){

    if(isset($_SESSION['cart'])){

        $session_array_id = array_column($_SESSION['cart'], "id");

        if(!in_array($_GET['id'], $session_array_id)){

            // $session_array_id=array_column($_SESSION['cart'], column_key)
            $session_array = array (
                'id' => $_GET['id'],
                'productImage' => $_POST['productImage'],
                'productName' => $_POST['productName'],
                'Price' => $_POST['Price'],
                'Category' => $_POST['Category']
            );

            $_SESSION['cart'][] = $session_array;

        }

        else{

                $session_array = array (
                'id' => $_GET['id'],
                'productImage' => $_POST['productImage'],
                'productName' => $_POST['productName'],
                'Price' => $_POST['Price'],
                'Category' => $_POST['Category']
                );

                $_SESSION['cart'][] = $session_array;
        }
    }


}

                $query="SELECT * FROM tb_product";
                $result=mysqli_query($connss,$query);


                while($row = mysqli_fetch_array($result)){?>

                <div class="product">

                            <?php//  $pic = '../php-admin/menu-database/uploads/' .$results['productImage'];
                           // $_SESSION['pic'] = $pic;
                            ?>
                            
<!--                     
                        <h3 class="product-name"><?php //$row['productName'] ?> </h3>                       
                        <img src="<?php //echo $pic?>" alt="productImage" class="product-img">
                        <h4 class="product-amount"><?php //echo "Php " . $row['Price'] ?></h4> -->
                        
                        <form action="../php-employee/try.php?id=$row['id]?>" method="GET" enctype="multipart/form-data">
                          
                            <input type="text" name="product-id" value="<?php $row['id'] ?>">
                            <input type="text" name="product-name" value="<?php $row['productName'] ?>">
                            <input type="text" name="product-price" value="<?php $row['Price'] ?>">
                            <input type="text" name="product-category" value="<?php $row['Category'] ?>">
                            
                            <input type="submit" name="add-order-btn" value="ADD to Orders" class="add-orders-btn  ">
                        </form>

                      

                        
                </div> <?php } 
                   var_dump($_SESSION['cart']); ?>