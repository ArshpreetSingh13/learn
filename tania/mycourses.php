<?php
session_start();
if (!isset($_SESSION["email"])) {
    echo "<script> window.location.assign('login.php?msg=Login First please') </script>";
}
include("header.php")
    ?>

<main>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1> My COURSES<br></h1>
                      
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">COURSES<br></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">



        <section id="courses" class="courses section">

            <div class="container">

                <div class="row">
                <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                        }

                        ?>


                    <?php

                    include("config.php");
                    $email=$_SESSION["email"];
                    $query = "SELECT purchase.*, course_category.image, course_category.course_name, course_category.course_price, course_category.description, course_category.free_video from `purchase` inner join `course_category` on purchase.course=course_category.id where purchase.user='$email'";

                    $res = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_assoc($res)) {

                        
                        ?>
                     

                      

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <a href="single_course.php?id=<?php echo $data['course'];?>">

                            <div class="course-item">
                                <img src="course_image/<?php echo $data['image'];
                                ?>"
                                class="img-fluid" alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">

                                        <p class="price">
                                           &#8377;<?php
                                            echo $data["course_price"];
                                            ?>
                                        </p>
                                    </div>

                                    <h3><a href="single_course.php?id=<?php echo $data['course'];?>">
                                            <?php
                                            echo $data["course_name"];
                                            ?></p>
                                        </a></h3>
                                    <p class="description"><?php echo $data['description']; ?> </p>
                                    
                                </div>
                            </div>
                            </a>
                        </div> <!-- End Course Item-->
                        

                        <?php
                    }

                    ?>





                </div>

            </div>

        </section><!-- /Courses Section -->

    </section><!-- /Contact Section -->

</main>

<?php
include("footer.php") ?>

 