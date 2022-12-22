<?php
    require "../menu-database/menu-database.php";
    
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    
    // folder for image
    $target_dir = "uploads/"; 

    // image name
    $target_file = $target_dir . basename($_FILES["uploadProduct"]["name"]);

    // error if 0, no error if 1
    $uploadOk = 1;

    // image extension
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["create-product"])) {

        // check file if image
      $check = getimagesize($_FILES["uploadProduct"]["tmp_name"]);

      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } 
      
      else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }
    
    // Check file size
    if ($_FILES["uploadProduct"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    
    else {
      
      if (move_uploaded_file($_FILES["uploadProduct"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["uploadProduct"]["name"])). " has been uploaded.";

        $productImage = basename( $_FILES["uploadProduct"]["name"]);
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productCategory = strtolower($_POST['productCategory']);

        $queryProducts = "INSERT INTO tb_product VALUES(null, '$productImage', '$productName', '$productPrice', '$productCategory')";
        $sqlProduct = mysqli_query($connProducts, $queryProducts);

        echo "new record in database";
        echo "<script>window.location.href='../admin-menu.php'</script>";
      } 
      
      else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


   
?>