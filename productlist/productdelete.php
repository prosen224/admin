<?php
    include '../config.php';
    
    $idd = $_GET['id'];

    $image = $_GET['image'];
    echo "$image";
    echo $idd;
    
    $delete = "DELETE FROM product_info WHERE id =  $idd ";

    $action = mysqli_query($connection, $delete);

   if($action){
        unlink("img/$image");
        header("location: http://localhost/myshop/productlist/productlist.php?deleted");
   }


?>