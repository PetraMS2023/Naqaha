<?php include  '../layout/top.php'; ?>

				<a href="Add_News.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add News +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">News Image</th>
                    <th scope="col">News Title in Arabic</th>
                    <th scope="col">News Title in English</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead> 
            <tbody>
            <?php
            $sql = "SELECT NewsID, NewsTopicArabic, NewsTopicEnglish, NewsImage FROM news";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row' style='align-content: center'>" . $row['NewsID'] . "</th>";
                    echo "<td style='align-content: center'><img src='" . htmlspecialchars($row['NewsImage']) . "' class='user-img' alt='news image' /></td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['NewsTopicArabic']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['NewsTopicEnglish']) . "</td>";
                    echo "<td style='align-content: center'>
                            <div class='d-flex order-actions'>
                                <a href='edit_News.php?id=" . $row['NewsID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_news.php?id=" . $row['NewsID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='align-content: center'>No news found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>

        </table>

					</div>
				</div>
	
<?php include  '../layout/end.php'; ?>