<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['book_table'])){

   if($user_id == ''){
      header('location:login.php');
      exit();
   }

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $guests = $_POST['guests'];
   $guests = filter_var($guests, FILTER_SANITIZE_STRING);
   $date = $_POST['date'];
   $date = filter_var($date, FILTER_SANITIZE_STRING);
   $time = $_POST['time'];
   $time = filter_var($time, FILTER_SANITIZE_STRING);

   $select_reservation = $conn->prepare("SELECT * FROM `reservations` WHERE date = ? AND time = ? AND user_id = ?");
   $select_reservation->execute([$date, $time, $user_id]);

   if($select_reservation->rowCount() > 0){
      $message[] = 'you already have a reservation at this time!';
   }else{
      $insert_reservation = $conn->prepare("INSERT INTO `reservations`(user_id, name, email, number, guests, date, time) VALUES(?,?,?,?,?,?,?)");
      $insert_reservation->execute([$user_id, $name, $email, $number, $guests, $date, $time]);
      $message[] = 'table reservation request sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book a Table</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>Book a Table</h3>
   <p><a href="home.php">home</a> <span> / reservation</span></p>
</div>

<section class="contact">
   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>Reserve Your Spot!</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
         <input type="number" name="guests" min="1" max="20" class="box" placeholder="number of guests" required>
         <input type="date" name="date" class="box" required>
         <input type="time" name="time" class="box" required>
         <input type="submit" value="book table" name="book_table" class="btn">
      </form>
   </div>
</section>

<?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>