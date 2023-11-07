@extends('layout.app')

@push('page')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    View Matrimony Detail
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('matrimony.index')}}" class="text-muted text-hover-primary">
                            Matrimony
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Matrimony Detail</li>
                </ul>
            </div>

        </div>
    </div>

    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{$data->full_name_eng}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->

                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo</label>
                            
                            <div class="col-lg-8">
                                <div class="symbol symbol-100px bg-">
                                    <img src="{{config('url.matrimony')}}{{$data->photo}}" alt="image" class="p-1 w-250px h-250px">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Village</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->village->eng_name}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Country</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->country->country_name}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Birth Date</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->birth_date}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Age</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->age}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Education</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->education}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Occupation</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->occupation}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Income</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->income}}" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Father Mobile Number</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->father_mobile}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Mobile Number</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->mobile_no}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Sakh</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->sakh}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Mosad Sakh</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->mosad_sakh}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Height</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->height}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Weight</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->weight}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Maritual Status</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->maritual_status}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Land</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->land}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Father Occupation</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->father_occupation}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Mother Occupation</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->mother_occupation}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Brother</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->brother}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Sister</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->brother}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Address</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->address}}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Extra Details</label>

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{$data->extra_details}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--end::Content-->

            </div>
            <!--end::Basic info-->
        </div>
    </div>
</div>
@endpush

@push('script')
@endpush