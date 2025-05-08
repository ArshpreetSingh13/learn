<?php

session_start();
if (!isset($_SESSION["email"])) {
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
                        <h1>MANAGE STUDENTS<br></h1>
                        <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                            voluptas
                            consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione
                            sint. Sit
                            quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">MANAGE TUTORIALS<br></li>
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
                    if (isset($_GET['msg'])) {
                        echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                    }

                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Thumbnail</th>
                            <th>Video_link</th>
                            <th>Description</th>
                            <th>Tags</th>
                            <th>Delete</th>
                            <th>Update</th>





                        </tr>


                        <?php

                        include("config.php");

                        $query = "SELECT tutorial.* ,course_category.course_name FROM `tutorial` INNER JOIN `course_category` on tutorial.course=course_category.id";

                        $res = mysqli_query($db, $query);

                        while ($data = mysqli_fetch_assoc($res)) {


                        ?>

                            <tr>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['course_name'] ?></td>
                                <td><?php echo $data['thumbnail'] ?></td>
                                <td><?php echo $data['video_link'] ?></td>
                                <td><?php echo $data['description'] ?></td>
                                <td><?php echo $data['tags'] ?></td>


                                <td>

                                    <a href="delete_tutorials.php?id=<?php echo $data['id']; ?>" class="text-white">
                                        <button class="text-white bg-success btn px-3 py-2 m-3 py-0 rounded position-absolute">

                                            Delete
                                        </button>


                                    </a>
                                </td>

                                <td colspan="">
                                    <a href="update_tutorials.php?id=<?php echo $data['id']; ?>" class="text-white">

                                        <button class="btn text-white bg-success px-3 py-2 m-3 py-0  rounded position-absolute">

                                            Update
                                        </button>

                                    </a>
                                </td>




                            </tr>


                        <?php
                        }

                        ?>

                    </table>



                </div>

            </div>

        </section><!-- /Courses Section -->

    </section><!-- /Contact Section -->

</main>



<?php
include("footer.php");
?>