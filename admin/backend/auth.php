<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../index");
    exit();
}

include 'Conn_db.php';

if (isset($_SESSION['admin_email'])) {
    $email = $_SESSION['admin_email'];
    $sql = "SELECT AdminID, Name, Email, Password FROM admin WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $admin_data = $result->fetch_assoc();
    } else {
        // Handle case where user data is not found
        $_SESSION['error_message'] = "User data not found.";
        header("Location: ../index");
        exit();
    }
} else {
    // Handle case where admin_email is not set
    $_SESSION['error_message'] = "Please login to access this page.";
    header("Location: login.php");
    exit();
}
?>
