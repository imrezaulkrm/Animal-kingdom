<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="assets/images/about-img.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>
         Welcome to our pet paradise! At Animal Kingdom, we're dedicated to serving all your pet needs under one virtual roof. Whether you're a proud parent to a cuddly cat, a loyal dog, or a serene fish, we've got you covered. From essential medicines to the latest toys and accessories, we offer a diverse range of products to keep your furry friends happy and healthy. But we're more than just a pet store; we're a haven for animal lovers. With our adoption services, we aim to unite pets with their forever families, spreading love and joy one adoption at a time. And for those times when life gets busy, our top-notch pet daycare services ensure your beloved companions receive the attention and care they deserve. Join our community of passionate pet enthusiasts today and let's make tails wag and purrs rumble together!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="assets/images/rezaul.jpg" alt="">
         <p>Animal Kingdom offers a comprehensive range of pet products and services, including toys, accessories, medicine, adoption, and daycare.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Md Rezaul Karim</h3>
      </div>

      <div class="box">
         <img src="assets/images/ismail.jpg" alt="">
         <p>Your one-stop destination for all your pet needs, from toys and accessories to adoption and daycare services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Md Ismail Hossain Khan </h3>
      </div>

      <div class="box">
         <img src="assets/images/asha.jpg" alt="">
         <p>Animal Kingdom provides everything a pet owner needs, from toys to adoption services, in one convenient online platform.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tamanna Asha</h3>
      </div>

      <div class="box">
         <img src="assets/images/shanto.jpg" alt="">
         <p>
            Animal Kingdom provides a comprehensive range of pet products and services, including adoption and daycare, in a user-friendly platform.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Md Anamul Hasan </h3>
      </div>

      <div class="box">
         <img src="assets/images/mahanaj.jpg" alt="">
         <p>
         Where every pet's needs find a comprehensive solution online, from playful toys to compassionate adoption services.
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mahanaj Begum</h3>
      </div>

      <div class="box">
         <img src="assets/images/uma.jpg" alt="">
         <p>Animal Kingdom's website offers a delightful array of pet products and services, ensuring every pet owner finds what they need with ease.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Umeyasing Marma</h3>
      </div>


</section>
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="script.js"></script>

</body>
</html>