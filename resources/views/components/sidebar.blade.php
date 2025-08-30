<!--begin::Sidebar-->
<aside class="app-sidebar bg-primary text-white shadow" data-bs-theme="primary">
  <style>
    /* Ensure links and icons contrast on the blue sidebar */
    .app-sidebar .nav-link { color: #fff !important; }
    .app-sidebar .nav-link .nav-icon { color: #fff !important; }
    .app-sidebar .nav-link:hover, .app-sidebar .nav-link.active { background-color: rgba(255,255,255,0.06); color: #fff !important; }
    .app-sidebar .brand-text { color: #fff !important; }
  </style>
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <a href="{{ route('dashboard') }}" class="brand-link">
         <img src="{{ asset('logo-projek.png') }}" alt="Swift Serve Logo" class="brand-image img-circle elevation-3" style="opacity: .8; max-width: 60px; max-height: 60px;">
      <span class="brand-text fw-light text-white">eXkulin</span>
   
    </a>
  </div>

  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Extracurricular -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Extracurricular <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/extracurricular/view" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>View</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('extracurricular.index') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Manage</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Manage Applications -->
      <li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon bi bi-speedometer"></i>
    <p>
      Manage Applications
      <i class="nav-arrow bi bi-chevron-right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="/manage-application/manage" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>Manage</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/manage-application/accept-history" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>Accept History</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/manage-application/reject-history" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>Reject History</p>
      </a>
    </li>
  </ul>
</li>



        <!-- Account -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Account <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="/accounts/manage-role" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage Role</p></a></li>
            <li class="nav-item"><a href="/accounts/manage-account" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage Account</p></a></li>
            <li class="nav-item"><a href="/accounts/list-account" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Account List</p></a></li>
          </ul>
        </li>

        <!-- Membership -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Membership <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="/membership/view" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>View Member</p></a></li>
            <li class="nav-item"><a href="/membership/manage" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage</p></a></li>
          </ul>
        </li>

        <!-- Class -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Class <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="/class/manage" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage</p></a></li>
          </ul>
        </li>

        <!-- Major -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Major <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="/major/manage" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage</p></a></li>
            <li class="nav-item"><a href="/major/view" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>View</p></a></li>
          </ul>
        </li>

        <!-- Student Assessment -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Student Assessment <i class="nav-arrow bi bi-chevron-right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Manage</p></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>View</p></a></li>
          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
