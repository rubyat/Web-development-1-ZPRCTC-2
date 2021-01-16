<?php 


    $class_id = $_GET['class_id'];
    include"inc/con.php";

    $sql = "DELETE FROM class WHERE class_id=$class_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: class.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();

?>