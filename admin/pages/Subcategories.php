<?php include  '../layout/top.php'; ?>

				<a href="Add_Subcategories.php">
					<button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Subcategories +</button>
				</a>
				
				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subcategory Image</th>
                    <th scope="col">Subcategory Name in Arabic</th>
                    <th scope="col">Subcategory Name in English</th>
                    <th scope="col">Main Categories</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT s.SubcategoryID, s.SubcategoryNameEnglish, s.SubcategoryNameArabic, s.SubcategoryImage, c.CategoryNameEnglish 
                    FROM subcategories s
                    JOIN categories c ON s.CategoryID = c.CategoryID";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['SubcategoryID'] . "</th>";
                    echo "<td style='align-content: center'><img src='" . htmlspecialchars($row['SubcategoryImage']) . "' class='user-img' alt='subcategory image' /></td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['SubcategoryNameArabic']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['SubcategoryNameEnglish']) . "</td>";
                    echo "<td style='align-content: center'>" . htmlspecialchars($row['CategoryNameEnglish']) . "</td>";
                    echo "<td style='align-content: center'>
                            <div class='d-flex order-actions'>
                                <a href='edit_Subcategories.php?id=" . $row['SubcategoryID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                <a href='../backend/delete/delete_subcategory.php?id=" . $row['SubcategoryID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                            </div>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No subcategories found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>

        </table>

					</div>
				</div>

    
<?php include  '../layout/end.php'; ?>