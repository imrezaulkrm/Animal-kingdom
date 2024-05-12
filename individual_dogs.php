<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM `dogs` WHERE id = '$product_id'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        // Product not found, handle accordingly
        echo "Product not found.";
        exit; // Stop execution
    }
} else {
    // Product ID not provided, handle accordingly
    echo "Product ID not provided.";
    exit; // Stop execution
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">
   

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>
<?php include 'header.php'; ?>
<div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <!-- Product images -->
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="uploaded_img/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            </a>
                        </div>
                        <!-- Additional images, if available -->
                        <!-- Add your code for additional images here -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <!-- Product details -->
                        <form action="#" method="post">
                            <h1><?php echo $product['name']; ?></h1>
                            <!-- Add product details like price, description, etc. here -->
                            <div class="price_box">
                                <span class="current_price"><?php echo $product['oprice']; ?> TAKA</span>
                                <span class="old_price"><?php echo $product['price']; ?> TAKA</span>
                            </div>
                            <div class="product_variant quantity">
                                <label>Quantity</label>
                                <input min="1" name="product_quantity" value="1" type="number">
                                <button class="button" type="submit" name="add_to_cart">Add to Cart</button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/productbig5.webp" data-zoom-image="assets/img/product/productbig5.webp" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.webp" data-zoom-image="assets/img/product/productbig4.webp">
                                        <img src="assets/img/product/productbig4.webp" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.webp" data-zoom-image="assets/img/product/productbig1.webp">
                                        <img src="assets/img/product/productbig1.webp" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.webp" data-zoom-image="assets/img/product/productbig2.webp">
                                        <img src="assets/img/product/productbig2.webp" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.webp" data-zoom-image="assets/img/product/productbig3.webp">
                                        <img src="assets/img/product/productbig3.webp" alt="zo-th-1"/>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1><?php echo $product['name']; ?></h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="product-details.html"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="variable-product.html"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                                
                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>

    <?php include 'footer.php'; ?>
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="js/plugins.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>



</body>

</html>