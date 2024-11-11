<?php
// insert_category.php
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CategoryNameEnglish = $_POST['CategoryNameEnglish'];
    $CategoryNameArabic = $_POST['CategoryNameArabic'];

    $sql = "INSERT INTO categories (CategoryNameEnglish, CategoryNameArabic) VALUES ('$CategoryNameEnglish', '$CategoryNameArabic')";

    if ($conn->query($sql) === TRUE) {
      header("Location: ../pages/MainCategories.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
