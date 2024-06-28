<?php
<<<<<<< HEAD
if (isset($_GET["pno"])) {
=======
if (isset($_GET["pid"])) {
>>>>>>> db3d1aa658a9ec26b7ed10cc8df0b616e57778a9

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "e_commerce";

<<<<<<< HEAD
    $result = $_GET["pno"];
    echo"$result.<br>";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "delete from product where pno='$result'";
=======
    $result = $_GET["pid"];
    echo"$result.<br>";
    $conn = new mysqli($servername, $username, $password, $database);
    $sql = "delete from product where pid='$result'";
>>>>>>> db3d1aa658a9ec26b7ed10cc8df0b616e57778a9
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