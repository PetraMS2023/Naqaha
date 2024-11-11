<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disease_name_english = $_POST['disease_name_english'];
    $disease_name_arabic = $_POST['disease_name_arabic'];
    $disease_description_english = $_POST['disease_description_english'];
    $disease_description_arabic = $_POST['disease_description_arabic'];
    $category_id = $_POST['category_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $department_id = $_POST['department_id'];

    // Insert data into database
    $sql = "INSERT INTO diseases (DiseaseNameEnglish, DiseaseNameArabic, DiseaseDescriptionEnglish, DiseaseDescriptionArabic, CategoryID, SubcategoryID, DepartmentID)
            VALUES ('$disease_name_english', '$disease_name_arabic', '$disease_description_english', '$disease_description_arabic', '$category_id', '$subcategory_id', '$department_id')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "New disease created successfully";
        header("Location: ../pages/Diseases.php");
    } else {
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ../pages/Diseases.php");
    }

    $conn->close();
    exit();
}
?>
