<?php include  '../layout/top.php'; ?>
<?php

// تحقق من وجود ID في الرابط وجلب بيانات القسم
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $departmentID = intval($_GET['id']);

    $sql = "SELECT DepartmentNameArabic, DepartmentNameEnglish, CategoryID, SubcategoryID, DepartmentImage FROM departments WHERE DepartmentID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $departmentID);
        $stmt->execute();
        $stmt->bind_result($departmentNameArabic, $departmentNameEnglish, $categoryID, $subcategoryID, $departmentImage);
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
                <h5 class="mb-0 text-white">Edit Department</h5>
            </div>
            <hr>
            <form method="POST" action="../backend/update_department.php" enctype="multipart/form-data">
                <input type="hidden" name="department_id" value="<?php echo $departmentID; ?>">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Department Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="department_name_english" value="<?php echo htmlspecialchars($departmentNameEnglish); ?>" placeholder="Department Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Department Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="department_name_arabic" value="<?php echo htmlspecialchars($departmentNameArabic); ?>" placeholder="Department Name in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input39" class="col-sm-3 col-form-label">Main Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="category_id" required>
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
                    <label for="input39" class="col-sm-3 col-form-label">Sub Category Name</label>
                    <div class="col-sm-9">
                        <select class="form-select" id="input39" name="subcategory_id" required>
                            <option selected disabled value="">Sub Category Name</option>
                            <?php
                            $sql = "SELECT SubcategoryID, SubcategoryNameEnglish FROM Subcategories";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $selected = ($row['SubcategoryID'] == $subcategoryID) ? 'selected' : '';
                                    echo '<option value="' . $row['SubcategoryID'] . '" ' . $selected . '>' . htmlspecialchars($row['SubcategoryNameEnglish']) . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDepartmentImage" class="col-sm-3 col-form-label">Department Image</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <input type="file" id="inputDepartmentImage" name="department_image" accept=".jpg, .png, image/jpeg, image/png">
                                <input type="hidden" name="current_image" value="<?php echo htmlspecialchars($departmentImage); ?>">
                                <p>Current Image: <img src="<?php echo htmlspecialchars($departmentImage); ?>" alt="Current Image" style="max-width: 100px;"></p>
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
