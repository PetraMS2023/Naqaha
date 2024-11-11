<?php include  '../layout/top.php'; ?>


        <?php
      
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $diseaseID = intval($_GET['id']);
          
            $sql = "SELECT * FROM diseases WHERE DiseaseID = ?";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $diseaseID);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $disease = $result->fetch_assoc();
                } else {
                    echo "No disease found with this ID.";
                    exit();
                }
            } else {
                echo "Error: Could not prepare statement.";
                exit();
            }
        } else {
            echo "Error: ID is not set.";
            exit();
        }
        ?>

      <div class="card border-top border-0 border-4 border-white">
          <div class="card-body">
              <div class="border p-4 rounded">
                  <div class="card-title d-flex align-items-center">
                      <div></div>
                      <h5 class="mb-0 text-white">Edit Diseases</h5>
                  </div>
                  <hr>
                  <form method="POST" action="../backend/update/update_disease.php">
                      <div class="row mb-3">
                          <label for="inputEnterYourName" class="col-sm-3 col-form-label">Disease Name in English</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputEnterYourName" name="disease_name_english" placeholder="Disease Name in English" value="<?php echo htmlspecialchars($disease['DiseaseNameEnglish']); ?>" required>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Disease Name in Arabic</label>
                          <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPhoneNo2" name="disease_name_arabic" placeholder="Disease Name in Arabic" value="<?php echo htmlspecialchars($disease['DiseaseNameArabic']); ?>" required>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputAddress4" class="col-sm-3 col-form-label">Disease Description in English</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" id="inputAddress4" name="disease_description_english" rows="4" required><?php echo htmlspecialchars($disease['DiseaseDescriptionEnglish']); ?></textarea>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputAddress4" class="col-sm-3 col-form-label">Disease Description in Arabic</label>
                          <div class="col-sm-9">
                              <textarea class="form-control" id="inputAddress4" name="disease_description_arabic" rows="4" required><?php echo htmlspecialchars($disease['DiseaseDescriptionArabic']); ?></textarea>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputCategory" class="col-sm-3 col-form-label">Main Category Name</label>
                          <div class="col-sm-9">
                              <select class="form-select" id="inputCategory" name="category_id" required>
                                  <option selected disabled value="">Main Category Name</option>
                                  <?php
                                  $sql = "SELECT CategoryID, CategoryNameEnglish FROM Categories";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      while($row = $result->fetch_assoc()) {
                                          $selected = ($row['CategoryID'] == $disease['CategoryID']) ? 'selected' : '';
                                          echo '<option value="' . $row['CategoryID'] . '" ' . $selected . '>' . htmlspecialchars($row['CategoryNameEnglish']) . '</option>';
                                      }
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputSubCategory" class="col-sm-3 col-form-label">Sub Category Name</label>
                          <div class="col-sm-9">
                              <select class="form-select" id="inputSubCategory" name="subcategory_id" required>
                                  <option selected disabled value="">Sub Category Name</option>
                                  <?php
                                  $sql = "SELECT SubcategoryID, SubcategoryNameEnglish FROM Subcategories";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      while($row = $result->fetch_assoc()) {
                                          $selected = ($row['SubcategoryID'] == $disease['SubcategoryID']) ? 'selected' : '';
                                          echo '<option value="' . $row['SubcategoryID'] . '" ' . $selected . '>' . htmlspecialchars($row['SubcategoryNameEnglish']) . '</option>';
                                      }
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputDepartment" class="col-sm-3 col-form-label">Department Name</label>
                          <div class="col-sm-9">
                              <select class="form-select" id="inputDepartment" name="department_id" required>
                                  <option selected disabled value="">Department Name</option>
                                  <?php
                                  $sql = "SELECT DepartmentID, DepartmentNameEnglish FROM Departments";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      while($row = $result->fetch_assoc()) {
                                          $selected = ($row['DepartmentID'] == $disease['DepartmentID']) ? 'selected' : '';
                                          echo '<option value="' . $row['DepartmentID'] . '" ' . $selected . '>' . htmlspecialchars($row['DepartmentNameEnglish']) . '</option>';
                                      }
                                  }
                                  ?>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                              <button type="submit" class="btn btn-light px-5">Save</button>
                          </div>
                      </div>
                      <input type="hidden" name="disease_id" value="<?php echo $diseaseID; ?>">
                  </form>
              </div>
          </div>
      </div>

				

<?php include  '../layout/end.php'; ?>
