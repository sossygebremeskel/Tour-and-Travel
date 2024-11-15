<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <link rel="stylesheet" href="css/style.css">

</head>

<body>

  

   <section class="header">

      <a href="home.php" class="logo">YMS Tour and Travel</a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="package.php">Tour Site</a>
         <a href="book.php">Reservation</a>
         <a href="about.php">about</a>
         <a href="admin.php">Agent</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>



   <div class="heading" style="background:url(images/trip\ bg.webp) no-repeat">
      <h1>start visiting</h1>
   </div>


   <section class="booking">



      <form action="reserve_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="enter your name" name="name" required>
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="tel" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
               <span>Acomodation :</span>
               <input type="text" placeholder="hotel,resort,camping" name="acomodation" required>
            </div>
            <div class="inputBox">
               <span>Mode of transportation :</span>
               <input type="text" placeholder="plane,cars,etc." name="transport" required>
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving" required>
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>



   <section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="home.php">  home</a>
      <a href="about.php">  about</a>
      <a href="package.php">  Tour site</a>
      <a href="book.php"> Reservation</a>
      <a href="admin.php"> Agent</a>
   </div>


   <div class="box">
      <h3>contact info</h3>
      <a href="#">  +251-983109147 </a>
     
      
      <a href="#">MEKELLE, Ethiopia</a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> Facebook</a>
      <a href="#"> twitter </a>
      <a href="#"> Instagram</a>
      <a href="#"> linkedin </a>
   </div>

</div>



</section>


   <script src="js/script.js"></script>

</body>

</html>