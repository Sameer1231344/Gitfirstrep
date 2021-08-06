<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!(isset($_SESSION['ADMIN'])) ) {

    header('location:login.php');
}

include('Connect.php');
include('header.php');
$id=$_GET['eyeD'];
 $q="select * from teacher where TeacherId='$id'";
 $rows=mysqli_query($con,$q);
 $data=mysqli_fetch_assoc($rows);
?>
<body class="bg-theme bg-theme5">

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
<div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Teacher Registration Form</div>
           <hr>
            <form action="" method="post">
           <div class="form-group">
            <label for="input-7">Teacher Name</label>
            <input type="int" class="form-control form-control-rounded" value="<?php echo $data['TeacherName']; ?>" name="tname" id="input-2" placeholder="Enter Teacher Contact">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Contact</label>
            <input type="int" class="form-control form-control-rounded" value="<?php echo $data['contact']; ?>" name="tcont" id="input-4" placeholder="Enter Teacher Qualification">
           </div>
           <div class="form-group">
            <label for="input-8">Teacher Password</label>
            <input type="int" class="form-control form-control-rounded" value="<?php echo $data['TeacherPass']; ?>" name="tpass" id="input-3" placeholder="Enter Teacher Salary">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Salary</label>
            <input type="int" class="form-control form-control-rounded" value="<?php echo $data['salary']; ?>" name="tsal" id="input-4" placeholder="Enter Teacher Qualification">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Qualification</label>
            <input type="int" class="form-control form-control-rounded" value="<?php echo $data['qualification']; ?>" name="tqal" id="input-4" placeholder="Enter Teacher Qualification">
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5" name="btn_up" ><i class="icon-lock"></i>Update</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
<?php

include('Connect.php');
if(isset($_POST['btn_up']))
{
  $t_name=$_POST['tname'];
  $t_pass=$_POST['tpass'];
  $t_cont=$_POST['tcont'];
  $t_sal=$_POST['tsal'];
  $t_qal=$_POST['tqal'];
  $q="Update teacher SET TeacherName='$t_name',TeacherPass='$t_pass',contact='$t_cont',salary='$t_sal', qualification='$t_qal 'where TeacherId='$id'";
  $run=mysqli_query($con,$q);
    if($run){

        echo"<script> alert('Updated'); window.location.href='showteacher.php' </script>";
    }

    else{

        echo"<script> alert('Failed') </script>";
    }
}

?>
