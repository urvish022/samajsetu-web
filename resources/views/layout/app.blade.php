<!DOCTYPE html>
<html lang="en">
@include('layout.head')
@stack('style')
<!-- <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"> -->
<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <!--begin::Header-->
      <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-xxl d-flex align-items-center justify-content-between" id="kt_app_header_container">
          <!--begin::Header mobile toggle-->
          <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
              <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span class="path2"></span></i>
            </div>
          </div>

          <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="{{url('dashboard')}}">
              <img alt="Samaj Setu" src="{{url('assets/media/logos/web_logo.png')}}" class="h-45px h-lg-75px app-sidebar-logo-default theme-light-show" />
              <img alt="Samaj Setu" src="{{url('assets/media/logos/web_logo.png')}}" class="h-45px h-lg-75px app-sidebar-logo-default theme-dark-show" />
            </a>
          </div>


          @include('layout.header')
        </div>
        <!--end::Header container-->
      </div>

      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          @stack('page')
          @include('layout.footer')
        </div>
      </div>
    </div>
  </div>
  </div>
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
      <span class="path1"></span>
      <span class="path2"></span>
    </i>
  </div>
  <script type="text/javascript">
    var media_path = "storage/";
  </script>
  <script src="{{url('assets/plugins/global/plugins.bundle.js')}}"></script>
  <script src="{{url('assets/js/scripts.bundle.js')}}"></script>
  <script src="{{url('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  @stack('script')
</body>

</html>