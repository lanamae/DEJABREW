<?php
    require "../menu-database/menu-database.php";


    if(isset($_POST['delete'])){
        $deleteId = $_POST['deleteId'];

        $queryMenuDelete = "DELETE FROM tb_product WHERE id = $deleteId";
        $sqlMenuDelete = mysqli_query($connProducts, $queryMenuDelete);

        echo "<script>alert('SUCCESSFULLY DELETED')</script>";
        echo "<script>window.location.href='../admin-menu.php'</script>";

    }


?>