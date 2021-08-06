<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!(isset($_SESSION['ADMIN'])) ) {

    header('location:login.php');
}

include('Connect.php');
include('header.php')
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
           <form action="teacher_insert.php" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-7">Teacher Name</label>
            <input type="int" class="form-control form-control-rounded" name="tname" id="input-2" placeholder="Enter Teacher Contact">
           </div>
           <div class="form-group">
            <label for="input-8">Teacher Password</label>
            <input type="int" class="form-control form-control-rounded" name="tpass" id="input-3" placeholder="Enter Teacher Salary">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Contact</label>
            <input type="int" class="form-control form-control-rounded" name="tcont" id="input-4" placeholder="Enter Teacher Qualification">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Image</label>
            <input type="file" class="form-control form-control-rounded" name="timg" onchange="readURL(this)" height="50" >
            <img id="Teacherimg">
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Salary</label>
            <input type="int" class="form-control form-control-rounded" name="tsal" id="input-4" placeholder="Enter Teacher Qualification">
            
           </div>
           <div class="form-group">
            <label for="input-9">Teacher Qualification</label>
            <input type="int" class="form-control form-control-rounded"  name="tqal" id="input-4" placeholder="Enter Teacher Qualification">
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5" name="btn_t" ><i class="icon-lock"></i>Register</button>
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
<script>
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader =new FileReader();
      reader.onload= function(e){
        $('#Teacherimg')
        .attr('src',e.target.result)
        .width(250)
        .height(250)
        .css("visibility","visible");
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>