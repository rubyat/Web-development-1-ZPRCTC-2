<?php 

    session_start();
    if($_SESSION['user_id'] != 1){
        header('Location: index.php');
    }

    $product_id = $_GET['product_id'];
    include"inc/con.php";

    $sql = "DELETE FROM product WHERE product_id=$product_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: product.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();

?>