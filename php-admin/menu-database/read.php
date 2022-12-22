<?php
     require "../php-admin/menu-database/menu-database.php";

     error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
            $queryRead_product = "SELECT * FROM tb_product";
            $sqlRead_product = mysqli_query($connProducts, $queryRead_product);

    
    
   
?>

