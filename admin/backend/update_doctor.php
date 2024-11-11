<?php
include 'Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $doctorID = intval($_POST['doctor_id']);
    $doctorNameEnglish = $_POST['doctor_name_english'];
    $doctorNameArabic = $_POST['doctor_name_arabic'];
    $doctorCVEnglish = $_POST['doctor_cv_english'];
    $doctorCVArabic = $_POST['doctor_cv_arabic'];
    $classificationID = $_POST['classification_id'];
    $definitionVideo = $_POST['definition_video'];
    $doctorImage = $_FILES['doctor_image'];

    $imagePath = '';
    if ($doctorImage['error'] == UPLOAD_ERR_OK) {
        $imagePath = '../../uploads/' . basename($doctorImage['name']);
        move_uploaded_file($doctorImage['tmp_name'], $imagePath);
    }

    $sql = "UPDATE doctors SET 
            DoctorNameEnglish = ?, 
            DoctorNameArabic = ?, 
            DoctorCVEnglish = ?, 
            DoctorCVArabic = ?, 
            ClassificationID = ?, 
            DefinitionVideo = ?, 
            DoctorImage = COALESCE(NULLIF(?, ''), DoctorImage) 
            WHERE DoctorID = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssisssi", $doctorNameEnglish, $doctorNameArabic, $doctorCVEnglish, $doctorCVArabic, $classificationID, $definitionVideo, $imagePath, $doctorID);

        if ($stmt->execute()) {
            header("Location: ../pages/Doctor.php?message=updated");
            exit();
        } else {
            echo "Error: Could not execute statement.";
        }

        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
