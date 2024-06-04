<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_adoption'])) {
   // Escape user inputs for security
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $massage = mysqli_real_escape_string($conn, $_POST['massage']);

   // Check if product name already exists
   $select_product_name = mysqli_query($conn, "SELECT name FROM `adop_massage` WHERE name = '$name'");
   if(!$select_product_name) {
       die('Query failed: ' . mysqli_error($conn));
   }

   if(mysqli_num_rows($select_product_name) > 0) {
       $message[] = 'Your Adoption Request Submitted';
   } else {
       // Insert new product into the database
       $insert_query = "INSERT INTO `adop_massage` (name, email, number, massage) VALUES ('$name', '$email', '$number', '$massage')";
       $add_product_query = mysqli_query($conn, $insert_query);

       if($add_product_query) {
           $message[] = 'Your Adoption Request Submitted';
       } else {
           $message[] = 'Product could not be added!';
       }
   }
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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AnimalKingdom</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<header>
        <div class="header-main mobile-hide">
            <div class="container">
                <div class="wrapper flexitem">
                    
                    <div class="right">
                        <div class="search-box">
                            <form action="" class="search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php include 'header1.php'; ?>

<section class="contact">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Submit Your Pet Information</h3>
      <input type="text" name="name" required placeholder="Enter Your Name" class="box">
      <input type="email" name="email" required placeholder="Enter Your Email" class="box">
      <input type="number" name="number" required placeholder="Enter Your Phone Number" class="box">
      <textarea name="massage" class="box" placeholder="Enter Your Cat Information" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Send message" name="add_adoption" class="btn">
   </form>

</section>
        <div class="features">
            <div class="container">
                <div class="wrapper">
                    <div class="column">
                        <div class="sectop flexitem">
                            <h2 style="text-align: center;"><span class="circle" style="text-align: center;"></span><span>adoption</span></h2>
                        </div>
                        <div class="products main flexwrap">
                            <?php  
                                $select_adoption = mysqli_query($conn, "SELECT * FROM `adoption` ") or die('query failed');
                                if(mysqli_num_rows($select_adoption) > 0){
                                    while($fetch_adoption = mysqli_fetch_assoc($select_adoption)){
                            ?>
                            <form action="" method="post">
                            <div class="item">
                                <div class="media ">
                                    <div class="thumbnail object-cover-1">
                                        <a href="#">
                                            <img src="uploaded_img/<?php echo $fetch_adoption['image']; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="main-links"><a href="#"><?php echo $fetch_adoption['name']; ?></a></h3>
                                    <div class="rrr">
                                        <div class="price">
                                            <span class="current"><?php echo $fetch_adoption['oprice']; ?> TAKA</span>
                                        </div>
                                    </div>
                                    <div class="quintity" style="display:flex;">
                                        <input type="hidden" name="product_name" value="<?php echo $fetch_adoption['name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $fetch_adoption['oprice']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $fetch_adoption['image']; ?>">    
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






<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>

</body>
</html>