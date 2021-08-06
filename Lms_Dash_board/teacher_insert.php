<?php

include('Connect.php');
if(isset($_POST['btn_t']))
{
  $t_name=$_POST['tname'];
  $t_pass=$_POST['tpass'];
  $t_cont=$_POST['tcont'];
  $t_sal=$_POST['tsal'];
  $t_qal=$_POST['tqal'];
  $image = $_FILES['timg']['name'];
  $imgtn = $_FILES['timg']['tmp_name'];
  $imgty = $_FILES['timg']['type'];
  $imgsi =$_FILES['timg']['size'];
  $folder ="assets/images/teacherprofiles/";
  if ($imgty=="image/png" || $imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg" || $imgty=="image/jfif" ) {
      if ($imgsi<=1000000) {
          $path =$folder.$image;
         $imgq="INSERT INTO `teacher`(`TeacherName`,`TeacherPass`,`contact`,`Teacher_img`, `salary`, `qualification`) VALUES ('$t_name','$t_pass','$t_cont','$path','$t_sal','$t_qal')";
         $result =mysqli_query($con,$imgq);
         move_uploaded_file($imgtn,$path);
         if ($result) {
            echo"<script> alert('Image inserted'); window.location.href='showteacher.php' </script>";
         }
         else{
             echo mysqli_error($con);
         }  
         }
         else{
            echo"<script> alert('The picture you choose its too large');  </script>";
        }
  }
  else{
    echo"<script> alert('Wrong format'); window.location.href='showteacher.php' </script>";
}

}

?>