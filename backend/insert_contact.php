<?php
session_start();
include '../admin/backend/Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO contact (FullName, Email, Message)
            VALUES ('$full_name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Your message has been sent successfully";
        header("Location: ../index.html");
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ../index.html");
    }

    $conn->close();
    exit();
}
?>
