<?php
if (isset($_GET["pno"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce";

    $result = $_GET["pno"];
    echo"$result.<br>";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "delete from wishlist where pno='$result'";
    $res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
    $cnt = mysqli_affected_rows($conn);
    echo "$cnt.<br>";
    mysqli_close($conn);
    if ($cnt >= 1) {
        header("location:showWishlist.php");
    } else {
        echo "try again";
    }
}
?> 