<?php include  '../layout/top.php'; ?>

        <div class="card border-top border-0 border-4 border-white">
          <div class="card-body">
            <div class="border p-4 rounded">
              <div class="card-title d-flex align-items-center">
                <div>
                </div>
                <h5 class="mb-0 text-white">Add News</h5>
              </div>
              <hr>
              <form method="POST" action="../backend/insert_news.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">News Topic in English</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputEnterYourName" name="news_topic_english" placeholder="News Topic in English" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">News Topic in Arabic</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhoneNo2" name="news_topic_arabic" placeholder="News Topic in Arabic" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">News Content in English</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="news_content_english" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputAddress4" class="col-sm-3 col-form-label">News Content in Arabic</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputAddress4" name="news_content_arabic" rows="3" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">News Date</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="inputEnterYourName" name="news_date" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">News Image</label>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-body">
                                <input id="fancy-file-upload" type="file" name="news_image" accept=".jpg, .png, image/jpeg, image/png" required>
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