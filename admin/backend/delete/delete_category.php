<?php
include '../Conn_db.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $categoryID = intval($_GET['id']);

    $sql = "DELETE FROM categories WHERE CategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $categoryID);
        if ($stmt->execute()) {
            header("Location: ../../pages/MainCategories.php?message=deleted");
            exit();
        } else {
            echo "Error: Unable to delete record. Please try again.";
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
