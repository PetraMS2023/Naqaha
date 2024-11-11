<?php

include '../admin/backend/Conn_db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $main_body_part = $_POST['main_body_part'];
    $sub_body_part = $_POST['sub_body_part'];
    $pain_type = $_POST['pain_type'];
    $activity_increase = $_POST['activity_increase'];
    $pain_severe = $_POST['pain_severe'];
    $pain_night = $_POST['pain_night'];
    $pain_localized = $_POST['pain_localized'];
    $pain_rest = $_POST['pain_rest'];
    $pain_description = $_POST['pain_description'];
    $symptoms_start_date = $_POST['symptoms_start_date'];
    $symptoms_duration = $_POST['symptoms_duration'];
    $symptoms_constant = $_POST['symptoms_constant'];
    $pain_intensity = $_POST['pain_intensity'];
    $symptoms_increase = $_POST['symptoms_increase'];
    $symptoms_reduce = $_POST['symptoms_reduce'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    // معالجة تحميل الملفات
    $uploaded_files = [];
    if (isset($_FILES['files'])) {
        $upload_directory = '../uploads/'; // تأكد من وجود المجلد وتوافر أذونات الكتابة
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['files']['name'][$key];
            $file_tmp = $_FILES['files']['tmp_name'][$key];
            $file_type = $_FILES['files']['type'][$key];
            $file_size = $_FILES['files']['size'][$key];

            if ($file_size > 0) {
                $file_path = $upload_directory . basename($file_name);
                if (move_uploaded_file($file_tmp, $file_path)) {
                    $uploaded_files[] = $file_path;
                }
            }
        }
    }
    $uploaded_files_json = json_encode($uploaded_files);

    // استعلام الإدخال
    $sql = "INSERT INTO trips (main_body_part, sub_body_part, pain_type, activity_increase, pain_severe, pain_night, pain_localized, pain_rest, pain_description, symptoms_start_date, symptoms_duration, symptoms_constant, pain_intensity, symptoms_increase, symptoms_reduce, full_name, email, age, phone_number, address, gender, message, uploaded_files) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssssssssssss", $main_body_part, $sub_body_part, $pain_type, $activity_increase, $pain_severe, $pain_night, $pain_localized, $pain_rest, $pain_description, $symptoms_start_date, $symptoms_duration, $symptoms_constant, $pain_intensity, $symptoms_increase, $symptoms_reduce, $full_name, $email, $age, $phone_number, $address, $gender, $message, $uploaded_files_json);

    if ($stmt->execute()) {
        echo "Trip recorded successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
