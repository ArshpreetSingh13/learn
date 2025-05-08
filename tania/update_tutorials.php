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
                        <h1>ADD Tutorials<br></h1>
                     
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li class="current">ADD Tutorials<br></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">



        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 ">




                <div class="col-lg-8 offset-2 ">
                    <?php

                    if (isset($_GET['msg'])) {
                        echo "<div class='alert alert-success' role='alert'>$_GET[msg]</div>";
                    }
                    ?>

                    <form method="post" enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4 bg-light pt-3 mt-5">

                            <h1 class="text-center text-success">Enter Your Tutorial</h1>


                          <?php
                          $id=$_GET['id'];
                          include("config.php");
                          $Uquery="SELECT * FROM `tutorial` WHERE id='$id'";
                          $Ures=mysqli_query($db,$Uquery);
                          $Udata=mysqli_fetch_assoc($Ures);
                          
                          
                          ?>

                            <div class="col-md-12 ">
                                <input type="text" class="form-control rounded-3" name="name"
                                    placeholder="Tutorial Name" value="<?php echo $Udata['name']?>" required="">
                            </div>


                            <div class="col-md-12 ">
                                <select name="course" id=""  class="form-control  rounded-3" required>
                                    <option value="" selected disabled>Enter Your Course</option>

                                    <?php
                                    
                                    $query = "SELECT * FROM `course_category`";
                                    $res = mysqli_query($db, $query);
                                    while ($data = mysqli_fetch_assoc($res)) {
                                        ?>

                                        <option value="<?php echo $data['id'];?>"><?php echo $data['course_name'];?></option>

                                        <?php
                                    }
                                    ?>

                                </select>
                                
                            </div>


                           


                            <div class="col-md-12">

                              <input type="text" name="video_link"  value="<?php echo $Udata['video_link']?>" class="form-control  rounded-3"
                              placeholder="YT link" required="">
                            </div>


                            <div class="col-md-12 ">
                                <textarea name="description" type="text" class="form-control  rounded-3"  
                                placeholder="description" required=""><?php echo $Udata['description']?></textarea>
                            </div>

                            <div class="col-md-12">

                              <input type="text" name="tags" value="<?php echo $Udata['tags']?>"  class="form-control  rounded-3"
                              placeholder="tags" required="">
                            </div>

                          

                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit_btn"
                                    class="btn btn-success rounded-pill m-2 px-3">SUBMIT</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<?php
include("footer.php") ?>


<?php

if (isset($_REQUEST["submit_btn"])) {

    $name = $_REQUEST["name"];
    $id=$_GET['id'];
    $course = $_REQUEST["course"];
    $video_link = $_REQUEST["video_link"];
    $description = $_REQUEST["description"];
    $tags = $_REQUEST["tags"];
    

    include("config.php");

    $query = "UPDATE `tutorial` SET `name`='$name',`course`='$course',`video_link`='$video_link',`description`='$description',`tags`='$tags' WHERE id='$id'";


    $res = mysqli_query($db, $query);

    if ($res > 0) {
        echo "<script>window.location.assign('add_tutorials.php?msg=Added successfully')</script>";
    } else {
        echo "<script>window.location.assign('add_tutorials.php?msg=Addition Unsuccessful')</script>";
    }
}







?>





<?php
if (isset($_REQUEST["submit_btn"])) {

    $course_name = $_REQUEST["course_name"];
    $course_price = $_REQUEST["course_price"];
    $description = $_REQUEST["description"];
    $free_video = $_REQUEST["free_video"];

    if ($_FILES["image"]["name"]) {
        $image = $_FILES["image"];

        $tmp = $image["tmp_name"];

        $new_name = rand() . "-" . $image['name'];


        move_uploaded_file($tmp, "course_image/" . $new_name);
    }

    else{
        $new_name=$data["image"];
    }

    include("config.php");


  

       $query="UPDATE `course_category` SET `image`='$new_name',`course_name`='$course_name',`course_price`='$course_price',`description`='$description',`free_video`='$free_video' WHERE  id='$id'";

       echo $query;

    $res = mysqli_query($db, $query);


    if ($res > 0) {
        echo "<script>window.location.assign('manage_course.php?msg=Course updated')</script>";
    } else {
        echo "<script>window.location.assign('manage_course.php?msg=Course is not updated')</script>";
    }

}

?>