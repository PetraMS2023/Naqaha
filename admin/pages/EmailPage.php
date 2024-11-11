<?php include  '../layout/top.php'; ?>
				
        <?php

        if (isset($_GET['id'])) {
            $contact_id = intval($_GET['id']);
            $sql = "SELECT ContactID, FullName, Email, Message, ContactDate FROM contact WHERE ContactID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $contact_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "No message found with this ID.";
                exit();
            }
        } else {
            echo "No ID provided.";
            exit();
        }

        $stmt->close();
        $conn->close();
        ?>

<div class="card border-top border-0 border-4 border-white">
        <div class="card-body">
            <div class="border p-4 rounded">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-white">
                        No.<span style="color: rgb(59, 177, 255); font-size: large;"><?php echo $row['ContactID']; ?></span>
                        <br>
                        Date : <span style="color: rgb(59, 177, 255); font-size: large;"><?php echo date('d/m/Y', strtotime($row['ContactDate'])); ?></span>
                    </h5>
                </div>
                <hr style="margin: 0.6rem 0; border-top: 1px solid;">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-white">Full Name : <span style="color: rgb(59, 177, 255); font-size: large;"><?php echo htmlspecialchars($row['FullName']); ?></span></h5>
                </div>
                <hr style="margin: 0.6rem 0; border-top: 1px solid;">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-white">Email : <span style="color: rgb(59, 177, 255); font-size: large;"><?php echo htmlspecialchars($row['Email']); ?></span></h5>
                </div>
                <hr style="margin: 0.6rem 0; border-top: 1px solid;">
                <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0 text-white">Message : <br><span style="color: rgb(59, 177, 255); font-size: large;"><?php echo nl2br(htmlspecialchars($row['Message'])); ?></span></h5>
                </div>
            </div>
        </div>
</div>

<?php include  '../layout/end.php'; ?>