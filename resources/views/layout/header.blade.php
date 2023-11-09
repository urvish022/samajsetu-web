<!-- Header wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

    <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
        <!--begin::Menu-->
        <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" class="@if(\Request::route()->getName() == 'dashboard') here @endif menu-item menu-lg-down-accordion me-0 me-lg-2">
                <a href="{{url('')}}" class="menu-link">
                    <span class="menu-title">Home</span>
                </a>
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-app-menu-placement="bottom" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                <span class="menu-link">
                    <span class="menu-title">Menu</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-600px">
                    <!--begin:Dashboards menu-->
                    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible py-2 py-lg-6" data-kt-menu-dismiss="true">
                        <!--begin:Row-->
                        <div class="row px-lg-5">
                            <!--begin:Col-->
                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('matrimony.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/matrimony.png')}}" class="w-40px" alt="Matrimony" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Matrimony</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('directory.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/directory.png')}}" class="w-40px" alt="Directory" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Member Directory</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('memorial.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/memorial.png')}}" class="w-40px" alt="Memorial" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Memorial</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('business.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/business.png')}}" class="w-40px" alt="Directory" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Business Directory</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('achievements.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/achievements.png')}}" class="w-40px" alt="Achievements" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Achievements</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('history.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/village.png')}}" class="w-40px" alt="History" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Village History</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('gallery.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/gallery.png')}}" class="w-40px" alt="Gallery" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Gallery</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('news.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/news.png')}}" class="w-40px" alt="News" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">News</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('donors.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/blood.png')}}" class="w-40px" alt="Donor" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Blood Donor</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="https://www.youtube.com/@ashvinbamrolia" target="_blank" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/channel.png')}}" class="w-40px" alt="Channel" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Youtube Channel</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('events.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/events.png')}}" class="w-40px" alt="Events" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Events</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6 py-1">
                                <div class="menu-item p-0 m-0">
                                    <a href="{{route('transactions.index')}}" class="menu-link">
                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                            <img src="{{url('assets/media/common/paytm.png')}}" class="w-40px" alt="Transactions" />
                                        </span>
                                        <span class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold text-gray-800">Transactions</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <!--end:Col-->
                        </div>
                        <!--end:Row-->
                    </div>
                    <!--end:Dashboards menu-->
                </div>
                <!--end:Menu sub-->
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" class="@if(\Request::route()->getName() == 'profile.index') here @endif menu-item menu-lg-down-accordion me-0 me-lg-2">
                <a href="{{route('profile.index')}}" class="menu-link">
                    <span class="menu-title">My Profile</span>
                </a>
            </div>

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->

    <!--begin::Navbar-->
    <div class="app-navbar flex-shrink-0">

        <!--begin::User menu-->
        <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img class="symbol symbol-circle symbol-35px symbol-md-40px" src="{{config('url.user')}}{{auth()->user()->member->photo}}" alt="user" />
            </div>

            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{config('url.user')}}{{auth()->user()->member->photo}}" />
                        </div>
                        <!--end::Avatar-->

                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">
                                {{auth()->user()->name}}
                            </div>

                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                {{auth()->user()->email}}
                            </a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{route('profile.index')}}" class="menu-link px-5">
                        My Profile
                    </a>
                </div>
                <!--end::Menu item-->

                <!--end::Menu item-->

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{route('logout')}}" class="menu-link px-5">
                        Log Out
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->

            <!--end::Menu wrapper-->
        </div>
        <!--end::User menu-->

        <!--begin::Header menu toggle-->
        <!--end::Header menu toggle-->
    </div>
    <!--end::Navbar-->
</div>
<!--end::Header wrapper-->