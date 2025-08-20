   <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{ route('dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            {{-- <img
              src="{{ asset('logo.png') }}"
              alt="eXkulin Logo"
              class="brand-image opacity-75 shadow"
            /> --}}
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">eXkulin</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                   
                  </p>
                </a>
              </li>
           <li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon bi bi-speedometer"></i>
    <p>
      Extracurricular
      <i class="nav-arrow bi bi-chevron-right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="../index.html" class="nav-link">
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
</li> <!-- ← Tambahkan ini -->

<!-- ... bagian sidebar ... -->
<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon bi bi-speedometer"></i>
    <p>
      ManageApplications
      <i class="nav-arrow bi bi-chevron-right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="../index.html" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>JoinRequests</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../index.html" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>AcceptHistory</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="../index.html" class="nav-link">
        <i class="nav-icon bi bi-circle"></i>
        <p>RejectHistory</p>
      </a>
    </li>
  </ul>
</li>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Account
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>ManageRole</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>ManageAccount</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>AccountList</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Membership
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>ViewsMember</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Manage</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Class
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Manage</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Major
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Manage</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    StudentAssessment
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Manage</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>View</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      