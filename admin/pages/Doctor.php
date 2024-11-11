<?php include  '../layout/top.php'; ?>

				<a href="Add_Doctor.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Doctor +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor's Image</th>
                    <th scope="col">Doctor's Name in Arabic</th>
                    <th scope="col">Doctor's Name in English</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT DoctorID, DoctorNameArabic, DoctorNameEnglish, DoctorImage FROM doctors";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row' style='align-content: center'>" . $row['DoctorID'] . "</th>";
                    echo "<td style='align-content: center'><img src='" . htmlspecialchars($row['DoctorImage']) . "' class='user-img' alt='doctor image' /></td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['DoctorNameArabic']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['DoctorNameEnglish']) . "</td>";
                    echo "<td style='align-content: center'>
                            <div class='d-flex order-actions'>
                                <a href='edit_doctor.php?id=" . $row['DoctorID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_doctor.php?id=" . $row['DoctorID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='align-content: center'>No doctors found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>

        </table>

					</div>
				</div>

<?php include  '../layout/end.php'; ?>