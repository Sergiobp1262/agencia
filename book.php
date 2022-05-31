<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">inicio</a>
      <a href="about.php">sobre nosotros</a>
      <a href="package.php">paquetes</a>
      <a href="book.php">reservas</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">reserva tu viaje!!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nombre :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>teléfono :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>dirección :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>destino :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>ocupantes :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>llegada :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>salida :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="enviar">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>enlaces rápidos</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> sobre nosotros</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> paquetes</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> reservas</a>
      </div>

      <div class="box">
         <h3>enlaces adicionales</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> preguntas</a>
         <a href="#"> <i class="fas fa-angle-right"></i> sobre nosotros</a>
         <a href="#"> <i class="fas fa-angle-right"></i> política de privacidad</a>
         <a href="#"> <i class="fas fa-angle-right"></i> términos de uso</a>
      </div>

      <div class="box">
         <h3>contacto</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sergio@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> tokio, japon - 800104 </a>
      </div>

      <div class="box">
         <h3>síguenos</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

  

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>