@extends('layout.app')

@push('page')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Home
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Chart Widget 1-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">Instagram Subscribers</span>
                                <span class="text-gray-400 pt-2 fw-semibold fs-6">75% activity growth</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-400 me-n1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>

                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                            Quick Actions
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Ticket
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Customer
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Admin Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Staff Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Member Group
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            New Contact
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">
                                                Generate Reports
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->

                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-0 px-0">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px"></div>
                            <!--end::Chart-->

                            <!--begin::Info-->
                            <div class="d-flex align-items-center px-9">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center me-6">
                                    <!--begin::Bullet-->
                                    <span class="rounded-1 bg-primary me-2 h-10px w-10px"></span>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <span class="fw-semibold fs-6 text-gray-600">Gained</span>
                                    <!--end::Label-->
                                </div>
                                <!--ed::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Bullet-->
                                    <span class="rounded-1 bg-success me-2 h-10px w-10px"></span>
                                    <!--end::Bullet-->

                                    <!--begin::Label-->
                                    <span class="fw-semibold fs-6 text-gray-600">Lost</span>
                                    <!--end::Label-->
                                </div>
                                <!--ed::Item-->
                            </div>
                            <!--ed::Info-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row g-5 g-xl-10">

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('matrimony.index',['type'=>'male'])}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/matrimony.png')}}" class="w-60px" alt="Matrimony" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Matrimony</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('directory.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/directory.png')}}" class="w-60px" alt="Directory" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Directory</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('memorial.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/memorial.png')}}" class="w-60px" alt="Memorial" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Memorial</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('business.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/business.png')}}" class="w-60px" alt="Businesses" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Businesses</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('achievements.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/achievements.png')}}" class="w-60px" alt="Achievements" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Achievements</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('history.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/village.png')}}" class="w-60px" alt="Village History" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">History</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row g-5 g-xl-10">

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('gallery.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/gallery.png')}}" class="w-60px" alt="Gallery" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Gallery</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('news.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/news.png')}}" class="w-60px" alt="News" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">News</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('donors.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/blood.png')}}" class="w-60px" alt="Blood" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Blood Donor</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="https://www.youtube.com/@ashvinbamrolia" target="_blank">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/channel.png')}}" class="w-60px" alt="Youtube Channel" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Channel</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('events.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/events.png')}}" class="w-60px" alt="Events" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Events</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('transactions.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/paytm.png')}}" class="w-60px" alt="Paytm" />
                                </div>
                                
                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Transactions</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endpush

@push('script')
@endpush