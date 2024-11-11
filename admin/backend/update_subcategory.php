<?php
include 'Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subcategoryID = intval($_POST['SubcategoryID']);
    $subcategoryNameArabic = $_POST['sub_category_name_arabic'];
    $subcategoryNameEnglish = $_POST['sub_category_name_english'];
    $categoryID = intval($_POST['main_category_id']);
    $currentImage = $_POST['current_image'];

    if (isset($_FILES['sub_category_image']) && $_FILES['sub_category_image']['error'] == UPLOAD_ERR_OK) {
        $imagePath = '../../uploads/' . basename($_FILES['sub_category_image']['name']);
        move_uploaded_file($_FILES['sub_category_image']['tmp_name'], $imagePath);
    } else {
        $imagePath = $currentImage;
    }

    $sql = "UPDATE subcategories SET SubcategoryNameArabic = ?, SubcategoryNameEnglish = ?, CategoryID = ?, SubcategoryImage = ? WHERE SubcategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssisi", $subcategoryNameArabic, $subcategoryNameEnglish, $categoryID, $imagePath, $subcategoryID);

        if ($stmt->execute()) {
            header("Location: ../pages/Subcategories.php?message=updated");
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
