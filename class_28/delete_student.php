<?php 


    $student_id = $_GET['student_id'];
    include"inc/con.php";

    $sql = "DELETE FROM student WHERE student_id=$student_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();

?>