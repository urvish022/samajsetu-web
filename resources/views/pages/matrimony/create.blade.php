@extends('layout.app')

@push('page')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Biodata
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
                    <li class="breadcrumb-item text-muted">Add Biodata</li>
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
                        <h3 class="fw-bold m-0">Biodata Details</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->

                <div id="kt_account_settings_profile_details" class="collapse show">

                    <div class="card-body border-top p-9">
                        <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10" style="display: none!important;" id="toast_area">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-information fs-2hx text-light me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                <!--begin::Title-->
                                <!--end::Title-->

                                <!--begin::Content-->
                                <span class="toast_message"></span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Close-->
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                            <!--end::Close-->
                        </div>

                        <form id="matrimony_form" class="form" novalidate="novalidate">

                            <input type="hidden" id="crop_photo" name="crop_photo">
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Photo</span></label>

                                <div class="col-lg-8">
                                    <div class="symbol symbol-100px bg-">
                                        <input type="file" id="fileInput" name="photo" accept=".png, .jpg, .jpeg">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Full Name</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="full_name_eng" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter full name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Country</span>
                                </label>

                                <div class="col-lg-8 fv-row">
                                    <select name="country_id" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country" class="form-select form-select form-select-lg fw-semibold">
                                        <option value="">Select a Country...</option>
                                        <option value="1">Australia</option>
                                        <option value="2">Canada</option>
                                        <option value="3">India</option>
                                        <option value="4">New Zealand</option>
                                        <option value="5">South Africa</option>
                                        <option value="6">UAE</option>
                                        <option value="7">UK</option>
                                        <option value="8">USA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Village</span>
                                </label>

                                <div class="col-lg-8 fv-row">
                                    <select name="village_id" aria-label="Select a Village" data-control="select2" data-placeholder="Select a village" class="form-select form-select form-select-lg fw-semibold">
                                        <option value="">Select a Village...</option>
                                        @foreach ($villages as $village)
                                        <option value="{{$village->village_id}}">{{$village->eng_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Education</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="education" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your education" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Occupation</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="occupation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your occupation" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Income</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="income" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your annual income" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Father Mobile Number</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="father_mobile" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your father mobile number" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Mobile Number</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="mobile_no" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mobile number" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Sakh</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="sakh" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your sakh" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Mosad Sakh</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="mosad_sakh" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mosad sakh" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Mosad</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="mosad" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mosad" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Mother Name</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="mother_name" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mother name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Birth Date</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="birth_date" type="date" class="form-control form-control-lg form-control mb-3 mb-lg-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Height</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="height" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your height" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Weight</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="weight" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your weight" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Maritual Status</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select name="maritual_status" aria-label="Select a maritual status" data-control="select2" data-placeholder="Select a maritual status" class="form-select form-select form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="single">Single</option>
                                                <option value="divorced">Divorced</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Gender</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select name="gender" aria-label="Select gender" data-control="select2" data-placeholder="Select a gender" class="form-select form-select form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Land</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="land" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter Land" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Father Occupation</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="father_occupation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter father occupation" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Mother Occupation</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="mother_occupation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter mother occupation" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Brother</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="brother" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="How many brother?" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Sister</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="sister" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="How many sister?" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Address</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="address" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your home address" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span>Extra Details / Expectation</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" name="extra_details" placeholder="Enter extra details" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancel</button>
                                <button type="button" id="save_btn" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal" id="cropie_modal" data-controls-modal="cropie_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <!--begin::Modal Header-->
            <div class="modal-header">
                <h5 class="modal-title">Crop Photo</h5>
            </div>
            <!--end::Modal Header-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <div id="demo"></div>
            </div>
            <button type="button" class="btn btn-primary" id="crop">Save</button>
        </div>
    </div>
</div>
@endpush
@push('script')
{!! JsValidator::formRequest('App\Http\Requests\StoreMatrimonyData','#matrimony_form') !!}
<script>
    var cropImage = '';
    $(function() {
        var $uploadCrop = $('#demo').croppie({
            enableExif: true,
            viewport: {
                width: 300,
                height: 300,
                type: 'square'
            },
            boundary: {
                width: 400,
                height: 400
            }
        });

        $('#crop').on('click', function(ev) {

            $uploadCrop.croppie('result', {type: 'base64', size: {width:500,height:500}, quality: 0.5, format: 'png'}).then(function(resp) {
                $("#crop_photo").val(resp);
            });

            $('#cropie_modal').modal('hide');
        });


        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#fileInput').on('change', function() {

            readFile(this);
            $('#cropie_modal').modal('show');
        });

    });

    $(document).ready(function() {
        $('#cropie_modal').modal({
            backdrop: 'static',
            keyboard: false
        })
    });

    $("#save_btn").click(function() {
        if ($("#matrimony_form").valid()) {
            var formData = new FormData($("#matrimony_form")[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('matrimony.store')}}",
                type: 'POST',
                data: formData,
                processData: false, // Important!
                contentType: false, // Important!
                success: function(response) {
                    $("#toast_area").show();
						
						if(response.status){
							$('#matrimony_form input[type="text"], #matrimony_form input[type="email"], #matrimony_form input[type="date"]').val('');
							$('#matrimony_form input[type="text"], #matrimony_form input[type="email"], #matrimony_form input[type="date"]').removeClass('is-valid');

							$('#matrimony_form')[0].reset();
                            
							$("#country_id").val('').trigger('change');
							$("#village_id").val('').trigger('change');

							$("#toast_area").removeClass('bg-danger');
							$("#toast_area").addClass('bg-primary');
							$(".toast_message").text(response.message);
						} else {
							$("#toast_area").removeClass('bg-primary');
							$("#toast_area").addClass('bg-danger');
							$(".toast_message").text(response.message);
						}
                },
                error: function(error) {
                    $("#toast_area").show();
                    $("#toast_area").addClass('bg-danger');
                    $(".toast_message").text("Something went wrong!");
                }
            });
        }
    });
</script>
@endpush