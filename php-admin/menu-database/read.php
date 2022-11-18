<?php
     require "../php-admin/menu-database/menu-database.php";


    $queryRead_product = "SELECT * FROM tb_product";
    $sqlRead_product = mysqli_query($connProducts, $queryRead_product);

    
   
?>

