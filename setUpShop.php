<?php

$show="0";
$error="0";
//db_connection
$servername="localhost";
$username="root";
$password="";
$database="e_commerce";

$conn=new mysqli($servername, $username, $password, $database);

if(isset ($_POST['submit'])){

$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
if(($password == $cpassword)){
    $hash=password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$hash')";
$result = mysqli_query($conn, $sql);
if($result){
    $show = "1";
    echo "success";
    session_start();
    $_SESSION['user']=$username;
    header("location: vendor.php");
}
}
else{
    echo "failure";
    $error="1";
}

}
$conn->close();


?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="setUpShop.css">
    <title>Create shop</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="name">Sneh Sangrah</div>
        </div>
    </header>
    <main>
        <section class="firstSection">
            <div class="firsec">
                <div class="heading1">Setup your Shop on Sneh Sangrah</div>
                <div class="para1">Let's get started! Tell us about you and your shop.</div>
            </div>
            <div class="formSection">
                <form action="setUpShop.php">
                    <div class="firstBox">
                        <div class="tableBox">
                            <table>
                                <tr>
                                    <th>
                                        <label for="country">Name your shop:</label>
                                    </th>
                                    <td>
                                        <input type="text" class="shopName" name="shopName">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="secondBox">




                        <div class="heading2">Tell us a little bit about yourself</div>
                        <div class="tableBox">
                            <table>
                                <tr>
                                    <th>
                                        <label for="country">Your name :</label>
                                    </th>
                                    <td>
                                        <input type="text" class="VendorName" name="VendorName">
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="dob">Date of Birth:</label>
                                    </th>
                                    <td>
                                        <input type="date" id="dob" name="dob" required>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="country">Country:</label>
                                    </th>
                                    <td>
                                        <select id="country" name="country" required>
                                            <option value="" disabled selected>Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Albania">Albania</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="country">Address:</label>
                                    </th>
                                    <td>
                                        <textarea name="address" id="address"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="thirdBox">
                        <div class="thisec">
                            <div class="heading2">How you'll get paid</div>
                            <div class="para2">Give us your account details where you'll get paid</div>
                        </div>
                        <div class="tableBox">
                            <table>
                                <tr>
                                    <th>
                                        <label for="country">Account No:</label>
                                    </th>
                                    <td>
                                        <input type="number" class="accNo" name="accNo">
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="country">IFSC code:</label>
                                    </th>
                                    <td>
                                        <input type="text" class="IFSC" name="IFSC">
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="country">Account holder Name:</label>
                                    </th>
                                    <td>
                                        <input type="text" class="bankName" name="bankName">
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <label for="country">Bank name:</label>
                                    </th>
                                    <td>
                                        <input type="text" class="accHolderName" name="accHolderName">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="submitbtn">
                            <button class="submitData" name="submit">
                                Create your shop
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        created with <span class="heart">&#9829;</span>by Nandani
    </footer>
</body>

</html>