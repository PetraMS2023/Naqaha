<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sub_category_name_english = $_POST['sub_category_name_english'];
    $sub_category_name_arabic = $_POST['sub_category_name_arabic'];
    $main_category_id = $_POST['main_category_id'];

    // Handle file upload
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["sub_category_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["sub_category_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["sub_category_image"]["size"] > 500000) { // 500KB
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
        if (move_uploaded_file($_FILES["sub_category_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO subcategories (SubcategoryNameEnglish, SubcategoryNameArabic, CategoryID, SubcategoryImage)
                    VALUES ('$sub_category_name_english', '$sub_category_name_arabic', '$main_category_id', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "New subcategory created successfully";
                header("Location: ../pages/Subcategories.php");
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../pages/Subcategories.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
    exit();
}
?>
