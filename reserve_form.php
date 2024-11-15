<?php
$connection = mysqli_connect('localhost', 'root', '', 'reservation_db');

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $location = $_POST['location'];
   $acomodation = $_POST['acomodation'];
   $transport = $_POST['transport'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $request = " insert into reserve_form (name, email, phone, location, acomodation, transport, arrivals, leaving) values('$name','$email','$phone','$location','$acomodation','$transport','$arrivals','$leaving') ";
   mysqli_query($connection, $request);

   header('location:book.php');
} else {
   echo 'something went wrong please try again!';
}
