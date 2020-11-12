<!-- Sidebar -->
<ul CLASS="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
 
  <!-- Sidebar - Brand -->
  <a CLASS="sidebar-brand d-flex align-items-center justify-content-center" href="home_manager.php" target="iframe">
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
    <a CLASS="nav-link collapsed" href="home_manager.php" target="iframe">
      <i CLASS="fas fa-home"></i>
      <span>Trang chủ</span>
    </a>
    </li>

<hr CLASS="sidebar-divider">
  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-swatchbook"></i>
      <span>Quản lý ngành học</span>
    </a>
    <div id="collapseOne" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="create_majors.php" target="iframe">Tạo ngành học</a>
        <a CLASS="collapse-item" href="info_majors.php" target="iframe">Thông tin ngành học</a>
        
      </div>
    </div>

    
    </li>

    <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-book"></i>
      <span>Quản lý môn học</span>
    </a>
    <div id="collapseTwo" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="create_subject.php" target="iframe">Tạo môn học</a>
        <a CLASS="collapse-item" href="info_subject.php" target="iframe">Thông tin môn học</a>
        
      </div>
    </div>

    <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
      <i class="far fa-clock"></i>
      <span>Quản lý thời gian</span>
    </a>
    <div id="collapseFive" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="create_time.php" target="iframe">Tạo thời gian</a>
        <a CLASS="collapse-item" href="info_time.php" target="iframe">Thông tin thời gian</a>
        
      </div>
    </div>

    
  </li>



  </li>

   


   <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-puzzle-piece"></i>
      <span>Quản lý lớp học phần</span>
    </a>
    <div id="collapseFour" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="section_class.php" target="iframe">Tạo lớp học phần</a>
        <a CLASS="collapse-item" href="info_sectionclass.php" target="iframe">Thông tin lớp học phần</a>
        
      </div>
    </div>

    
  </li>


  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour1" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-clipboard-list"></i>
      <span>Quản lý KHGDDK</span>
    </a>
    <div id="collapseFour1" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="create_teachingplan.php" target="iframe">Tạo KHGDDK</a>
        <a CLASS="collapse-item" href="info_teachingplan_manager.php" target="iframe">Thông tin KHGDDK</a>
        
      </div>
    </div>

    
  </li>


  <li CLASS="nav-item">
    <a CLASS="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-user"></i>
      <span>Quản lý cá nhân</span>
    </a>
    <div id="collapseSix" CLASS="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div CLASS="bg-white py-2 collapse-inner rounded">
        <h6 CLASS="collapse-header">Chức năng</h6>
        <a CLASS="collapse-item" href="manager_changepass.php" target="iframe">Đổi mật khẩu</a>
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