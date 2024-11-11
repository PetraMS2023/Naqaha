<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_name_english = $_POST['doctor_name_english'];
    $doctor_name_arabic = $_POST['doctor_name_arabic'];
    $doctor_cv_english = $_POST['doctor_cv_english'];
    $doctor_cv_arabic = $_POST['doctor_cv_arabic'];
    $classification_id = $_POST['classification_id'];
    $definition_video = $_POST['definition_video'];

    // Handle file upload
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["doctor_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["doctor_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["doctor_image"]["size"] > 500000) { // 500KB
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["doctor_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO doctors (DoctorNameEnglish, DoctorNameArabic, DoctorCVEnglish, DoctorCVArabic, ClassificationID, DefinitionVideo, DoctorImage)
                    VALUES ('$doctor_name_english', '$doctor_name_arabic', '$doctor_cv_english', '$doctor_cv_arabic', '$classification_id', '$definition_video', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "New doctor added successfully";
                header("Location: ../pages/Doctor.php");
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../pages/Doctor.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
    exit();
}
?>
