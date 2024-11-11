<?php include  '../layout/top.php'; ?>

				<a href="Add_Classification.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Classification +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Classification's Name in Arabic</th>
                    <th scope="col">Classification's Name in English</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT ClassificationID, ClassificationNameEnglish, ClassificationNameArabic FROM doctor_classification";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row' style='align-content: center'>" . $row['ClassificationID'] . "</th>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['ClassificationNameArabic']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['ClassificationNameEnglish']) . "</td>";
                    echo "<td style='align-content: center'>
                            <div class='d-flex order-actions'>
                                <a href='edit_classification.php?id=" . $row['ClassificationID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_classification.php?id=" . $row['ClassificationID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='align-content: center'>No classifications found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
        </table>

					</div>
				</div>
				

<?php include  '../layout/end.php'; ?>