@extends('layout.app')

@push('page')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Business
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>

                    <li class="breadcrumb-item text-muted">Directory</li>
                </ul>
            </div>
            
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="row g-6 g-xl-9">
                @foreach ($business as $item)
                <div class="col-md-6 col-xl-4">

                    <!--begin::Card-->
                    <a href="{{route('business.show',['business'=>$item->business_id])}}" class="card border-hover-primary ">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="bg-light">
                                    <img src="{{config('url.business')}}{{$item->photo}}" alt="image" class="p-1 w-150px h-150px" />
                                </div>
                                <!--end::Avatar-->
                            </div>

                            <div>
                                <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">
                                    {{$item->category->bc_eng_name}}
                                </span>
                            </div>
                            <!--end::Car Title-->
                        </div>
                        <!--end:: Card header-->

                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark">
                                {{$item->company_name_eng}}
                            </div>
                            <!--end::Name-->

                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">
                                {{$item->address}}
                            </p>
                            <!--end::Description-->

                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">{{$item->owner_name}}</div>
                                    <div class="fw-semibold text-gray-400">Owner</div>
                                </div>
                                <!--end::Due-->

                                <!--begin::Budget-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">{{$item->mobile_no}}</div>
                                    <div class="fw-semibold text-gray-400">Mobile Number</div>
                                </div>
                                <!--end::Budget-->
                            </div>
                            <!--end::Info-->

                        </div>
                        <!--end:: Card body-->
                    </a>
                    <!--end::Card-->
                </div>
                @endforeach
                
                @include('layout.empty',['count'=>$business->count()])
            </div>
        </div>
    </div>
</div>
@endpush