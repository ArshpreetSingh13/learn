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
                        <h1>MANAGE Purchase<br></h1>
                      
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">MANAGE Purchase<br></li>
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
                            <th>ID</th>
                            <th>User Details</th>
                            <th>Course Details</th>
                            <th>Date</th>
                            <th>Transaction Id</th>
                            <th>Cost</th>
                            <th>Status</th>




                        </tr>


                        <?php

                        include("config.php");

                        $query = "SELECT purchase.*, course_category.image, course_category.course_name, course_category.course_price, course_category.description, course_category.free_video, student.username, student.contact, student.address from `purchase` inner join `course_category` on purchase.course=course_category.id inner join `student` on purchase.user=student.email order by purchase.id desc";
                        $sno=1;
                        $res = mysqli_query($db, $query);

                        while ($data = mysqli_fetch_assoc($res)) {


                        ?>

                            <tr>
                                <td>
                                    <?php
                                    echo $sno;
                                    ?>
                                </td>

                                <td>
                                    <?php echo $data["username"];?><br>
                                    <?php echo $data["user"];?><br>
                                    <?php echo $data["contact"];?><br>
                                    <?php echo $data["address"];?><br>
                                </td>

                                <td>
                                    <img src="course_image/<?php echo $data['image']?>" style="height:50px; width:50px;"><br>
                                    <?php echo $data["course_name"]; ?><br>
                                  
                                </td>

                                <td>
                                    <?php
                                    echo $data["date"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $data["transaction"];
                                    ?>
                                </td>
                                <td>
                                  &#8377;  <?php
                                    echo $data["amount"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $data["status"];
                                    ?>
                                </td>

                             





                            </tr>


                        <?php
                        $sno++;
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