<?php session_start(); ?>

<?php
if(isset($_SESSION['TENTAIKHOAN']))
{
?>


<?php include "includes/header_admin.php" ?>



<!-- Page Wrapper -->
<div id="wrapper">
 
 
 <?php include "includes/sidebar_admin.php" ?>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
 
    <!-- Main Content -->
    <div id="content">
 
       
         <?php include "includes/navbar_admin.php" ?>
 
      <!-- Begin Page Content -->
      <div class="container-fluid">

           
          <iframe src="" name="iframe" style="width: 100%; height: 85%; border: none;">
          	
          </iframe>
 
      </div>
     
 
    </div>

    
 
    <?php include "includes/footer_admin.php" ?>
    
 
  </div>
  
 
</div>


<?php include "includes/js_admin.php" ?>



<?php
}
else
{
header('Location: ../login.php');
}

?>