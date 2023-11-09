@extends('layout.app')

@push('page')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Member Directory
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
            <div class="overflow-auto pb-5">
                @foreach ($villages as $village)
                <!--begin::Record-->
                <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                    <!--begin::Title-->
                    <a href="{{route('directory.show',['directory'=>$village->village_id])}}" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">
                        {{$village->eng_name}}
                    </a>

                    <div class="min-w-175px pe-2">
                    
                    </div>
                    <!--end::Label-->
                    
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                    
                    </div>
                    <!--end::Users-->                                     

                    <!--begin::Progress-->
                    <div class="min-w-125px pe-2">
                        
                    </div>
                    <!--end::Progress-->
                                        
                    <!--begin::Action-->
                        
                    <a href="{{route('directory.show',['directory'=>$village->village_id])}}" class="btn btn-sm btn-light btn-active-light-primary">Active Members : {{$village->members_count}}</a>    
                    <!--end::Title-->
                </div>
                <!--end::Record-->
                @endforeach
            </div>
        </div>
    </div>
</div>
@endpush