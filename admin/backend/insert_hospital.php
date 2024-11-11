<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hospital_name_english = $_POST['hospital_name_english'];
    $hospital_name_arabic = $_POST['hospital_name_arabic'];
    $governorate_name_english = $_POST['governorate_name_english'];
    $governorate_name_arabic = $_POST['governorate_name_arabic'];
    $hospital_description_english = $_POST['hospital_description_english'];
    $hospital_description_arabic = $_POST['hospital_description_arabic'];
    $hospital_location = $_POST['hospital_location'];

    // Handle file upload
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["hospital_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["hospital_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["hospital_image"]["size"] > 1500000) { // 1500KB
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
        if (move_uploaded_file($_FILES["hospital_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO hospitals (HospitalNameEnglish, HospitalNameArabic, GovernorateNameEnglish, GovernorateNameArabic, HospitalDescriptionEnglish, HospitalDescriptionArabic, HospitalLocation, HospitalImage)
                    VALUES ('$hospital_name_english', '$hospital_name_arabic', '$governorate_name_english', '$governorate_name_arabic', '$hospital_description_english', '$hospital_description_arabic', '$hospital_location', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "New hospital added successfully";
                header("Location: ../pages/Hospitals.php");
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../pages/Hospitals.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
    exit();
}
?>
