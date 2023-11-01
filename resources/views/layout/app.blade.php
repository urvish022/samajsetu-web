<!DOCTYPE html>
<html lang="en">
   @include('layout.header')
   <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
         <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div id="kt_app_header" class="app-header">
               <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                  <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
                     <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>
                     </div>
                  </div>
                  <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                     <a href="{{url('/')}}" class="d-lg-none">
                     <img alt="Logo" src="assets/media/logos/web_logo.png" class="theme-light-show h-30px" />
                     <img alt="Logo" src="assets/media/logos/web_logoo.png" class="theme-dark-show h-30px" />
                     </a>
                  </div>
                  <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                     <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                     </div>
                     <div class="app-navbar flex-shrink-0">
                        <div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">
                           <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                              <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                 <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
                                    <i class="ki-duotone ki-magnifier fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                 </div>
                              </div>
                              <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                 <div data-kt-search-element="wrapper">
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                       <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                       <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                       <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                       <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                       </span>
                                       <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                       <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i>
                                       </span>
                                    </form>
                                    <div class="separator border-gray-200 mb-6"></div>
                                    <div data-kt-search-element="results" class="d-none">
                                       <div class="scroll-y mh-200px mh-lg-350px">
                                          <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-6.jpg" alt="" />
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-2.jpg" alt="" />
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-9.jpg" alt="" />
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-14.jpg" alt="" />
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/300-11.jpg" alt="" />
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                             </div>
                                          </a>
                                          <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                <span class="fs-7 fw-semibold text-muted">Administration</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                             </div>
                                          </a>
                                          <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-semibold text-muted">#45670</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-frame fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-semibold text-muted">#45690</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                <span class="fs-7 fw-semibold text-muted">#21090</span>
                                             </div>
                                          </a>
                                          <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">#34560</span>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="mb-5" data-kt-search-element="main">
                                       <div class="d-flex flex-stack fw-semibold mb-4">
                                          <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                       </div>
                                       <div class="scroll-y mh-200px mh-lg-325px">
                                          <div class="d-flex align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                <span class="fs-7 text-muted fw-semibold">#45789</span>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-bank fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                <span class="fs-7 text-muted fw-semibold">#45690</span>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center mb-5">
                                             <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#24005</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                       <div class="pt-10 pb-10">
                                          <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          </i>
                                       </div>
                                       <div class="pb-15 fw-semibold">
                                          <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                          <div class="text-muted fs-7">Please try again with a different query</div>
                                       </div>
                                    </div>
                                 </div>
                                 <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                    <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                    <div class="mb-5">
                                       <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                    </div>
                                    <div class="mb-5">
                                       <div class="nav-group nav-group-fluid">
                                          <label>
                                          <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                          </label>
                                          <label>
                                          <input type="radio" class="btn-check" name="type" value="users" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                          </label>
                                          <label>
                                          <input type="radio" class="btn-check" name="type" value="orders" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                          </label>
                                          <label>
                                          <input type="radio" class="btn-check" name="type" value="projects" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="mb-5">
                                       <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                    </div>
                                    <div class="mb-5">
                                       <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                    </div>
                                    <div class="mb-5">
                                       <div class="nav-group nav-group-fluid">
                                          <label>
                                          <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                          </label>
                                          <label>
                                          <input type="radio" class="btn-check" name="attachment" value="any" />
                                          <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="mb-5">
                                       <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                          <option value="next">Within the next</option>
                                          <option value="last">Within the last</option>
                                          <option value="between">Between</option>
                                          <option value="on">On</option>
                                       </select>
                                    </div>
                                    <div class="row mb-8">
                                       <div class="col-6">
                                          <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                       </div>
                                       <div class="col-6">
                                          <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                             <option value="days">Days</option>
                                             <option value="weeks">Weeks</option>
                                             <option value="months">Months</option>
                                             <option value="years">Years</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                       <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                       <a href="../../demo1/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="app-navbar-item ms-1 ms-lg-3">
                           <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                              <i class="ki-duotone ki-notification-on fs-1">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              <span class="path3"></span>
                              <span class="path4"></span>
                              </i>
                           </div>
                           <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                              <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                                 <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                    <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                 </h3>
                                 <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                    <li class="nav-item">
                                       <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                                    <div class="scroll-y mh-325px my-5 px-8">
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">1 hr</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-danger">
                                                <i class="ki-duotone ki-information fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">2 hrs</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">5 hrs</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">2 days</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                <div class="text-gray-400 fs-7">Product launch status update</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">21 Jan</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of banner images</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">21 Jan</span>
                                       </div>
                                       <div class="d-flex flex-stack py-4">
                                          <div class="d-flex align-items-center">
                                             <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                                <span class="path11"></span>
                                                <span class="path12"></span>
                                                <span class="path13"></span>
                                                <span class="path14"></span>
                                                <span class="path15"></span>
                                                <span class="path16"></span>
                                                <span class="path17"></span>
                                                <span class="path18"></span>
                                                <span class="path19"></span>
                                                <span class="path20"></span>
                                                <span class="path21"></span>
                                                </i>
                                                </span>
                                             </div>
                                             <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                             </div>
                                          </div>
                                          <span class="badge badge-light fs-8">20 March</span>
                                       </div>
                                    </div>
                                    <div class="py-3 text-center border-top">
                                       <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                       <i class="ki-duotone ki-arrow-right fs-5">
                                       <span class="path1"></span>
                                       <span class="path2"></span>
                                       </i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="app-navbar-item ms-1 ms-lg-3">
                           <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                              <span class="symbol symbol-20px">
                              <img class="rounded" 
                              @if(session()->get('locale') == "en")
                              src="assets/media/flags/united-states.svg"
                              @elseif(session()->get('locale') == 'gu')
                              src="assets/media/flags/india.svg"
                              @endif
                              alt="" />
                              </span>
                           </div>
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-semibold py-4 fs-6 w-175px" data-kt-menu="true">
                              <div class="menu-item px-3">
                                 <a href="{{route('switch.language',['language'=>'en'])}}" class="menu-link d-flex px-5 <?php if (session()->get('locale') == "en") { echo "active" ; } ?>">
                                 <span class="symbol symbol-20px me-4">
                                 <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                 </span>English</a>
                              </div>
                              <div class="menu-item px-3">
                                 <a href="{{route('switch.language',['language'=>'gu'])}}" class="menu-link d-flex px-5 <?php if (session()->get('locale') == "gu") { echo "active" ; } ?>">
                                 <span class="symbol symbol-20px me-4">
                                 <img class="rounded-1" src="assets/media/flags/india.svg" alt="" />
                                 </span>Gujarati</a>
                              </div>
                           </div>
                        </div>
                        <div class="app-navbar-item ms-1 ms-lg-3">
                           <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                           <i class="ki-duotone ki-night-day theme-light-show fs-1">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           <span class="path3"></span>
                           <span class="path4"></span>
                           <span class="path5"></span>
                           <span class="path6"></span>
                           <span class="path7"></span>
                           <span class="path8"></span>
                           <span class="path9"></span>
                           <span class="path10"></span>
                           </i>
                           <i class="ki-duotone ki-moon theme-dark-show fs-1">
                           <span class="path1"></span>
                           <span class="path2"></span>
                           </i>
                           </a>
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                              <div class="menu-item px-3 my-0">
                                 <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                 <span class="menu-icon" data-kt-element="icon">
                                 <i class="ki-duotone ki-night-day fs-2">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 <span class="path3"></span>
                                 <span class="path4"></span>
                                 <span class="path5"></span>
                                 <span class="path6"></span>
                                 <span class="path7"></span>
                                 <span class="path8"></span>
                                 <span class="path9"></span>
                                 <span class="path10"></span>
                                 </i>
                                 </span>
                                 <span class="menu-title">Light</span>
                                 </a>
                              </div>
                              <div class="menu-item px-3 my-0">
                                 <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                 <span class="menu-icon" data-kt-element="icon">
                                 <i class="ki-duotone ki-moon fs-2">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 </i>
                                 </span>
                                 <span class="menu-title">Dark</span>
                                 </a>
                              </div>
                              <div class="menu-item px-3 my-0">
                                 <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                 <span class="menu-icon" data-kt-element="icon">
                                 <i class="ki-duotone ki-screen fs-2">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                                 <span class="path3"></span>
                                 <span class="path4"></span>
                                 </i>
                                 </span>
                                 <span class="menu-title">System</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="app-navbar-item ms-2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                           <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                              <img src="assets/media/avatars/300-3.jpg" alt="user" />
                           </div>
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                              <div class="menu-item px-3">
                                 <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                       <img alt="Logo" src="assets/media/avatars/300-3.jpg" />
                                    </div>
                                    <div class="d-flex flex-column">
                                       <div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
                                       </div>
                                       <a class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="separator my-2"></div>
                              <div class="menu-item px-5">
                                 <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                              </div>
                              <div class="menu-item px-5">
                                 <a href="{{route('logout')}}" class="menu-link px-5">Logout</a>
                              </div>
                           </div>
                        </div>
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                           <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                              <i class="ki-duotone ki-element-4 fs-1">
                              <span class="path1"></span>
                              <span class="path2"></span>
                              </i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @include('layout.sidebar')
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
               @stack('page')
               @include('layout.footer')
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
      <script src="assets/plugins/global/plugins.bundle.js"></script>
      <script src="assets/js/scripts.bundle.js"></script>
      <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

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