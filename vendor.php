<?php
if (isset ($_POST['submit'])) {

    //db_connection
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database = "e_commerce";

    $conn = new mysqli($servername, $username, $password, $database);

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"]; // Corrected typo
    $folder = "upload/" . $filename;
    move_uploaded_file($tempname, $folder);

    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $ProductPrice = $_POST["ProductPrice"];


        $sql = "INSERT INTO `product` (`productName`, `productDescription`,`ProductPrice`, `image`) VALUES ('$productName', '$productDescription', '$ProductPrice', '$folder')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            // alert('product added successfully');
        } else {
            // alert('some error is occured try again');
        }
    $conn->close();

}


?>






<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "e_commerce";
$conn = new mysqli($servername, $username, $password, $database);
$q = "select * from product";

$show="0";

$result = mysqli_query($conn, $q);

$cnt = mysqli_affected_rows($conn);
if ($cnt == 0) {
    echo "No Member Found";
} else {

$show="1";
}
mysqli_close($conn);
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List with Product Information</title>
    <style>
        /* Basic styling */
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.925);
        }

        .container h2{
            font-size: 30px;
            margin: 5px;
        }

        input[type="text"], .box {
            width: calc(100% - 80px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .box{
            display: flex;
            justify-content: space-between;
            color: rgb(120, 120, 120);
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* product style start */

        #productList {
            margin: auto;
        }

        .todo-item {
            height: 60vmin;
            width: 48vmin;
            border-radius: 10px;
            background-color: #ffffff;
            border: 3px solid black;
            margin: 8px;
            padding: 5px 10px 10px 10px;
            background-size: cover;
            display: inline-block;
            justify-content: space-between;
        }

        .todo-item:hover {
            font-size: larger;
            position: relative;
            bottom: 5px;
            right: 3px;
            box-shadow: 8px 10px 0px rgba(108, 107, 107, 0.604);
        }

        .info {
            height: 20%;
        }

        .info h1 {
            font-size: 30px;
            text-align: center;
        }

        .info p {
            font-size: 15px;
            margin-top: 3px;
            text-align: center;
        }


        .img {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45vmin;
            height: 60%;
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }


        .productInfo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 25%;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
        }

        .deleteBtn {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 35px;
            width: 120px;
            border: 2px solid black;
            color: black;
            background-color: transparent;
            border-radius: 15px;
        }

        .deleteBtn a{
            color: black;
            font-weight: 600;
            font-size: 14px;
        }

        .deleteBtn:hover {
            background-color: #d9534f;
            color: #ffffff;
            box-shadow: 0px 3px 1px gray;
        }

        /* product style end */



        @media(max-width:720px) {
            #productList {
                display: grid;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add products</h2>
        <form action="vendor.php" method="POST" enctype="multipart/form-data">
            <input type="text" id="productName" placeholder="Product Name" name="productName" required>
            <input type="text" id="productDescription" placeholder="Product Description" name="productDescription">
            <input type="text" id="ProductPrice" placeholder="Product Price" name="ProductPrice" required>
            <div class="box">upload Image<input type="file" name="image" id="image" class="image" required></div>
            <button name="submit">Add Product</button>
        </form>
    </div>
    <div id="productList">
        <?php
        if ($show="1"){
            while ($x = mysqli_fetch_array($result)) {
            echo"
            <div class='todo-item'>
                <div class='info'>
                    <h1>$x[1]</h1>
                    <p>$x[2]</p>
                 </div>
                <div class='img'>
                    <img src='$x[4]' class='image'>
                </div>
               <div class='productInfo'>
                    <div class='price'>$$x[3]</div>
                    <button class='deleteBtn'><a href='delete.php?pid=$x[0]'>Delete Item</a></button>
                </div>
            </div>";
            }
        }
        
        ?>
    </div>
</body>

</html>