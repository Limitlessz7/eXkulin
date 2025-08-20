<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="."
    />
    <meta
      name="keywords"
      content="dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-sA+4gHZZxv3XY5CjB4eUlsnGgu2wG02z9v+Q2D93z8M="
      crossorigin=""/>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <x-Navbar></x-Navbar>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <x-Sidebar></x-Sidebar>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
            crossorigin="" />

        <div class="container-fluid mt-3">
          <div class="row">
              <!-- Username Card -->
              <div class="col-md-3 col-sm-6 col-12 mb-3">
                  <button type="button"
                          class="btn info-box text-bg-primary bg-gradient w-100"
                          data-bs-toggle="collapse"
                          data-bs-target="#username"
                          aria-expanded="false"
                          aria-controls="username">
                      <span class="info-box-icon">
                          <i class="bi bi-person-fill"></i>
                      </span>
                      <div class="info-box-content text-start">
                          <span class="info-box-text">Username</span>
                          <div class="progress">
                              <div class="progress-bar" style="width: 90%"></div>
                          </div>
                      </div>
                  </button>
                  <div class="collapse mt-2" id="username">
                      <div class="card text-break p-2">
                          {{ Auth::user()->usr_name }}
                      </div>
                  </div>
              </div>

              <!-- Email Card -->
              <div class="col-md-3 col-sm-6 col-12 mb-3">
                  <button type="button"
                          class="btn info-box text-bg-success bg-gradient w-100"
                          data-bs-toggle="collapse"
                          data-bs-target="#email"
                          aria-expanded="false"
                          aria-controls="email">
                      <span class="info-box-icon">
                          <i class="bi bi-envelope-at-fill"></i>
                      </span>
                      <div class="info-box-content text-start">
                          <span class="info-box-text">Email</span>
                          <div class="progress">
                              <div class="progress-bar" style="width: 90%"></div>
                          </div>
                      </div>
                  </button>
                  <div class="collapse mt-2" id="email">
                      <div class="card text-break p-2">
                          {{ Auth::user()->usr_email }}
                      </div>
                  </div>
              </div>
              <!-- ...add other info cards here if needed... -->
          </div>

          <!-- Accordion Section -->
        <div class="row mt-4">
    <div class="col-lg-7 connectedSortable">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Tentang Aplikasi</div>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Deskripsi Aplikasi eXkulin
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p>eXkulin adalah aplikasi yang dibuat untuk memudahkan siswa melihat informasi ekskul, jadwal kegiatan, dan mendaftar masuk ke dalam ekskul.</p>
  <p>Pengurus ekskul juga bisa mengelola halaman ekskul mereka sendiri, meng-update info, dan menyampaikan pengumuman.</p>
  <p>Aplikasi ini diimplementasikan menggunakan teknologi mutakhir.</p>
                            </div>
                        </div>
                    </div>
               <!-- Tambah accordion-item lainnya jika perlu -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-5 connectedSortable">
                  <!-- Card Location -->
                  <div class="card text-white bg-primary bg-gradient border-primary mb-4">
                    <div class="card-header border-0">
                      <h3 class="card-title">Location</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-lte-toggle="card-collapse">
                          <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                          <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.095617242104!2d107.57682841033379!3d-6.998020368509465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9681a28859f%3A0x48f4d9cf5a8ab783!2sSMKS%20Mahaputra%20Cerdas%20Utama!5e0!3m2!1sen!2sid!4v1755155157782!5m2!1sen!2sid"
                          width="100%"
                          height="100%"
                          style="border: 0; position: absolute; top: 0; left: 0;"
                          allowfullscreen=""
                          loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                      </div>
                    </div>
                  </div>
                  <!-- End Card Location -->
              </div>
          </div>
        </div>
      </main>
      <!--end::App Main-->
      <!-- Footer -->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->

        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025
          <a href="#" class="text-decoration-none">Swiftserveweb</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!-- End Footer -->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('dist/js/adminlte.js')}}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
