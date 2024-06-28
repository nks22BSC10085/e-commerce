<?php

if (isset($_GET["pno"])) {

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

$result = $_GET["pno"];
echo"$result.<br>";

$sql_select = "SELECT * FROM product WHERE pno='$result";

$selectResult = $conn->query($sql_select);

if ($selectResult->num_rows > 0) {
    // Fetch the row data
    $row = $selectResult->fetch_assoc();
    
    $pno = $row['pno']; 
    $productName = $row['productName']; 
    $productDescription = $row['productDescription']; 
    $ProductPrice = $row['ProductPrice']; 
    $image = $row['image']; 

    $sql_insert = "INSERT INTO Wishlist (pno, productName, productDescription, ProductPrice, image ) VALUES ('$pno', '$productName', $productDescription, $ProductPrice, $image)";
    // Add more columns and values as needed
    
    if ($conn->query($sql_insert) === TRUE) {
        echo "Row inserted successfully into destination_table";
    } else {
        echo "Error inserting row: " . $conn->error;
    }
} else {
    echo "No rows found in source_table with ID: $pno";
}

}

// Close connection
$conn->close();

?>

























<?php
// if (isset($_GET["pno"])) {

//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "e_commerce";

//     $selectResult = $_GET["pno"];
//     echo"$result.<br>";
//     $conn = new mysqli($servername, $username, $password, $database);
//     $sql = "delete from product where pno='$result'";
//     $res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
//     $cnt = mysqli_affected_rows($conn);
//     echo "$cnt.<br>";
//     mysqli_close($conn);
//     if ($cnt >= 1) {
//         header("location:vendor.php");
//     } else {
//         echo "try again";
//     }
// }
?> 