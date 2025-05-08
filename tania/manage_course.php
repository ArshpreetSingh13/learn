<?php

session_start();
if(!isset($_SESSION["email"])){
    echo "<script> window.location.assign('admin_login.php?msg=Login First please') </script>";
}

include("admin_heading.php");
    ?>

<main>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>MANAGE COURSE<br></h1>
                    
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">MANAGE COURSE<br></li>
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

                    $query = "SELECT * FROM `course_category`";

                    $res = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_assoc($res)) {

                        
                        ?>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">


                            <div class="course-item">
                                <img src="course_image/<?php echo $data['image'];
                                ?>"
                                class="img-fluid" alt="...">

                                <a href="delete_course.php?id=<?php echo $data['id']; ?>" class="text-white">
                                    <button class="text-white bg-success btn px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 20px;" name="delete">

                                        Delete
                                    </button>

                                </a>


                                <a href="update_course.php?id=<?php echo $data['id']; ?>" class="text-white">

                                    <button class="btn text-white bg-success px-3 py-1 rounded position-absolute"
                                        style="top: 10px; left: 270px;">

                                        Update
                                    </button>

                                </a>


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