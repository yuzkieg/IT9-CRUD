<?php

include "../database/database.php";

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $productName = $_POST['productName']; 
        $specs = $_POST['specs'];
        $price = $_POST['price']; 
        $status = 0;

        $stmt = $conn->prepare("INSERT INTO todo (productName, specs, price) VALUES (?, ?, ?)"); 

        $stmt->bind_param("ssi", $productName, $specs, $price); 

        if ($stmt->execute()) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Operation failed: " . $stmt->error; 
        }
        $stmt->close();
        $conn->close(); 
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>