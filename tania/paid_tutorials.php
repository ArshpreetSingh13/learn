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
            <h1>Paid Tutorials</h1>
           
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Tutorials</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Pricing Section -->
  <section id="pricing" class="pricing section">

    <div class="container">

      <div class="row gy-3">
        <?php

        include("config.php");
        $count = 1;
        $id=$_GET['id'];
        $query = "SELECT tutorial.* , course_category.course_name FROM `tutorial` INNER JOIN `course_category` on tutorial.course=course_category.id && tutorial.course='$id'" ;
        $res = mysqli_query($db, $query);
        while ($data = mysqli_fetch_assoc($res)) {


          ?>
          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item featured">
              <?php
              if ($count == 1) {
                ?>
                <h3>Beginner</h3>
                <?php
              }
              else if ($count == 2) {
                ?>
                <h3>Intermediate</h3>
                <?php
              }
              else {
                ?>
                <h3>Advance</h3>
                <?php
              }

              $count=$count+1;
              ?>
              <iframe width="320" height="180" src="<?php echo $data['video_link'] ?>" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>



              <div class="">
                <p class="C h5"><?php echo $data['name'] ?></p>
                <p class=" h5"><?php echo $data['course_name'] ?></p>
                <p class=" "><?php echo $data['tags'] ?></p>
                <p class=" "><?php echo $data['description'] ?></p>
              </div>
            </div>
          </div><!-- End Pricing Item -->


          <?php
        }

        ?>




      </div>

    </div>

  </section><!-- /Pricing Section -->

</main>


<?php
include("footer.php");
?>