<?php

session_start();
if(!isset($_SESSION["email"])){
    echo "<script> window.location.assign('admin_login.php?msg=Login First please') </script>";
}

include("admin_heading.php");
?>
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Dashboard<br></h1>

                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">Dashboard<br></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container-fluid">
        <div class="row my-5 ms-5 ps-5">
            <div class="col-md-3 m-2">
                <div class="card  d-flex justify-content-center" style="width: 18rem;">
                    <img src="https://static.vecteezy.com/system/resources/previews/013/042/571/non_2x/default-avatar-profile-icon-social-media-user-photo-in-flat-style-vector.jpg"
                        class="w-50 ms-5 ps-5 " alt="...">

                    <h5 class="card-title text-center ">Total Students</h5>

                    <?php


                    include("config.php");
                    $query = "SELECT count(*) as total from `student`";
                    $result = mysqli_query($db, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>

                    <a href="#" class="btn btn-primary m-2">
                        <?php
                        echo $data["total"];
                        ?>
                    </a>

                </div>
            </div>


            <div class="col-md-3 m-2">
                
            <div class="card d-flex   align-item-center  justify-content-center " style="width: 18rem;">
            <img src="https://static.vecteezy.com/system/resources/previews/013/042/571/non_2x/default-avatar-profile-icon-social-media-user-photo-in-flat-style-vector.jpg" class="w-50 ms-5 ps-5" alt="...">

            <h5 class="card-title text-center">Total Courses</h5>

            <?php


            include("config.php");
            $query = "SELECT count(*) as total from `course_category`";
            $result = mysqli_query($db, $query);
            $data = mysqli_fetch_assoc($result);
            ?>

            <a href="#" class="btn btn-primary m-2">
                <?php
                echo $data["total"];
                ?>
            </a>

        </div>
            </div>
        </div>






    </div>







</main>
<?php
include("footer.php");
?>