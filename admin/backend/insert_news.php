<?php
session_start();
include 'Conn_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $news_topic_english = $_POST['news_topic_english'];
    $news_topic_arabic = $_POST['news_topic_arabic'];
    $news_content_english = $_POST['news_content_english'];
    $news_content_arabic = $_POST['news_content_arabic'];
    $news_date = $_POST['news_date'];

    // Handle file upload
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["news_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["news_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["news_image"]["size"] > 5000000) { // 5000KB
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
        if (move_uploaded_file($_FILES["news_image"]["tmp_name"], $target_file)) {
            // Insert data into database
            $sql = "INSERT INTO news (NewsTopicEnglish, NewsTopicArabic, NewsContentEnglish, NewsContentArabic, NewsDate, NewsImage)
                    VALUES ('$news_topic_english', '$news_topic_arabic', '$news_content_english', '$news_content_arabic', '$news_date', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['success_message'] = "New news added successfully";
                header("Location: ../pages/News.php");
            } else {
                $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ../pages/News.php");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
    exit();
}
