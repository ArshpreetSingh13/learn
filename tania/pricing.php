<?php
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
    <section id="pricing" class="pricing section">

      <div class="container">

        <div class="row gy-3">
        <?php

include("config.php");

$query = "SELECT * FROM `course_category`";

$res = mysqli_query($db, $query);

while ($data = mysqli_fetch_assoc($res)) {

    
    ?>

          <div class=" col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
            <a href="buy_course.php?id=<?php echo $data['id'];?>">

                            <div class="course-item">
                                <img src="course_image/<?php echo $data['image'];
                                ?>"
                                class="img-fluid" alt="...">

                                

                              


                            


                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <p class="price">
                                            <?php
                                            echo $data["course_price"];
                                            ?>
                                        </p>
                                    </div>

                                    <h3><a href="course-details.php">
                                            <?php
                                            echo $data["course_name"];
                                            ?></p>
                                        </a></h3>
                                    <p class="description"><?php echo $data['description']; ?> </p>

                                </div>
                            </div>
                            </a>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
          <?php
                    }

                    ?><!-- End Pricing Item -->


          
      

        </div>

      </div>

    </section><!-- /Pricing Section -->

  </main>

  <?php
 include("footer.php");
 ?>

 