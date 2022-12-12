<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "products";


    $queryVoucher = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "Error found";
    }

    // else{
    //     echo "connected successfully";
    // }


    if(isset($_POST['create-voucher'])){
        $voucher_name = trim($_POST['voucher_name']);
        $voucher_percentage = trim($_POST['voucher_percentage']);
        $voucher_price = trim($_POST['voucher_price']);

        $queryAddVoucher = "INSERT INTO vouchers VALUES(null, '$voucher_name', '$voucher_percentage', '$voucher_price')";
        $sqlAddvoucher = mysqli_query($queryVoucher, $queryAddVoucher);

        echo "<script>window.location.href='../admin-menu.php'</script>";

    }

    // read voucher
   
    // $queryRead_voucher = "SELECT * FROM vouchers";
    // $sqlRead_voucher = mysqli_query($queryVoucher, $queryRead_voucher);

    // echo "<script>window.location.href='../php-admin/admin-menu.php'";





?>