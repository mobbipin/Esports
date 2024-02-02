<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<ul class="navbar-nav bg-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
      <div class="sidebar-brand-icon">
      <i class="fa-solid fa-m"></i>
      </div>
      <div class="sidebar-brand-text mx-3"> MOB ESPORTS </div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    


    <li class="nav-item">
      <a class="nav-link" href="{{ route('tournaments.index') }}">
      <i class="fa-solid fa-gamepad"></i>
        <span>Tournaments</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/profile">
      <i class="fa-solid fa-address-card"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>