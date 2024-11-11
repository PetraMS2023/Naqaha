<?php
include '../Conn_db.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $subcategoryID = intval($_GET['id']);

    $sql = "DELETE FROM subcategories WHERE SubcategoryID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $subcategoryID);
        if ($stmt->execute()) {
            header("Location: ../../pages/Subcategories.php?message=deleted");
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
