<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE Email = '$email' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $admin_data = $result->fetch_assoc();
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $admin_data['AdminID'];
        $_SESSION['admin_email'] = $admin_data['Email'];
        header("Location: ../pages/home.php");
    } else {
        $_SESSION['error_message'] = "Invalid email or password";
        header("Location: ../index.php");
    }

    $conn->close();
    exit();
}
?>
