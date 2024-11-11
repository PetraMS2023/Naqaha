<?php include  '../layout/top.php'; ?>

        <div class="card border-top border-0 border-4 border-white">
          <div class="card-body">
            <div class="border p-4 rounded">
              <div class="card-title d-flex align-items-center">
                <div>
                </div>
                <h5 class="mb-0 text-white">Add New Hospital</h5>
              </div>
              <hr>
              <form method="POST" action="../backend/insert_hospital.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Hospital Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="hospital_name_english" placeholder="Hospital Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Hospital Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="hospital_name_arabic" placeholder="Hospital Name in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Governorate Name in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="governorate_name_english" placeholder="Governorate Name in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Governorate Name in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="governorate_name_arabic" placeholder="Governorate Name in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">Hospital Description in English</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="hospital_description_english" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">Hospital Description in Arabic</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="hospital_description_arabic" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Hospital Location</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="hospital_location" placeholder="Location URL" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Hospital Image</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <input id="fancy-file-upload" type="file" name="hospital_image" accept=".jpg, .png, image/jpeg, image/png" required>
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