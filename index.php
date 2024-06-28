<?php
// if (isset($_GET["shop"])) {

//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "e_commerce";
//     $conn = new mysqli($servername, $username, $password, $database);

//     $sql = "CREATE TABLE shop( vendorId int8 PRIMARY KEY, vendorName varchar(50), shopName varchar(50), date_of_birth varchar(50), Country varchar(30), Address varchar(300), accountNo numeric, IFSC_code varchar(12), accountHolder varchar(30), bank varchar(30))";
//     $res = mysqli_query($conn, $sql) or die("error in query" . mysqli_error($conn));
//     if ($res) {
//         header("location:vendor.php");
//     } else {
//         echo "try again";
//     }
// }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;500&family=Poppins:wght@300;500;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Home page of e-commerce site</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" height="37px"> Sneh Sangrah
            </div>
            <div class="searchBar">
                <input type="search" class="search" placeholder="search gifts for some special one...">
                <i class="fa-solid fa-magnifying-glass searchIcon" style="color: #132186;"></i>
            </div>
            <div class="signIn">
                <?php
                   session_start();
                   if(isset($_SESSION['user'])){
                    echo '<button class="user" name="signIn"><a href="logout.php">';
                    echo 'Logout</a></button>';

                    echo '<button class="shop" name="shop"><a href="setUpShop.php"><i class="fa-solid fa-shop"></i></a></button>';

                    echo '<button class="wishlist" id="wishlist" name="wishlist"><a href="showWishlist.php"><i class="fa-solid fa-heart"></i></a></button>';

                    echo '<button class="cart" id="cart" name="cart"><a href="showCart.php"><i class="fa-solid fa-cart-shopping"></i></a></button>';
                   }
                   else{
                    echo '<button class="signInBtn" name="signIn"><a href="newUser.php">Sign In</a></button>';
                    echo '<button class="wishlist" name="wishlist"><a href="newUser.php"><i class="fa-solid fa-heart" style="color: orange;"></i></a></button>';
                   }
                ?>
            </div>
        </div>
    </header>

    <main>
    <section class="firstSection">
            <div class="firSecComponent">
                
                <?php
                   if(isset($_SESSION['user'])){
                    echo '<div class="firSecComp1">Welcome to Sneh Sangrah, ';
                    echo $_SESSION['user'].'!</div>';
                   }
                   else{
                    echo '<div class="firSecComp1"> Celebrate EVERY moment with gifts from small shops!</div>';
                   }
                ?>
                   
                <div class="firSecComp2">
                    <div class="firSecBox1 firSecBox" name="Ring">
                        <div class="image">
                            <img src="image/8.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Ring</p>
                    </div>
                    <div class="firSecBox2 firSecBox" name="Anklet">
                        <div class="image">
                            <img src="image/4.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Anklet</p>
                    </div>
                    <div class="firSecBox3 firSecBox">
                        <div class="image">
                            <img src="image/18.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Earrings</p>
                    </div>
                    <div class="firSecBox4 firSecBox">
                        <div class="image">
                            <img src="image/12.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Ring</p>
                    </div>
                    <div class="firSecBox5 firSecBox">
                        <div class="image">
                            <img src="image/1.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Necklace</p>
                    </div>
                    <div class="firSecBox5 firSecBox">
                        <div class="image">
                            <img src="image/5.jpg" alt="" class="proImg">
                        </div>
                        <p class="proNam">Anklet</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="secondSection">
            <div class="secSecheading">
                Shop our popular gift categories  
            </div>
            <div class="secSecCards">
                <div class="card1 secSeccard">
                    <img src="image/7.jpg" alt="" class="cardProImg1 cardimg">
                    <div class="cardpara">
                        Gold necklace
                    </div>
                </div>
                <div class="card2 secSeccard ">
                    <img src="image/22.jpg" alt="" class="cardProImg2 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card3 secSeccard">
                    <img src="image/25.jpg">
                    <div class="cardpara">
                        Payal
                    </div>
                </div>
                <div class="card4 secSeccard">
                    <img src="image/26.jpg" alt="" class="cardProImg4 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card5 secSeccard">
                    <img src="image/24.jpg" alt="" class="cardProImg5 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="secondSection">
            <div class="secSecheading">
                Gifts that honor Mom and Dad's love
            </div>
            <div class="secSecCards">
                <div class="card1 secSeccard">
                    <img src="image/28.jpg" alt="" class="cardProImg1 cardimg">
                    <div class="cardpara">
                        Gold necklace
                    </div>
                </div>
                <div class="card2 secSeccard ">
                    <img src="image/29.jpg" alt="" class="cardProImg2 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card3 secSeccard">
                    <img src= "image/31.jpg">
                    <div class="cardpara">
                        Payal
                    </div>
                </div>
                <div class="card4 secSeccard">
                    <img src="image/27.jpg" alt="" class="cardProImg4 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card5 secSeccard">
                    <img src="image/26.jpg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="secondSection">
            <div class="secSecheading">
                Gifts for friends
            </div>
            <div class="secSecCards">
                <div class="card1 secSeccard">
                    <img src="image/32.jpg" alt="" class="cardProImg1 cardimg">
                    <div class="cardpara">
                        Gold necklace
                    </div>
                </div>
                <div class="card2 secSeccard ">
                    <img src="image/30.jpg" alt="" class="cardProImg2 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card3 secSeccard">
                    <img src="image/33.jpg">
                    <div class="cardpara">
                        Payal
                    </div>
                </div>
                <div class="card4 secSeccard">
                    <img src="image/30.jpg" alt="" class="cardProImg4 cardimg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
                <div class="card5 secSeccard">
                    <img src="image/30.jpg">
                    <div class="cardpara">
                        Gifts
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="thirdSection">
            <div class="thiSecheading">
                Discover more shops in India
            </div>
            <div class="thiSecCards">
                <div class="card1 thiSeccard">
                    <img src="image/5.jpg" alt="" class="cardProImg1 cardimg">
                    <div class="cardpara">
                        <h4>Gift</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ad?</p>
                    </div>
                </div>
                <div class="card2 thiSeccard ">
                    <img src="image/7.jpg" alt="" class="cardProImg2 cardimg">
                    <div class="cardpara">
                        <h4>Gift</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ad?</p>
                    </div>
                </div>
                <div class="card3 thiSeccard">
                    <img src="image/12.jpg" alt="" class="cardProImg3 cardimg">
                    <div class="cardpara">
                        <h4>Gift</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ad?</p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="fourthSection"></section>
        <section class="fifthSection"></section>
    </main>
    <?php
  include_once('_footer.php');
  ?>
</body>

</html>