<?php include '../layout/top.php'; ?>
<?php

// تحقق من وجود ID في الرابط وجلب بيانات الفئة
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $categoryID = intval($_GET['id']);

    $sql = "SELECT CategoryNameArabic, CategoryNameEnglish FROM categories WHERE CategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $categoryID);
        $stmt->execute();
        $stmt->bind_result($categoryNameArabic, $categoryNameEnglish);
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
                <h5 class="mb-0 text-white">Edit Category</h5>
            </div>
            <hr>
            <form method="POST" action="../backend/update/update_category.php">
                <div class="row mb-3">
                    <label for="inputCategoryNameEnglish" class="col-sm-3 col-form-label">Category Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputCategoryNameEnglish" name="CategoryNameEnglish" value="<?php echo htmlspecialchars($categoryNameEnglish); ?>" placeholder="Category Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCategoryNameArabic" class="col-sm-3 col-form-label">Category Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputCategoryNameArabic" name="CategoryNameArabic" value="<?php echo htmlspecialchars($categoryNameArabic); ?>" placeholder="Category Name in Arabic" required>
                    </div>
                </div>
                <input type="hidden" name="CategoryID" value="<?php echo $categoryID; ?>">
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

<?php include '../layout/end.php'; ?>
