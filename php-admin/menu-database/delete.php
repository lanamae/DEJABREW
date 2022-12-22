<?php
    require "../menu-database/menu-database.php";
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    if(isset($_POST['delete'])){
        $deleteId = $_POST['deleteId'];

        $queryMenuDelete = "DELETE FROM tb_product WHERE id = $deleteId";
        $sqlMenuDelete = mysqli_query($connProducts, $queryMenuDelete);

        echo "<script>alert('SUCCESSFULLY DELETED')</script>";
        echo "<script>window.location.href='../admin-menu.php'</script>";

    }


?>