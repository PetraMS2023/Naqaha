<?php include  '../layout/top.php'; ?>

<?php
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>

				<div class="card radius-10">
					<div class="card-body">
          <table class="table mb-0 table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Tools</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <th style="align-content: center" scope="row"><?php echo $row['id']; ?></th>
                    <td style="align-content: center"><?php echo $row['name']; ?></td>
                    <td style="align-content: center"><?php echo $row['email']; ?></td>
                    <td style="align-content: center">
                        <div class="d-flex order-actions">
                            <a href="#" class="ms-3"><i class="bx bxs-trash"></i></a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" style="align-content: center">No data found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

					</div>
				</div>

<?php include  '../layout/end.php'; ?>