<?php
include '../Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoryID = intval($_POST['CategoryID']);
    $categoryNameArabic = $_POST['CategoryNameArabic'];
    $categoryNameEnglish = $_POST['CategoryNameEnglish'];

    $sql = "UPDATE categories SET CategoryNameArabic = ?, CategoryNameEnglish = ? WHERE CategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssi", $categoryNameArabic, $categoryNameEnglish, $categoryID);

        if ($stmt->execute()) {
            header("Location: ../../pages/MainCategories.php?message=updated");
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
