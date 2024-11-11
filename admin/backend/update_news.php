<?php
include 'Conn_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newsID = intval($_POST['news_id']);
    $newsTopicEnglish = $_POST['news_topic_english'];
    $newsTopicArabic = $_POST['news_topic_arabic'];
    $newsContentEnglish = $_POST['news_content_english'];
    $newsContentArabic = $_POST['news_content_arabic'];
    $newsDate = $_POST['news_date'];
    $newsImage = $_FILES['news_image'];

    $imagePath = '';
    if ($newsImage['error'] == UPLOAD_ERR_OK) {
        $targetDir = "../../uploads/";
        $imagePath = $targetDir . basename($newsImage['name']);
        if (!move_uploaded_file($newsImage['tmp_name'], $imagePath)) {
            echo "Error: Unable to upload image.";
            exit();
        }
    } else {
        $imagePath = $_POST['existing_image'];
    }

    $sql = "UPDATE news SET NewsTopicEnglish=?, NewsTopicArabic=?, NewsContentEnglish=?, NewsContentArabic=?, NewsDate=?, NewsImage=? WHERE NewsID=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssi", $newsTopicEnglish, $newsTopicArabic, $newsContentEnglish, $newsContentArabic, $newsDate, $imagePath, $newsID);

        if ($stmt->execute()) {
            header("Location: ../pages/News.php?message=updated");
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
