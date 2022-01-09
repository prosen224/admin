<?php
    include '../config.php';
    $vendor_delete = $_GET['vendor'];


    $delete = "DELETE FROM `product_info` WHERE vendor='$vendor_delete'";
    $dlt = $conn->query($delete);
    header("Location: http://localhost/myshop/productlist/productlist.php?delete=success");
?>