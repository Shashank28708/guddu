<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    

//connection

    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // password and connection not be same 
    $dbname = "test";

   // connect karna hai databse se 

    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

    // connection check karna hai (optional)

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // table inser karna hai 
    $sql = "INSERT INTO registration (name, email, title, description) VALUES ('$name', '$email', '$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo " Record inserted successfully!";
    } else {
        echo " Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

