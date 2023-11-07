@extends('layout.app')

@push('page')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Matrimony
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



                    <li class="breadcrumb-item text-muted">Matrimony</li>



                </ul>
            </div>
            <div class="justify-content-end">
                <a href="{{route('matrimony.create')}}" class="btn btn-primary">
                    <i class="ki-duotone ki-plus fs-2"></i> Add Biodata
                </a>
            </div>
        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div id="kt_user_profile_nav" class="rounded bg-gray-100 d-flex flex-stack flex-wrap mb-9 p-2">
                <ul class="nav flex-wrap border-transparent">
                    <li class="nav-item my-1">
                        <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1 {{ isset($filter['type']) && $filter['type'] == 'male' ? 'active' : '' }}" href="{{route('matrimony.index',['type'=>'male'])}}">
                            Male
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1 {{ isset($filter['type']) && $filter['type'] == 'female' ? 'active' : '' }}" href="{{route('matrimony.index',['type'=>'female'])}}">
                            Female
                        </a>
                    </li>
                </ul>
            </div>

            <!-- <div class="card-header border-0 pt-6">
                    
                    <div class="card-title">
                    
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span class="path2"></span></i>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                    
                    </div>
                    
                    <div class="card-toolbar">
                        
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                                Filter
                            </button>
                        
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">
                                        Filter Options
                                    </div>
                                </div>
                        

                        
                                <div class="separator border-gray-200"></div>
                        

                        
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                        
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Role:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            <option value="Administrator">
                                                Administrator
                                            </option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select>
                                    </div>
                        
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                            <option></option>
                                            <option value="Enabled">Enabled</option>
                                        </select>
                                    </div>
                        
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">
                                            Reset
                                        </button>
                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">
                                            Apply
                                        </button>
                                    </div>
                        
                                </div>
                        
                            </div>
                        
                        </div>
                        
                    </div>
                </div> -->

            <div class="card-body">
                <div class="row g-6 g-xl-9">

                    @foreach ($matrimonyData as $data)
                    <div class="col-md-6 col-xl-4">
                        <!--begin::Card-->
                        <a href="{{ route('matrimony.show', ['matrimony' => $data->matrimony_id]) }}" class="card border-hover-primary ">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-9">
                                <!--begin::Card Title-->
                                <div class="card-title m-0">
                                    <!--begin::Avatar-->
                                    <div class="bg-black">
                                        <img src="{{config('url.matrimony')}}{{$data->photo}}" alt="image" class="p-1 w-300px h-300px">
                                    </div>
                                </div>
                            </div>
                            <!--end:: Card header-->

                            <!--begin:: Card body-->
                            <div class="card-body p-9">
                                <!--begin::Name-->
                                <div class="fs-3 fw-bold text-dark">
                                    {{$data->full_name_eng}}
                                </div>

                                <!--begin::Description-->
                                <p class="mb-5">
                                    {{$data->village->eng_name}}
                                </p>
                                <!--end::Description-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Due-->



                                    <div class="border border-gray-300 border-dashed rounded py-3 px-4 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bold">{{$data->education}}</div>
                                        <div class="fw-semibold text-gray-400">Education</div>
                                    </div>

                                </div>
                                <div class="d-flex flex-wrap">


                                    <div class="border border-gray-300 border-dashed rounded py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bold">{{$data->age}}</div>
                                        <div class="fw-semibold text-gray-400">Age</div>
                                    </div>


                                    <div class="border border-gray-300 border-dashed rounded py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bold">{{$data->height}}</div>
                                        <div class="fw-semibold text-gray-400">Height</div>
                                    </div>

                                    <div class="border border-gray-300 border-dashed rounded py-3 px-4 me-7 mb-3">
                                        <div class="fs-6 text-gray-800 fw-bold">{{$data->weight}}</div>
                                        <div class="fw-semibold text-gray-400">Weight</div>
                                    </div>



                                </div>



                            </div>
                            <!--end:: Card body-->
                        </a>
                        <!--end::Card-->
                    </div>
                    @endforeach

                    {{ $matrimonyData->links('layout.custom-pagination') }}
                </div>
            </div>

        </div>
    </div>
</div>
@endpush

@push('script')
@endpush