<?php

include '../Conn_db.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {

    $diseaseID = intval($_GET['id']);

  
    $sql = "DELETE FROM diseases WHERE DiseaseID = ?";
    

    if ($stmt = $conn->prepare($sql)) {
    
        $stmt->bind_param("i", $diseaseID);
        
    
        if ($stmt->execute()) {
          
            if ($stmt->affected_rows > 0) {
                
                header("Location: ../../pages/Diseases.php?message=deleted");
                exit();
            } else {
                echo "Error: Unable to delete record. Please try again.";
            }
        } else {
            echo "Error: Could not prepare statement.";
        }

        // إغلاق البيان
        $stmt->close();
    } else {
        echo "Error: Could not prepare statement.";
    }
} else {
    echo "Error: Invalid ID.";
}


$conn->close();
?>
