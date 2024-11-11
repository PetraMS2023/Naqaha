<?php include  '../layout/top.php'; ?>
        
				<div class="card border-top border-0 border-4 border-white">
          <div class="card-body">
            <div class="border p-4 rounded">
              <div class="card-title d-flex align-items-center">
                <div>
                </div>
                <h5 class="mb-0 text-white">Add New Classification</h5>
              </div>
              <hr>
              <form method="POST" action="../backend/insert_classification.php">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Classification Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="classification_name_english" placeholder="Classification Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Classification Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="classification_name_arabic" placeholder="Classification Name in Arabic" required>
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
			