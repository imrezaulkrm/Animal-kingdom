<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `adop_massage` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_adoption_m.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adop_massages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">
   <div class="box-container" style="font-style: italic; margin-bottom: 10px;">
   <a href="admin_adoption_m.php" class="delete-btn" style="text-align: center;">Adoption Request</a>
   <a href="admin_adoption.php" class="delete-btn" style="text-align: center;">Add Adoption</a>
   </div>
   <h1 class="title"> Adoption Massages </h1>
   <div class="box-container">
   <?php
      $select_adop_massage = mysqli_query($conn, "SELECT * FROM `adop_massage`") or die('query failed');
      if(mysqli_num_rows($select_adop_massage) > 0){
         while($fetch_adop_massage = mysqli_fetch_assoc($select_adop_massage)){
      
   ?>
   <div class="box">
      <p> name : <span><?php echo $fetch_adop_massage['name']; ?></span> </p>
      <p> number : <span><?php echo $fetch_adop_massage['number']; ?></span> </p>
      <p> email : <span><?php echo $fetch_adop_massage['email']; ?></span> </p>
      <p> massage : <span><?php echo $fetch_adop_massage['massage']; ?></span> </p>
      <a href="admin_adoption_m.php?delete=<?php echo $fetch_adop_massage['id']; ?>" onclick="return confirm('delete this massage?');" class="delete-btn">delete massage</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no massages!</p>';
   }
   ?>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>