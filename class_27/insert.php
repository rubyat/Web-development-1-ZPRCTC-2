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


    $sql = "INSERT INTO student (roll, name, mobile, address, class)
    VALUES (4, 'Shofik', '787867','Shapla, Rangpur','1')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   



    $conn->close();
?> 