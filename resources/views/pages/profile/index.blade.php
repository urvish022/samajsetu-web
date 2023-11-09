@extends('layout.app')

@push('page')

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    My Profile
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

                    <li class="breadcrumb-item text-muted">Profile</li>
                </ul>
            </div>

        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div id="kt_user_profile_nav" class="rounded bg-gray-100 d-flex flex-stack flex-wrap mb-9 p-2">
                <ul class="flex-wrap border-transparent nav nav-stretch fs-5 fw-semibold nav-line-tabs border-transparent" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" role="tab" class="nav-link text-active-gray-800 active" href="#members">
                            Members
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" role="tab" class="nav-link text-active-gray-800 " href="#matrimony">
                            Matrimony
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" role="tab" class="nav-link text-active-gray-800 " href="#business">
                            Business
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" role="tab" class="nav-link text-active-gray-800 " href="#memorial">
                            Memorial
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a data-bs-toggle="tab" role="tab" class="nav-link text-active-gray-800 " href="#settings">
                            Settings
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="members" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-symbol-40px me-3">
                                                <img src="{{config('url.user')}}{{$member->photo}}" class="" alt="" />
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-gray-800 fw-bold  mb-1 fs-3">{{$member->full_name_eng}}</span>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">Main Member</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$member->birth_date}}</span>
                                        <span class="fw-semibold text-gray-400 d-block">Birth Date</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$member->village->eng_name}}</span>
                                        <span class="fw-semibold text-gray-400 d-block">Village</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">{{$member->mosad}}</span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mosad</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">
                                            @if(empty($member->piyar))
                                            N/A
                                            @else
                                            {{$member->piyar}}
                                            @endif
                                        </span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Piyar</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">
                                            @if(empty($member->education))
                                            N/A
                                            @else
                                            {{$member->education}}
                                            @endif
                                        </span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Education</span>
                                    </td>

                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i> <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i> </button>
                                    </td>
                                </tr>
                                @foreach ($details as $detail)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-symbol-40px me-3">
                                                <img src="{{config('url.user')}}{{$detail->fphoto}}" class="" alt="" />
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-gray-800 fw-bold mb-1 fs-3">{{$detail->ffull_name_eng}}</span>
                                                <span class="text-gray-400 fw-semibold d-block fs-7">{{$detail->relation->relation_name_eng}}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$detail->fbirth_date}}</span>
                                        <span class="fw-semibold text-gray-400 d-block">Birth Date</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$detail->village->eng_name}}</span>
                                        <span class="fw-semibold text-gray-400 d-block">Village</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">{{$detail->fmosad}}</span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Mosad</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">
                                            @if(empty($detail->fpiyar))
                                            N/A
                                            @else
                                            {{$detail->fpiyar}}
                                            @endif
                                        </span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Piyar</span>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold  d-block mb-1 fs-6">
                                            @if(empty($detail->feducation))
                                            N/A
                                            @else
                                            {{$detail->feducation}}
                                            @endif
                                        </span>
                                        <span class="text-gray-400 fw-semibold d-block fs-7">Education</span>
                                    </td>

                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i> <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i> </button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                </div>

                <div id="matrimony" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($matrimony as $detail)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-symbol-40px me-3">
                                                <img src="{{config('url.user')}}{{$detail->photo}}" class="" alt="" />
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-gray-800 fw-bold mb-1 fs-3">{{$detail->full_name_eng}}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">{{$detail->birth_date}}</span>
                                        <span class="fw-semibold text-gray-400 d-block">Birth Date</span>
                                    </td>

                                    <td class="text-end">
                                        <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                            <i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i> <i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i> </button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                </div>

                <div id="memorial" class="card-body p-0 tab-pane fade show active" role="tabpanel">

                </div>

                <div id="business" class="card-body p-0 tab-pane fade show active" role="tabpanel">

                </div>

                <div id="settings" class="card-body p-0 tab-pane fade show active" role="tabpanel">

                </div>

            </div>

        </div>
    </div>
</div>
@endpush