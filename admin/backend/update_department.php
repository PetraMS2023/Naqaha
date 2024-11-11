<?php
include 'Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $departmentID = intval($_POST['department_id']);
    $departmentNameArabic = $_POST['department_name_arabic'];
    $departmentNameEnglish = $_POST['department_name_english'];
    $categoryID = intval($_POST['category_id']);
    $subcategoryID = intval($_POST['subcategory_id']);
    $currentImage = $_POST['current_image'];

    // Check if a new image is uploaded
    if (isset($_FILES['department_image']) && $_FILES['department_image']['error'] == UPLOAD_ERR_OK) {
        $imagePath = '../../uploads/' . basename($_FILES['department_image']['name']);
        if (move_uploaded_file($_FILES['department_image']['tmp_name'], $imagePath)) {
            // Image uploaded successfully, use the new path
        } else {
            // Failed to move uploaded file, use current image
            $imagePath = $currentImage;
        }
    } else {
        // No new image uploaded, use current image
        $imagePath = $currentImage;
    }

    $sql = "UPDATE departments SET DepartmentNameArabic = ?, DepartmentNameEnglish = ?, CategoryID = ?, SubcategoryID = ?, DepartmentImage = ? WHERE DepartmentID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssisii", $departmentNameArabic, $departmentNameEnglish, $categoryID, $subcategoryID, $imagePath, $departmentID);

        if ($stmt->execute()) {
            header("Location: ../pages/Sections.php?message=updated");
            exit();
        } else {
            echo "Error: Could not execute statement.";
        }
        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Error: Invalid request method.";
}

$conn->close();
?>
