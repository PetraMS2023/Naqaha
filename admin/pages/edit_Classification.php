<?php
include '../layout/top.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $classificationID = intval($_GET['id']);
    
    $sql = "SELECT ClassificationNameEnglish, ClassificationNameArabic FROM doctor_classification WHERE ClassificationID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $classificationID);
        $stmt->execute();
        $stmt->bind_result($classificationNameEnglish, $classificationNameArabic);
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
                <div>
                </div>
                <h5 class="mb-0 text-white">Edit Classification</h5>
            </div>
            <hr>
            <form method="POST" action="../backend/update/update_classification.php">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Classification Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="classification_name_english" value="<?php echo htmlspecialchars($classificationNameEnglish); ?>" placeholder="Classification Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Classification Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="classification_name_arabic" value="<?php echo htmlspecialchars($classificationNameArabic); ?>" placeholder="Classification Name in Arabic" required>
                    </div>
                </div>
                <input type="hidden" name="classification_id" value="<?php echo $classificationID; ?>">
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
			