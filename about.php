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
         <img src="images/eb.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> Books is a product of Salt and Light Children Discipleship with the vision to provide an extensive library of books in digital format for free to every one around the world.

with Books you have access to all kind of educational, motivation and career book to keep you going in any areas

Over this years, we are still going strong in our mission to provide a valuable service to readers. Books has grown into a platform where self-publishing authors have the opportunity to introduce their work to our community.
</p>

         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title"> authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/girish.jpg" alt="">

         <h3>Girish Karnad</h3>
      </div>

      <div class="box">
         <img src="images/oda.jpg" alt="">

         <h3>Oda</h3>
      </div>

      <div class="box">
         <img src="images/row.jpg" alt="">

         <h3>J.K Rowling</h3>
      </div>

      <div class="box">
         <img src="images/chetan.jpg" alt="">

         <h3>Chetan Bhagat</h3>
      </div>

      <div class="box">
         <img src="images/flem.jpg" alt="">

         <h3>Ian Flemming</h3>
      </div>

      <div class="box">
         <img src="images/shake.jpg" alt="">

         <h3>William Shakespeare</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>