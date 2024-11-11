<?php include  '../layout/top.php'; ?>
<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $subcategoryID = intval($_GET['id']);

    $sql = "SELECT SubcategoryNameArabic, SubcategoryNameEnglish, CategoryID, SubcategoryImage FROM subcategories WHERE SubcategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $subcategoryID);
        $stmt->execute();
        $stmt->bind_result($subcategoryNameArabic, $subcategoryNameEnglish, $categoryID, $subcategoryImage);
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
                <h5 class="mb-0 text-white">Edit Subcategory</h5>
            </div>
            <hr>
            <form method="POST" action="../backend/update_subcategory.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Sub Category Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="sub_category_name_english" value="<?php echo htmlspecialchars($subcategoryNameEnglish); ?>" placeholder="Sub Category Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Sub Category Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="sub_category_name_arabic" value="<?php echo htmlspecialchars($subcategoryNameArabic); ?>" placeholder="Sub Category Name in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input39" class="col-sm-3 col-form-label">Main Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="main_category_id" required>
                            <option selected disabled value="">Main Category Name</option>
                            <?php
                            $sql = "SELECT CategoryID, CategoryNameEnglish FROM Categories";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $selected = ($row['CategoryID'] == $categoryID) ? 'selected' : '';
                                    echo '<option value="' . $row['CategoryID'] . '" ' . $selected . '>' . htmlspecialchars($row['CategoryNameEnglish']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSubCategoryImage" class="col-sm-3 col-form-label">Sub Category Image</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <input type="file" id="inputSubCategoryImage" name="sub_category_image" accept=".jpg, .png, image/jpeg, image/png">
                                <input type="hidden" name="current_image" value="<?php echo htmlspecialchars($subcategoryImage); ?>">
                            </div>
                        </div>
                    </div>
                </div>
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
