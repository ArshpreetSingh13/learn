<?php
 session_start();
include("header.php")
?>

<main>
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Update Profile<br></h1>
          <p>Edit Your Details</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Update Profile<br></li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->
  <!-- Contact Section -->
  <section id="contact" class="contact section">



    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 ">



        <div class="col-lg-8 offset-2 ">

          

          <?php 
          include("config.php");
         
          
          $user=$_SESSION['email'];
         $query=" SELECT * FROM `student` WHERE  email='$user' ";
         $res=mysqli_query($db,$query);
         $data=mysqli_fetch_assoc($res);
          ?>





          <form  method="post" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4 bg-light mt-3">
              <div class="col-md-12">
                <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $data['username']?>">
              </div>
              <div class="col-md-12">
                <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $data['email']?>">

              </div>
              <div class="col-md-12">
                <input type="number" class="form-control" name="contact" placeholder="contact" value="<?php echo $data['contact']?>">

              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $data['address']?>">

              </div>





              


              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success rounded-pill m-2 px-3" name="submit_btn">SUBMIT</button>



              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<?php
include("footer.php")
?>

<?php
if(isset($_REQUEST['submit_btn'])){
    

$user=$_SESSION['email'];
$username=$_REQUEST["username"];

$email=$_REQUEST["email"];

$contact=$_REQUEST["contact"];

$address=$_REQUEST["address"];



include("config.php");

$query="INSERT INTO `student`( `username`, `email`, `password`, `contact`, `address`) VALUES ('$username','$email','$password','$contact','$address')";

$query="UPDATE `student` SET `username`='$username',`email`='$email',`contact`='$contact',`address`='$address' WHERE email='$user' ";


$res=mysqli_query($db,$query);

if($res>0){
    echo "<script>window.location.assign('update_profile.php?msg=Profile updated')</script>";
}
else{
    echo "<script>window.location.assign('update_profile.php?msg=Profile is not updated')</script>";
}








}
?>