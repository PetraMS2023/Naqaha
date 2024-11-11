<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $classification_name_english = $_POST['classification_name_english'];
    $classification_name_arabic = $_POST['classification_name_arabic'];

    // Insert data into database
    $sql = "INSERT INTO doctor_classification (ClassificationNameEnglish, ClassificationNameArabic)
            VALUES ('$classification_name_english', '$classification_name_arabic')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "New classification created successfully";
        header("Location: ../pages/Doctor-Classification.php");
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ../pages/Doctor-Classification.php");
    }

    $conn->close();
    exit();
}
?>
