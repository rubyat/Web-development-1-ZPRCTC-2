<?php 


    $slider_id = $_GET['slider_id'];
    include"inc/con.php";

    $sql = "DELETE FROM slider WHERE slider_id=$slider_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();

?>