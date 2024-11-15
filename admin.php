<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>

    <link rel="stylesheet" href="css/style.css">
  
</head>

<body>

  
    <section class="header">

        <a href="home.php" class="logo">YMS tour and Travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="package.php">Tour site</a>
            <a href="book.php">Reservation</a>
            <a href="about.php">about</a>
            <a href="admin.php">Agent</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="booking">
        <form action="auth.php" method="post" class="book-form">
            <h1 class="heading-title">Agent login page</h1>
            <div class="flex">
                <br>
                <div class="inputBox">
                    <label for="userid"><span>User ID:</span> </label>
                    <input type="text" id="userid" name="userid" placeholder="your ID">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for=" password"><span>Password:</span></label>
                    <input type="password" id="password" name="password" placeholder="enter your password">
                </div>
            </div>
            <br><br>
            <input type="submit" value="Submit" class="btn" name="submit">
        </form>
        <h2>please only login if you are Agent !</h2>
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