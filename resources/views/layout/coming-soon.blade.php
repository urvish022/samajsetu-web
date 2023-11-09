@extends('layout.app')

@push('page')
<div class="d-flex flex-column flex-root" id="kt_app_root">

    <!--begin::Authentication - Signup Welcome Message -->
    <div class="d-flex flex-column flex-center flex-column-fluid">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center text-center p-10">
            <!--begin::Wrapper-->
            <div class="card card-flush w-lg-650px py-5">
                <div class="card-body py-15 py-lg-20">
                    <!--begin::Title-->
                    <h1 class="fw-bolder text-gray-900 mb-7">
                        Coming Soon
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="fw-semibold fs-6 text-gray-500 mb-7">
                        We will launch soon this page, but, you can check out member's directory, matrimony, business, memorial pages. Thanks for your patience.
                        <br>
                        <br>
                        <a href="{{url('')}}">Go Home</a>
                    </div>
                    <!--end::Text-->

                    <!--begin::Illustration-->
                    <div class="mb-n5">
                        <img src="{{url('assets/media/auth/coming-soon.png')}}" class="mw-100 mh-300px theme-light-show" alt="" />
                        <img src="{{url('assets/media/auth/coming-soon-dark.png')}}" class="mw-100 mh-300px theme-dark-show" alt="" />
                    </div>
                    <!--end::Illustration-->

                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Authentication - Signup Welcome Message-->
</div>
@endpush