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
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="mangamania/logo2.png" alt="">
      </div>

      <div class="content">
         <h3>why manga mania?</h3>
         <p>Manga Mania is a new book retailer with a unique offer -- over 200 thousand books and free delivery countrywide (with no minimum spend). We ship hundreds of books every day from our fulfillment centre in Sandton to all the provinces in South Africa.</p>
         <p>Our vision is to provide “All Books Available to All” by improving selection, access and affordability of books.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customer reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="mangamania/user1.jpg" alt="">
         <p>Adore this store, lots of great manga series. The delivery could be more timely but nonetheless, Love the website.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neferium</h3>
      </div>

      <div class="box">
         <img src="mangamania/user2.jpg" alt="">
         <p>I had a very pleasant experience while there. The staffs are friendly and they have many varieties of comics and mangas or anything related to them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>theburqaavenger</h3>
      </div>

      <div class="box">
         <img src="mangamania/user3.jpg" alt="">
         <p>Ordered some manga from them on 2 seperate occasions. Both were wrapped and packed excellently well, no chance of getting damaged. Would definately do business with them again!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>bethanytoohot</h3>
      </div>

      
   </div>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>