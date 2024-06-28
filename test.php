<?php

// MySQLi connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "e_commerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select matched rows from the products table
$sql_select = "SELECT * FROM product WHERE pno REGEXP 'Ring'";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Output matched products
        echo "Matched Product: " . $row['pno'] . "<br>";
    }
} else {
    echo "No products found.";
}

// Close connection
$conn->close();

?>




<!DOCTYPE html>
<html>
<head>
    <title>Product Fetcher</title>
</head>
<body>

<form action="test.php" method="POST">
    <button type="submit" name="product" value="Bangles">Bangles</button>
    <button type="submit" name="product" value="Anklet">Anklet</button>
    <button type="submit" name="product" value="Earring">Earring</button>
    <button type="submit" name="product" value="Ring">Ring</button>
</form>

</body>
</html>
