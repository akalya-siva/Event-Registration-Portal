<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $event = $_POST['event'];

    $sql = "INSERT INTO registrations (name, email, department, event_name, phone)
            VALUES ('$name', '$email', '$department', '$event', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Registration Successful!</h2>";
        echo "<p><a href='register.html'>Register Another Student</a></p>";
    } else {
        echo "Database Error: " . $conn->error;
    }

    $conn->close();

} else {
    echo "Please submit the form from register.html";
}
?>