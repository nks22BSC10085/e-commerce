
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
    $noProduct=true;
} else {
    $noProduct=false;
    $show="1";
}
mysqli_close($conn);
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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

        .container h2 {
            font-size: 30px;
            margin: 5px;
        }

        input[type="text"],
        .box {
            width: calc(100% - 80px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .box {
            display: flex;
            justify-content: space-between;
            color: rgb(120, 120, 120);
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* product style start */

        .blankProductSection {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eeecec;
            border-radius: 20px;
            box-shadow: 0px 0px 15px gray;
            width: fit-content;
            padding: 15px;
            margin: auto;
            font-size: 30px;
        }

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
            bottom: 3px;
            right: 2px;
            box-shadow: 8px 10px 0px rgba(108, 107, 107, 0.604);
            transform: scale(1.02);
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

        .deleteBtn a {
            color: black;
            font-weight: 600;
            font-size: 14px;
        }

        .deleteBtn:hover {
            background-color: #d9534f;
            color: #ffffff;
            box-shadow: 0px 3px 1px gray;
        }

        .heading{
            padding: 50px 0px 50px 30px;
            font-size: 35px;
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
    <?php
    include_once('_navbar.php');
    ?>
    <?php
       if($noProduct==true){
        echo '<div class="blankProductSection">Currently no any Item is present</div>';
       }
    ?>
    <div class="heading">
       Search for Payal
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
                    <img src='$x[4]' class='images'>
                </div>
               <div class='productInfo'>
                    <div class='price'>$$x[3]</div>
                    <button class='deleteBtn'><a href='addToCart.php?pno=$x[0]'>Cart</a></button>
                </div>
            </div>";
            }
        }
        
        ?>
    </div>
    <?php
  include_once('_footer.php');
  ?>
</body>

</html>