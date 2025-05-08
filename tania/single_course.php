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
            <h1>Events</h1>
        
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Events</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Events Section -->
  <section id="events" class="events section">

    <div class="container" data-aos="fade-up">

      <div class="row">


        <?php
        $id = $_GET["id"];
        include("config.php");
        $query = "SELECT * FROM `course_category` WHERE `id`='$id'";
        $res = mysqli_query($db, $query);
        $data = mysqli_fetch_assoc($res);

        ?>



        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card">
            <div class="card-img">
              <img src="course_image/<?php echo $data['image'] ?>" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href=""><?php echo $data['course_name'] ?></a></h5>
              <p class="card-text"><?php echo $data['description'] ?></p>
              <p class="fst-italic ">₹<?php echo $data['course_price'] ?></p>

            </div>
          </div>
        </div>


        <div class="col-md-6 d-flex flex-column">
          <iframe width="560" height="315" src=" <?php echo $data['free_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          
         <div class="row my-5">
          <div class="col-md-12 d-flex justify-content-between">
            <?php
           
           $email= $_SESSION["email"];
           $id=$_GET["id"];
           include("config.php");
           $query="SELECT * from `purchase` where `course`='$id' and `user`='$email'";
           $res=mysqli_query($db, $query);
           if(mysqli_num_rows($res)> 0){
            ?>
          <a class="btn btn-success " href="paid_tutorials.php?id=<?php echo $id;?>" style="top: 300px ">View More</a>
          <?php
           }else{
            ?>
           <a class="btn btn-success " href="buy_course.php?id=<?php echo $data['id']?>" style="top: 300px ">BUY</a>
            <?php
           }
          ?>
          </div>
         </div>

        </div>
      </div>

    </div>

  </section><!-- /Events Section -->

</main>

<?php
include("footer.php");
?>