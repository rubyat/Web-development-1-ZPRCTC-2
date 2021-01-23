<?php 


    $news_id = $_GET['news_id'];
    include"inc/con.php";

    $sql = "DELETE FROM news WHERE news_id=$news_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: news.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }



    $conn->close();

?>