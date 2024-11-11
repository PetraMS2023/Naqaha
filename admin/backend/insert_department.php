<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department_name_english = $_POST['department_name_english'];
    $department_name_arabic = $_POST['department_name_arabic'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];

    // Handle file upload
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["department_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["department_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["department_image"]["size"] > 500000) { // 500KB
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
        if (move_uploaded_file($_FILES["department_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO departments (DepartmentNameEnglish, DepartmentNameArabic, CategoryID, SubcategoryID, DepartmentImage)
                    VALUES ('$department_name_english', '$department_name_arabic', '$category_id', '$subcategory_id', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "New department created successfully";
                header("Location: ../pages/Sections.php");
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../pages/Sections.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
    exit();
}
