<?php include  '../layout/top.php'; ?>

				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT ContactID, FullName, Email FROM contact";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row' style='align-content: center'>" . $row['ContactID'] . "</th>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['FullName']) . "</td>";
                        echo "<td style='align-content: center'>" . htmlspecialchars($row['Email']) . "</td>";
                        echo "<td style='align-content: center'>
                                <div class='d-flex order-actions'>
                                    <a href='EmailPage.php?id=" . $row['ContactID'] . "' class=''><i class='lni lni-eye'></i></a>
                                    
                                </div>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' style='align-content: center'>No messages found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

					</div>
				</div>

<?php include  '../layout/end.php'; ?>
