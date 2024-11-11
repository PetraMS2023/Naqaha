<?php
include '../Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // استلام البيانات من النموذج
    $classificationID = intval($_POST['classification_id']);
    $classificationNameEnglish = $_POST['classification_name_english'];
    $classificationNameArabic = $_POST['classification_name_arabic'];

    // إعداد استعلام التحديث
    $sql = "UPDATE doctor_classification SET 
            ClassificationNameEnglish = ?, 
            ClassificationNameArabic = ? 
            WHERE ClassificationID = ?";

    // إعداد البيان
    if ($stmt = $conn->prepare($sql)) {
        // ربط المعلمات
        $stmt->bind_param("ssi", $classificationNameEnglish, $classificationNameArabic, $classificationID);

        // تنفيذ البيان
        if ($stmt->execute()) {
          header("Location: ../../pages/Doctor-Classification.php?message=updated");
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
