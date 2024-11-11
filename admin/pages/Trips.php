<?php include  '../layout/top.php'; ?>


<?php
$sql = "SELECT id, full_name, email, phone_number FROM trips";
$result = $conn->query($sql);
?>


				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Patient's Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <th style="align-content: center" scope="row"><?php echo $row['id']; ?></th>
                    <td style="align-content: center"><?php echo $row['full_name']; ?></td>
                    <td style="align-content: center"><?php echo $row['email']; ?></td>
                    <td style="align-content: center"><?php echo $row['phone_number']; ?></td>
                    <td style="align-content: center">
                        <div class="d-flex order-actions">
                            <a href="#" class="ms-3"><i class="bx bxs-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" style="align-content: center">No data found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

					</div>
				</div>
				
<?php include  '../layout/end.php'; ?>