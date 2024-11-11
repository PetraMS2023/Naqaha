<?php

include '../Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // استلام البيانات من النموذج
    $diseaseID = intval($_POST['disease_id']);
    $diseaseNameEnglish = $_POST['disease_name_english'];
    $diseaseNameArabic = $_POST['disease_name_arabic'];
    $diseaseDescriptionEnglish = $_POST['disease_description_english'];
    $diseaseDescriptionArabic = $_POST['disease_description_arabic'];
    $categoryID = intval($_POST['category_id']);
    $subcategoryID = intval($_POST['subcategory_id']);
    $departmentID = intval($_POST['department_id']);

    // إعداد استعلام التحديث
    $sql = "UPDATE diseases SET 
            DiseaseNameEnglish = ?, 
            DiseaseNameArabic = ?, 
            DiseaseDescriptionEnglish = ?, 
            DiseaseDescriptionArabic = ?, 
            CategoryID = ?, 
            SubcategoryID = ?, 
            DepartmentID = ? 
            WHERE DiseaseID = ?";

    // إعداد البيان
    if ($stmt = $conn->prepare($sql)) {
        // ربط المعلمات
        $stmt->bind_param("sssiiiii", $diseaseNameEnglish, $diseaseNameArabic, $diseaseDescriptionEnglish, $diseaseDescriptionArabic, $categoryID, $subcategoryID, $departmentID, $diseaseID);

        // تنفيذ البيان
        if ($stmt->execute()) {
            header("Location: ../../pages/Diseases.php?message=updated");
            exit();
        } else {
            echo "Error: Could not execute statement.";
        }

        // إغلاق البيان
        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Invalid request method.";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
