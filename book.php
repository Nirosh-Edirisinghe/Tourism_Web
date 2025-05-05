<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Traventora</title>
   
  
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
   <section class="header">

      <a href="home.php" class="logo">Traventora</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">about</a>
         <a href="services.php">services</a>
         <a href="contact.php">contact</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <section id="booking">

      <h1 class="heading-title">book your trip!</h1>
     
      <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
            <div class="input-box">
               <span>name:</span>
               <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="input-box">
               <span>email:</span>
               <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="input-box">
               <span>phone:</span>
               <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="input-box">
               <span>address:</span>
               <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="input-box">
               <span>where to:</span>
               <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="input-box">
               <span>how many:</span>
               <input type="number" placeholder="how many guests" name="guests">
            </div>

            <div class="input-box">
               <span>arrivals:</span>
               <input type="date" name="arrivals">
            </div>

            <div class="input-box">
               <span>leaving:</span>
               <input type="date" name="leaving">
            </div>
         </div>
         <input type="submit" value="submit" class="btn" name="send">
      </form>

         
   </section>

   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>packages</a>
            <a href="contat.php"><i class="fas fa-angle-right"></i>contact</a>
         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy  policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +94782636481</a>
            <a href="#"><i class="fas fa-phone"></i> +94719176816</a>
            <a href="#"><i class="fas fa-envelope"></i> nirosh@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> colombo,Sri Lanka</a>
            
            
         </div>

         <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> intagram</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a> 
         </div>
      </div>

      <div class="credit">all right reserved @niroshEdirisinghe.</div>

   </section>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <script src="script.js  "></script>

   
</body>
</html>