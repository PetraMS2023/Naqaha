<?php include  '../layout/top.php'; ?>
	
        <div class="card border-top border-0 border-4 border-white">
          <div class="card-body">
            <div class="border p-4 rounded">
              <div class="card-title d-flex align-items-center">
                <div>
                </div>
                <h5 class="mb-0 text-white">Add Categories</h5>
              </div>
              <hr>
              <form method="POST" action="../backend/insert_category.php">
                <div class="row mb-3">
                    <label for="inputCategoryNameEnglish" class="col-sm-3 col-form-label">Category Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputCategoryNameEnglish" name="CategoryNameEnglish" placeholder="Category Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputCategoryNameArabic" class="col-sm-3 col-form-label">Category Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputCategoryNameArabic" name="CategoryNameArabic" placeholder="Category Name in Arabic" required>
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