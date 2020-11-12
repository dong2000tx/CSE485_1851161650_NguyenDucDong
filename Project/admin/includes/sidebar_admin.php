<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div CLASS="sidebar-brand-icon rotate-n-15">
      
    <i class="fas fa-laugh-wink"></i>
    </div>
    <div CLASS="sidebar-brand-text mx-3">TLU_ADMIN</div>
  </a>
  
  <!-- Divider -->
  <hr CLASS="sidebar-divider">
  
  <!-- Heading -->
  <div CLASS="sidebar-heading" style="display: none;">
    Interface
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="home.php" target="iframe">
      <i CLASS="fas fa-home"></i>
      <span>Trang chủ</span>
    </a>
  </li>
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i CLASS="fas fa-fw fa-cog"></i>
      <span>Quản lý tài khoản</span>
    </a>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="register.php" target="iframe">Tạo tài khoản</a>
        <!--<a CLASS="collapse-item" href="upload.php" target="iframe">Upload file</a>-->
        <a CLASS="collapse-item" href="upload1.php" target="iframe">Thông tin tài khoản</a>
        <a CLASS="collapse-item" href="info_lecturers.php" target="iframe">Thông tin giảng viên</a>
        <a CLASS="collapse-item" href="info_manager.php" target="iframe">Thông tin quản lý</a>
        <a CLASS="collapse-item" href="info_student.php" target="iframe">Thông tin sinh viên</a>
      </div>
    </div>
    
  </li>
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
      <i CLASS="fas fa-fw fa-cog"></i>
      <span>Quản lý tin tức</span>
    </a>
    <div id="collapseTwo1" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="new_posts.php" target="iframe">Tạo bài viết</a>
        <a CLASS="collapse-item" href="info_posts.php" target="iframe">Xem bài viết</a>
        
      </div>
    </div>
    
  </li>
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-puzzle-piece"></i>
      <span>Quản lý cá nhân</span>
    </a>
    <div id="collapseSix" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="../manager/manager_changepass.php" target="iframe">Đổi mật khẩu</a>
        <!--<a CLASS="collapse-item" href="manager_changepass.php" target="iframe">Thông tin cá nhân</a>-->
        
        
      </div>
    </div>
    
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->