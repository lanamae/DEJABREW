<?php
    require "../menu-database/menu-database.php";
    

    
    // folder for image
    $target_dir = "uploads/"; 

    // image name
    $target_file = $target_dir . basename($_FILES["update_Image"]["name"]);

    // error if 0, no error if 1
    $uploadOk = 1;

    // image extension
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["update"])) {

        // check file if image
      $check = getimagesize($_FILES["update_Image"]["tmp_name"]);

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
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["update_Image"]["size"] > 5000000) {
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
      
      if (move_uploaded_file($_FILES["update_Image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["update_Image"]["name"])). " has been uploaded.";

        $update_Image = basename( $_FILES["update_Image"]["name"]);
        $update_productName = $_POST['update_productName'];
        $update_productPrice = $_POST['update_productPrice'];
        $update_productCategory = $_POST['update_productCategory'];
        $updateId = $_POST['updateId'];

        $query_updateProduct = "UPDATE tb_product SET productImage = '$update_Image', productName = '$update_productName', Price = '$update_productPrice', Category = '$update_productCategory' WHERE id = '$updateId'";
        $sqlUpdateProducts = mysqli_query($connProducts, $query_updateProduct);

        echo "<script>window.location.href='../admin-menu.php'</script>";
      } 
      
      else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


   
?>