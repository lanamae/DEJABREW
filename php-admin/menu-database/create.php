<?php
    require "../menu-database/menu-database.php";
    

    if(isset($_POST['create-product'])){
        // $image = trim($_POST['uploadProduct']);
        $productName = trim($_POST['productName']);
        $productPrice = trim($_POST['productPrice']);
        $productCategory = trim($_POST['productCategory']);

        if($_FILES['uploadProduct']['error'] == 4){
            echo "<script>alert('FILE DOES NOT EXISTS!')</script>";
        }

        else{
            $fileName = $_FILES['uploadProduct']['name'];
            $fileSize = $_FILES['uploadProduct']['size'];
            $tmpName = $_FILES['uploadProduct']['tmp_name'];

            $validExtensions = ['jpg', 'jpeg', 'png'];
            $imgExtension = explode('.', $fileName);
            $imgExtension  = strtolower(end( $validExtensions));

            if(!in_array($imgExtension, $validExtensions)){
                echo "<script>alert('FILE DOES NOT EXISTS! Image File Extension is Invalid. ')</script>";
            }

            // FUNCTION FOR CONVERTING BYTES INTO KB

            // function get_size($size){
            //     $kb_size = $size / 1024;
            //     $format_size  = number_format($kb_size,2);
            //     return $format_size;
            // }

            // $size = get_size($_FILES['uploadProduct']['size']);

            else if($fileSize > 1000000){
                echo "FILE IS TOO LARGE";
            }

            else{

                $newImageName = uniqid();
                $newImageName .= '.' . $imgExtension;

                $queryProduct = "INSERT INTO tb_product VALUES(null, '$newImageName', '$productName', '$productPrice', '$productCategory')";
                $sqlProduct = mysqli_query($connProducts, $queryProduct);

                echo "<script>alert('SUCCESSFULLY ADDED')</script>";
                echo "<script>window.location.href='../admin-menu.php'</script>";
            }
        }

    }


   
?>