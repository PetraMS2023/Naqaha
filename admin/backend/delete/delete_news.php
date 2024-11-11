<?php
include '../Conn_db.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $newsID = intval($_GET['id']);

    $sql = "DELETE FROM news WHERE NewsID = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $newsID);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                header("Location: ../../pages/News.php?message=deleted");
                exit();
            } else {
                echo "Error: Unable to delete record. Please try again.";
            }
        } else {
            echo "Error: Could not execute statement.";
        }

        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Error: Invalid ID.";
}

$conn->close();
?>
