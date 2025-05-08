<?php


session_start();
if (!isset($_SESSION["email"])) {
    echo "<script> window.location.assign('login.php?msg=Login First please') </script>";
}

include("header.php");
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Pricing</h1>
          
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Pricing</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Pricing Section -->
  <section class="bg-success">
    <div class="container">
      <div class="row gy-4  justify-content-center">
        <div class="col-lg-8 bg-white p-5 rounded-4 ">

          <form  method="post" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 bg-light">

            <?php

            $id = $_GET["id"];

            include("config.php");

            $query = "SELECT * FROM `course_category` WHERE `id`='$id'";

            $res=mysqli_query($db,$query);

            $data=mysqli_fetch_assoc($res);

            ?>
            <h1>Total is &#8377;<?php echo $data['course_price']?></h1>

              <div class="col-md-12 ">
                <input type="name" class="form-control" name="name" placeholder="Card Holder's Name" required="">
              </div>

              <div class="col-md-12">
                <input type="number" maxlength="16" minlength="16" class="form-control" name="card_number" placeholder="Card Number" required="">
              </div>
              <div class="col-md-6">
                <input type="month"  class="form-control" name="month" placeholder="Expiry Date" required="">
              </div>
              <div class="col-md-6">
                <input type="number"  maxlength="3" minlength="3" class="form-control" name="number" placeholder="CVV" required="">
              </div>

           


              <div class="col-md-12 text-center">

                <button type="submit" class="btn btn-success rounded-pill m-2 px-3" name="submit_btn">Pay Now</button>

              </div>
            </div>
          </form>

        </div>

      
      </div>
    </div>
  </section>

</main>

<?php
include("footer.php");
?>
<?php
if(isset($_REQUEST["submit_btn"])){
  $email=$_SESSION["email"];

  $card_number=$_REQUEST["card_number"];
  $amount=$data['course_price'];
  $pay_mode="Online";
  $date=date("Y-m-d");
  $transaction="LL-".rand();

include("config.php");

$query="INSERT INTO `purchase`(`user`, `course`, `amount`, `payment_mode`, `card number`, `date`, `transaction`) VALUES ('$email','$id','$amount','Online','$card_number','$date','$transaction')";


$res=mysqli_query($db,$query);

if($res>0){
    echo "<script>window.location.assign('mycourses.php?msg=Course Buy successfully')</script>";
}
else{
    echo "<script>window.location.assign('buy_course.php?msg=Something went wrong!!&id=$id')</script>";
}

}

?>