<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $adminID = $_SESSION['admin_id'];

    $sql = "UPDATE admin SET Name = '$name', Email = '$email'";

    if (!empty($password)) {
        $sql .= ", Password = '$password'";
    }

    $sql .= " WHERE AdminID = '$adminID'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Profile updated successfully";
        header("Location: ../pages/Settings.php");
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ../pages/Settings.php");
    }

    $conn->close();
    exit();
}
?>
