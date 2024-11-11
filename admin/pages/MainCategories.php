<?php include  '../layout/top.php'; ?>

				<a href="Add_Categories.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Categories +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categories Name in Arabic</th>
                    <th scope="col">Categories Name in English</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM categories";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['CategoryID'] . "</th>";
                    echo "<td>" . htmlspecialchars($row['CategoryNameArabic']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['CategoryNameEnglish']) . "</td>";
                    echo "<td>
                            <div class='d-flex order-actions'>
                                <a href='edit_Categories.php?id=" . $row['CategoryID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_category.php?id=" . $row['CategoryID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No categories found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>

        </table>
					</div>
				</div>

<?php include  '../layout/end.php'; ?>