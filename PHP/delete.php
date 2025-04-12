<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM employees WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
    
    // Redirect back to retrieve page
    header("Location: retrieve.php");
    exit();
} else {
    header("Location: indexx.php");
    exit();
}
?>