 <?php


    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "web_class";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "UPDATE student SET name='Zoshim', mobile='877645', address='Munshi Para, Rangpur', class='1', roll='7'  WHERE student_id = 7";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }  



    $conn->close();
?> 