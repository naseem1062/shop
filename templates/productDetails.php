<?php
    include ("../api/php_functions.php");
    $productId = $_GET['productId'];
    // echo $productId;

    $conn = connectToDatabase();

    $query = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            include(__DIR__ . '/product_template.php');
        }
    }else {
        echo "0 results";
    }

    $conn->close();
?>

