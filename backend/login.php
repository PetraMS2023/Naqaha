<?php
session_start();
include '../admin/backend/Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // استعلام للتحقق من البريد الإلكتروني
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['user_name'] = $user['name'];
            
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../pages-en/registration.php");
        }
    } else {
        header("Location: ../pages-en/registration.php");
    }

    $stmt->close();
    $conn->close();
}
?>
