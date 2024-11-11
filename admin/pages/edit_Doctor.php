<?php include  '../layout/top.php'; ?>
<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $doctorID = intval($_GET['id']);
    
    $sql = "SELECT DoctorNameEnglish, DoctorNameArabic, DoctorCVEnglish, DoctorCVArabic, ClassificationID, DefinitionVideo, DoctorImage FROM doctors WHERE DoctorID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $doctorID);
        $stmt->execute();
        $stmt->bind_result($doctorNameEnglish, $doctorNameArabic, $doctorCVEnglish, $doctorCVArabic, $classificationID, $definitionVideo, $doctorImage);
        $stmt->fetch();
        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Error: Invalid ID.";
}
?>

<div class="card border-top border-0 border-4 border-white">
    <div class="card-body">
        <div class="border p-4 rounded">
            <div class="card-title d-flex align-items-center">
                <div></div>
                <h5 class="mb-0 text-white">Edit Doctor</h5>
            </div>
            <hr>
            <form method="POST" action="../backend/update_doctor.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Doctor Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="doctor_name_english" value="<?php echo htmlspecialchars($doctorNameEnglish); ?>" placeholder="Doctor Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Doctor Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="doctor_name_arabic" value="<?php echo htmlspecialchars($doctorNameArabic); ?>" placeholder="Doctor Name in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">Doctor CV in English</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="doctor_cv_english" rows="4" required><?php echo htmlspecialchars($doctorCVEnglish); ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">Doctor CV in Arabic</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="doctor_cv_arabic" rows="4" required><?php echo htmlspecialchars($doctorCVArabic); ?></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input39" class="col-sm-3 col-form-label">Doctor Classification</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="classification_id" required>
                            <option selected disabled value="">Doctor Classification</option>
                            <?php
                            $sql = "SELECT ClassificationID, ClassificationNameEnglish FROM Doctor_Classification";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $selected = ($row['ClassificationID'] == $classificationID) ? 'selected' : '';
                                    echo '<option value="' . $row['ClassificationID'] . '" ' . $selected . '>' . htmlspecialchars($row['ClassificationNameEnglish']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Definition Video</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="definition_video" value="<?php echo htmlspecialchars($definitionVideo); ?>" placeholder="Youtube URL">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Doctor Image</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <input id="fancy-file-upload" type="file" name="doctor_image" accept=".jpg, .png, image/jpeg, image/png">
                                <img src="<?php echo htmlspecialchars($doctorImage); ?>" alt="doctor image" style="max-width: 100px; margin-top: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="doctor_id" value="<?php echo $doctorID; ?>">
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-light px-5">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include  '../layout/end.php'; ?>
<?php $conn->close(); ?>
