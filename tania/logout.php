<?php
session_start();
session_unset();



echo "<script> window.location.assign('admin_login.php?msg=logout successfully') </script>";

?>