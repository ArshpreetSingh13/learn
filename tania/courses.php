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
                        <h1> COURSES<br></h1>
                       
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

                    $query = "SELECT * FROM `course_category`";

                    $res = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_assoc($res)) {

                        
                        ?>
                     

                      

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <a href="single_course.php?id=<?php echo $data['id'];?>">

                            <div class="course-item">
                                <img src="course_image/<?php echo $data['image'];
                                ?>"
                                class="img-fluid" alt="...">

                                

                              


                            


                                <div class="course-content">
                                

                                    <h3><a href="course-details.php">
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

</main>

<?php
include("footer.php") ?>

 