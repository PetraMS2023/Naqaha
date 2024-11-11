<?php
include '../admin/backend/Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // تشفير كلمة المرور
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $terms_agreed = isset($_POST['terms_agreed']) ? 1 : 0;

    // استعلام الإدخال
    $sql = "INSERT INTO users (name, email, phone_number, password, age, gender, terms_agreed) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssisi", $name, $email, $phone_number, $password, $age, $gender, $terms_agreed);

    if ($stmt->execute()) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
