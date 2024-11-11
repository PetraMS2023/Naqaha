<?php
include 'Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hospitalID = intval($_POST['hospital_id']);
    $hospitalNameEnglish = $_POST['hospital_name_english'];
    $hospitalNameArabic = $_POST['hospital_name_arabic'];
    $governorateNameEnglish = $_POST['governorate_name_english'];
    $governorateNameArabic = $_POST['governorate_name_arabic'];
    $hospitalDescriptionEnglish = $_POST['hospital_description_english'];
    $hospitalDescriptionArabic = $_POST['hospital_description_arabic'];
    $hospitalLocation = $_POST['hospital_location'];
    $hospitalImage = $_FILES['hospital_image'];

    $imagePath = '';
    if ($hospitalImage['error'] == UPLOAD_ERR_OK) {
        $imagePath = '../../uploads/' . basename($hospitalImage['name']);
        move_uploaded_file($hospitalImage['tmp_name'], $imagePath);
    }

    $sql = "UPDATE hospitals SET 
            HospitalNameEnglish = ?, 
            HospitalNameArabic = ?, 
            GovernorateNameEnglish = ?, 
            GovernorateNameArabic = ?, 
            HospitalDescriptionEnglish = ?, 
            HospitalDescriptionArabic = ?, 
            HospitalLocation = ?, 
            HospitalImage = COALESCE(NULLIF(?, ''), HospitalImage) 
            WHERE HospitalID = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssi", $hospitalNameEnglish, $hospitalNameArabic, $governorateNameEnglish, $governorateNameArabic, $hospitalDescriptionEnglish, $hospitalDescriptionArabic, $hospitalLocation, $imagePath, $hospitalID);

        if ($stmt->execute()) {
            header("Location: ../pages/Hospitals.php?message=updated");
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
