<?php

include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AnimalKingdom</title>

   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>

<div id="page" class="site page-home">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="index.php"><span class="circle"></span>Animal<span class="logocolor">King</span>Dom</a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-link">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Featured Products</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li><p><span><a href="login.php">Login</a><i class="ri-arrow-down-s-line"></i></span></p>
                                <ul>
                                        <li><a href="register.php">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">USD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">USD</a></li>
                                        <li><a href="#">EURO</a></li>
                                        <li><a href="#">IDR</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">English<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="#">English</a></li>
                                        <li><a href="#">Bangla</a></li>
                                        <li><a href="#">Hindi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        <div class="header-nav">
            <div class="container">
                <div class="wrapper flexitem">
                    <a href="#" class="trigger dexktop-hide"><span class="i ri-menu-2-line"></span></a>
                    <div class="lift flexitem">
                        <div class="logo"><a href="index.php"><span class="circle"></span>Animal<span class="logocolor">King</span>Dom</a></div>
                        <nav class="mobile-hide">
                            <ul class="flexitem second-links">
                                <li><a href="index.php">Home</a></li>
                                <li class="has-child">
                                    <a href="contact.php">Contact</a>
                                </li>
                                <li class="has-child">
                                    <a href="orders.php">Orders</a>
                                </li>
                                <li><a href="about.php">About</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="right">
                           <ul class="flexitem second-link">
                            <li><a href="cart.php" class="iscart" style="display:flex; justify-content: speach-between;">
                                    <div class="icon-large">
                                          <i class="ri-shopping-cart-line"></i>
                                          <div class="fly-item">
                                             <span class="item-number"></span>
                                          </div>
                                    </div>
                                    <div class="icon-text" >
                                          <div class="mini-text">Total</div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>

   <header>
         <div class="header-main mobile-hide">
            <div class="container">
                <div class="wrapper flexitem">
                    <div class="left">
                        <div class="dpt-cat">
                            <div class="dpt-head">
                                <div class="main-text">All Departments</div>
                                <div class="mini-text mobile-hide">
                                <?php 
                                    // Execute individual queries for each table
                                    $select_vitamins = mysqli_query($conn, "SELECT COUNT(*) AS vitamin_count FROM `vitamins`") or die(mysqli_error($conn));
                                    $select_toys = mysqli_query($conn, "SELECT COUNT(*) AS toy_count FROM `toys`") or die(mysqli_error($conn));
                                    $select_foods = mysqli_query($conn, "SELECT COUNT(*) AS food_count FROM `foods`") or die(mysqli_error($conn));
                                    $select_cats = mysqli_query($conn, "SELECT COUNT(*) AS cat_count FROM `cats`") or die(mysqli_error($conn));
                                    $select_dogs = mysqli_query($conn, "SELECT COUNT(*) AS dog_count FROM `dogs`") or die(mysqli_error($conn));
                                    $select_birds = mysqli_query($conn, "SELECT COUNT(*) AS bird_count FROM `birds`") or die(mysqli_error($conn));
                                    $select_fishs = mysqli_query($conn, "SELECT COUNT(*) AS fish_count FROM `fishs`") or die(mysqli_error($conn));
                                    $select_rabbits = mysqli_query($conn, "SELECT COUNT(*) AS rabbit_count FROM `rabbits`") or die(mysqli_error($conn));
                                    $select_pets = mysqli_query($conn, "SELECT COUNT(*) AS pet_count FROM `pets`") or die(mysqli_error($conn));
                                    $select_rets = mysqli_query($conn, "SELECT COUNT(*) AS ret_count FROM `rets`") or die(mysqli_error($conn));
                                    // Add more queries for other tables as needed

                                    // Fetch counts from each query
                                    $row_vitamins = mysqli_fetch_assoc($select_vitamins);
                                    $row_toys = mysqli_fetch_assoc($select_toys);
                                    $row_foods = mysqli_fetch_assoc($select_foods);
                                    $row_cats = mysqli_fetch_assoc($select_cats);
                                    $row_dogs = mysqli_fetch_assoc($select_dogs);
                                    $row_birds = mysqli_fetch_assoc($select_birds);
                                    $row_fishs = mysqli_fetch_assoc($select_fishs);
                                    $row_rabbits = mysqli_fetch_assoc($select_rabbits);
                                    $row_pets = mysqli_fetch_assoc($select_pets);
                                    $row_rets = mysqli_fetch_assoc($select_rets);
                                    // Fetch counts from other tables as needed

                                    // Total count of products
                                    $total_products = $row_vitamins['vitamin_count'] + $row_toys['toy_count'] + $row_foods['food_count'] + $row_cats['cat_count'] + $row_dogs['dog_count'] + $row_birds['bird_count'] + $row_fishs['fish_count'] + $row_rabbits['rabbit_count'] + $row_pets['pet_count'] + $row_rets['ret_count'];
                                    // Calculate total count by adding counts from other tables as needed
                                    ?>

                                    <p style="font-size: 10px;">Total <?php echo $total_products; ?> Products</p>

                                 </div>
                                <a href="#" class="dpt-trigger mobile-hide">
                                    <i class="ri-menu-3-line ri-xl"></i>
                                </a>
                            </div>
                            <div class="dpt-menu">
                                <ul class="second-links">
                                <li class="has-child Medicine">
                                        <a href="cats.php">
                                            <div class="icon-large"><i class="fa-solid fa-cat"></i></div>
                                            Cats
                                        </a>
                                        
                                    </li>
                                    <li class="has-child Devices">
                                        <a href="dogs.php">
                                            <div class="icon-large"><i class="fa-solid fa-dog"></i></div>
                                            Dogs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="birds.php">
                                            <div class="icon-large"><i class="fa-solid fa-dove"></i></div>
                                            Birds
                                        </a>
                                    </li>
                                    <li>
                                        <a href="fishs.php">
                                            <div class="icon-large"><i class="fa-solid fa-fish"></i></div>
                                            Fishs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="rabbits.php">
                                            <div class="icon-large"><span class="material-symbols-outlined">cruelty_free</span></div>
                                            Rabbits
                                        </a>
                                    </li>
                                    <li>
                                        <a href="rets.php">
                                            <div class="icon-large"><span class="material-symbols-outlined">pest_control_rodent</span></div>
                                            Rets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="toys.php">
                                            <div class="icon-large"><i<span class="material-symbols-outlined">toys</span></div>
                                            Toys
                                        </a>
                                    </li>
                                    <li>
                                        <a href="foods.php">
                                            <div class="icon-large"><i class="fa-solid fa-bowl-food"></i></div>
                                            Foods
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pets.php">
                                            <div class="icon-large"><span class="material-symbols-outlined">home_repair_service</span></div>
                                            Pets Accessories
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vitamins.php">
                                            <div class="icon-large"><i class="fa-solid fa-house-chimney-medical"></i></div>
                                            Supplements & Vitamins
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="search-box">
                            <form action="" class="search">
                                <span class="icon-large"><i class="risearch-line"></i></span>
                                <input type="search" placeholder="Search for Products">
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </header>
    <main>
        <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Cashback</h4>
                                            <h2><span>Cashback offer</span><br><span>Available on Certain Orders</span></h2>
                                            <a href="" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider2.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Free Delivary</h4>
                                            <h2><span>First order gets</span><br><span>Free Home Delivery</span></h2>
                                            <a href="" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="assets/slider/slider3.png" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Offer</h4>
                                            <h2><span>12% Discount</span><br><span>On First Order</span></h2>
                                            <a href="" class="primary-button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- slider -->
            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="item">
                            <a href="https://www.zooplus.com/">
                                <img src="assets/brands/asus.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://bdpetmart.com/">
                                <img src="assets/brands/dng.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.petline.com.hk/en/">
                                <img src="assets/brands/hurley.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.jumbopets.com.au/">
                                <img src="assets/brands/oppo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- brands-->
        

        <div class="features">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Cats</span></h2>
                            <div class="second-links">
                                <a href="cats.php" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="products main flexwrap">
                            <?php  
                                $select_cats = mysqli_query($conn, "SELECT * FROM `cats` LIMIT 8") or die('query failed');
                                if(mysqli_num_rows($select_cats) > 0){
                                    while($fetch_cats = mysqli_fetch_assoc($select_cats)){
                            ?>
                            <form action="" method="post">
                            <div class="item">
                                <div class="media ">
                                    <div class="thumbnail object-cover-1">
                                        <a href="#">
                                            <img src="uploaded_img/<?php echo $fetch_cats['image']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="main-links"><a href="#"><?php echo $fetch_cats['name']; ?></a></h3>
                                    
                                    <p style="font-weight: 5px; color:rgb(59, 58, 58); font-size: 12px;"><?php echo $fetch_cats['gname']; ?></i></p>
                                    <div class="rrr">
                                        <div class="price">
                                            <span class="current"><?php echo $fetch_cats['oprice']; ?> TAKA</span>
                                            <span class="normal mini-text"><?php echo $fetch_cats['price']; ?> TAKA</span>
                                        </div>
                                    </div>
                                    <div class="quintity" style="display:flex;">
                                        <input type="hidden" name="poduct_name" value="<?php echo $fetch_cats['name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $fetch_cats['oprice']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $fetch_cats['image']; ?>">    
                                        <input type="number" min="1" name="product_quantity" value="1" style="width: 115px;">
                                        <input type="submit" value="add to cart" name="add_to_cart" class="primary-button mini-button" style="margin-left: 10px;">
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php
                                    }
                                }else{
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Dogs</span></h2>
                            <div class="second-links">
                                <a href="dogs.php" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="products main flexwrap">
                            <?php  
                                $select_dogs = mysqli_query($conn, "SELECT * FROM `dogs` LIMIT 8") or die('query failed');
                                if(mysqli_num_rows($select_dogs) > 0){
                                    while($fetch_dogs = mysqli_fetch_assoc($select_dogs)){
                            ?>
                            <form action="" method="post">
                            <div class="item">
                                <div class="media ">
                                    <div class="thumbnail object-cover-1">
                                        <a href="#">
                                            <img src="uploaded_img/<?php echo $fetch_dogs['image']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="main-links"><a href="#"><?php echo $fetch_dogs['name']; ?></a></h3>
                                    <div class="rrr">
                                        <div class="price">
                                            <span class="current"><?php echo $fetch_dogs['oprice']; ?> TAKA</span>
                                            <span class="normal mini-text"><?php echo $fetch_dogs['price']; ?> TAKA</span>
                                        </div>
                                    </div>
                                    <div class="quintity" style="display:flex;">
                                        <input type="hidden" name="product_name" value="<?php echo $fetch_dogs['name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $fetch_dogs['oprice']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $fetch_dogs['image']; ?>">    
                                        <input type="number" min="1" name="product_quantity" value="1" style="width: 115px;">
                                        <input type="submit" value="add to cart" name="add_to_cart" class="primary-button mini-button" style="margin-left: 10px;">
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php
                                    }
                                }else{
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Birds</span></h2>
                            <div class="second-links">
                                <a href="dogs.php" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="products main flexwrap">
                            <?php  
                                $select_birds = mysqli_query($conn, "SELECT * FROM `birds` LIMIT 8") or die('query failed');
                                if(mysqli_num_rows($select_birds) > 0){
                                    while($fetch_birds = mysqli_fetch_assoc($select_birds)){
                            ?>
                            <form action="" method="post">
                            <div class="item">
                                <div class="media ">
                                    <div class="thumbnail object-cover-1">
                                        <a href="#">
                                            <img src="uploaded_img/<?php echo $fetch_birds['image']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="main-links"><a href="#"><?php echo $fetch_birds['name']; ?></a></h3>
                                    <div class="rrr">
                                        <div class="price">
                                            <span class="current"><?php echo $fetch_birds['oprice']; ?> TAKA</span>
                                            <span class="normal mini-text"><?php echo $fetch_birds['price']; ?> TAKA</span>
                                        </div>
                                    </div>
                                    <div class="quintity" style="display:flex;">
                                        <input type="hidden" name="product_name" value="<?php echo $fetch_birds['name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $fetch_birds['oprice']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $fetch_birds['image']; ?>">    
                                        <input type="number" min="1" name="product_quantity" value="1" style="width: 115px;">
                                        <input type="submit" value="add to cart" name="add_to_cart" class="primary-button mini-button" style="margin-left: 10px;">
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php
                                    }
                                }else{
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Fishs</span></h2>
                            <div class="second-links">
                                <a href="dogs.php" class="view-all">View all<i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="products main flexwrap">
                            <?php  
                                $select_fishs = mysqli_query($conn, "SELECT * FROM `fishs` LIMIT 8") or die('query failed');
                                if(mysqli_num_rows($select_fishs) > 0){
                                    while($fetch_fishs = mysqli_fetch_assoc($select_fishs)){
                            ?>
                            <form action="" method="post">
                            <div class="item">
                                <div class="media ">
                                    <div class="thumbnail object-cover-1">
                                        <a href="#">
                                            <img src="uploaded_img/<?php echo $fetch_fishs['image']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="main-links"><a href="#"><?php echo $fetch_fishs['name']; ?></a></h3>
                                    <div class="rrr">
                                        <div class="price">
                                            <span class="current"><?php echo $fetch_fishs['oprice']; ?> TAKA</span>
                                            <span class="normal mini-text"><?php echo $fetch_fishs['price']; ?> TAKA</span>
                                        </div>
                                    </div>
                                    <div class="quintity" style="display:flex;">
                                        <input type="hidden" name="product_name" value="<?php echo $fetch_fishs['name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $fetch_fishs['oprice']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $fetch_fishs['image']; ?>">    
                                        <input type="number" min="1" name="product_quantity" value="1" style="width: 115px;">
                                        <input type="submit" value="add to cart" name="add_to_cart" class="primary-button mini-button" style="margin-left: 10px;">
                                    </div>
                                </div>
                            </div>
                            </form>
                            <?php
                                    }
                                }else{
                                    echo '<p class="empty">no products added yet!</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script src="js/script.js"></script>

</body>
</html>