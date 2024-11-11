<?php include  '../layout/top.php'; ?>

<a href="Add_Diseases.php">
    <button type="button" class="btn btn-light px-5" style="margin-bottom: 10px;">Add New Diseases +</button>
</a>

<div class="card radius-10">
    <div class="card-body">
        <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Disease Name</th>
                    <th scope="col">Main Category Name</th>
                    <th scope="col">Subcategory Name</th>
                    <th scope="col">Department's Name</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT d.DiseaseID, d.DiseaseNameEnglish, c.CategoryNameEnglish, s.SubcategoryNameEnglish, dp.DepartmentNameEnglish 
                        FROM diseases d
                        JOIN categories c ON d.CategoryID = c.CategoryID
                        JOIN subcategories s ON d.SubcategoryID = s.SubcategoryID
                        JOIN departments dp ON d.DepartmentID = dp.DepartmentID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row' style='align-content: center'>" . $row['DiseaseID'] . "</th>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['DiseaseNameEnglish']) . "</td>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['CategoryNameEnglish']) . "</td>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['SubcategoryNameEnglish']) . "</td>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['DepartmentNameEnglish']) . "</td>";
                        echo "<td style='align-content: center'>
                                <div class='d-flex order-actions'>
                                    <a href='edit_Diseases.php?id=" . $row['DiseaseID'] . "' class=''><i class='bx bxs-edit'></i></a>
                                    <a href='../backend/delete/delete_Diseases.php?id=" . $row['DiseaseID'] . "' class='ms-3'><i class='bx bxs-trash'></i></a>
                                </div>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' style='align-content: center'>No diseases found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

    </div>
</div>


<?php include  '../layout/end.php'; ?>