<?php
    require './menu-database/menu-database.php';


    $queryRead_product = "SELECT * FROM tb_product";
    $sqlRead_product = mysqli_query($connProducts, $queryRead_product);
    $results_product = mysqli_fetch_array($sqlRead_product);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>
<body>
    <h2>DATA</h2>

    <table border="collapsed">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        <?php
        while($result_)>0){ ?>
    


        <tr>
            <td><?php echo $results_product['id'] ?></td>
            <td>Sample Image</td>
            <td>Sample Name</td>
            <td>Sample Price</td>
            <td>Sample Category</td>
        </tr>

        <?php }?>
    </table>




</body>
</html>