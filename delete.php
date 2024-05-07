<?php
if (isset($_GET["pid"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce";

    $result = $_GET["pid"];
    echo"$result.<br>";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "delete from product where pid='$result'";
    $res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
    $cnt = mysqli_affected_rows($conn);
    echo "$cnt.<br>";
    mysqli_close($conn);
    if ($cnt >= 1) {
        header("location:vendor.php");
    } else {
        echo "try again";
    }
}
?> 