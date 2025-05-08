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
                        <h1>MANAGE STUDENTS<br></h1>
                     
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">MANAGE STUDENTS<br></li>
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
                            <th>S.no</th>
                            <th>Usename</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Delete</th>
                            <!-- <th>Update</th> -->




                        </tr>


                        <?php
$count=0;
                        include("config.php");

                        $query = "SELECT * FROM `student`";

                        $res = mysqli_query($db, $query);

                        while ($data = mysqli_fetch_assoc($res)) {
                            $count++;


                        ?>

                            <tr>
                                <td>
                                    <?php
                                    echo $count;
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    echo $data["username"];
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    echo $data["email"];
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    echo $data["contact"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $data["address"];
                                    ?>
                                </td>

                                <td>

                                    <a href="delete_students.php?id=<?php echo $data['id']; ?>" class="text-white">
                                        <button class="text-white bg-success btn px-3 m-0 py-0 rounded position-absolute">

                                            Delete
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