<?php

include('Connect.php');
$id=$_GET["eyeD"];
$delq="DELETE FROM `teacher` WHERE TeacherID=$id";
$run=mysqli_query($con,$delq);
if($run){

    echo"<script> alert('Record Delete Succesfully'); window.location.href='showteacher.php' </script>";
}

else{

    echo"<script> alert('Error in Delition') </script>";
}
?>