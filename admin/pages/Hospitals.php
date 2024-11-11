<?php include  '../layout/top.php'; ?>

				<a href="Add_Hospital.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Hospital +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hospital Image</th>
                    <th scope="col">Hospital Name in Arabic</th>
                    <th scope="col">Hospital Name in English</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT HospitalID, HospitalNameArabic, HospitalNameEnglish, HospitalImage FROM hospitals";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row' style='align-content: center'>" . $row['HospitalID'] . "</th>";
                    echo "<td style='align-content: center'><img src='" . htmlspecialchars($row['HospitalImage']) . "' class='user-img' alt='hospital image' /></td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['HospitalNameArabic']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['HospitalNameEnglish']) . "</td>";
                    echo "<td style='align-content: center'>
                            <div class='d-flex order-actions'>
                                <a href='edit_hospital.php?id=" . $row['HospitalID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_hospital.php?id=" . $row['HospitalID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='align-content: center'>No hospitals found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
        </table>

					</div>
				</div>
				
			
<?php include  '../layout/end.php'; ?>

