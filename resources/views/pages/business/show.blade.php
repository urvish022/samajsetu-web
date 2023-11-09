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
        </div>
    </div>
</div>
@endpush