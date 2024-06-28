<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* header css */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2%;
            margin: 0.5%;
        }

        .navbar .logo {
            font-size: 40px;
            color: orange;
            font-weight: 700;
            margin: 10px;
        }

        .searchBar {
            width: 60%;
            height: 50px;
            border: black 1px solid;
            display: flex;
            border-radius: 30px;
        }

        .searchBar .search {
            width: 95%;
            height: 100%;
            border: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            font-size: 20px;
            padding: 0 3%;
        }

        .searchBar .searchIcon {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 50px;
            font-size: 25px;
            background-color: orange;
            border-radius: 50%;
        }

        .signIn {
            display: flex;
            align-items: center;
            justify-content: center;
            column-gap: 15px;
        }

        .signInBtn {
            height: 30px;
            width: 70px;
            border: none;
            font-size: 15px;
            background-color: transparent;
        }

        .signInBtn:hover {
            height: 30px;
            width: 70px;
            font-size: 15px;
            border-radius: 20px;
            background-color: rgb(194, 194, 194);
        }

        .wishlist {
            font-size: 20px;
            color: red;
            border: none;
        }

        .wishlist:hover {
            padding: 10px;
            background-color: gray;
            color: red;
            border-radius: 50%;
        }

        /* header css end */
    </style>
    <title>Navbar</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" height="37px"> Sneh Sangrah</div>
            <div class="searchBar">
                <input type="search" class="search" placeholder="search gifts for some special one...">
                <i class="fa-solid fa-magnifying-glass searchIcon" style="color: #132186;"></i>
            </div>
            <div class="signIn">
                <?php
                   if(isset($_SESSION['user'])){
                    echo '<button class="user" name="signIn"><a href="logout.php">';
                    echo 'Logout</a></button>';

                    echo '<button class="shop" name="shop"><a href="setUpShop.php"><i class="fa-solid fa-shop"></i></a></button>';

                    echo '<button class="wishlist" id="wishlist" name="wishlist"><a href="wishlist.php"><i class="fa-solid fa-heart"></i></a></button>';

                    echo '<button class="cart" id="cart" name="cart"><a href="yourCart.php"><i class="fa-solid fa-cart-shopping"></i></a></button>';
                   }
                   else{
                    echo '<button class="signInBtn" name="signIn"><a href="newUser.php">Sign In</a></button>';
                    echo '<button class="wishlist" name="wishlist"><a href="newUser.php"><i class="fa-solid fa-heart" style="color: orange;"></i></a></button>';
                   }
                ?>
            </div>
        </div>
    </header>
</body>

</html>