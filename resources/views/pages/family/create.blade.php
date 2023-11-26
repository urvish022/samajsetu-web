@extends('layout.app')

@push('page')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Family Member
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('profile.index')}}" class="text-muted text-hover-primary">
                            Profile
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Add Family Member</li>
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
                        <h3 class="fw-bold m-0">Family Details</h3>
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

                        <form id="member_form" class="form" novalidate="novalidate">

                            <input type="hidden" id="crop_photo" name="crop_photo">
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Photo</span></label>

                                <div class="col-lg-8">
                                    <div class="symbol symbol-100px bg-">
                                        <input type="file" id="fileInput" name="fphoto" accept=".png, .jpg, .jpeg">
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
                                            <input name="ffull_name_eng" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter full name" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Relation with Main Member</span>
                                </label>

                                <div class="col-lg-8 fv-row">
                                    <select name="relation_id" aria-label="Select a Relation" data-control="select2" data-placeholder="Select a relation" class="form-select form-select form-select-lg fw-semibold">
                                        <option value="">Select a Relation...</option>
                                        @foreach ($relations as $relation)
                                        <option value="{{$relation->relation_id}}">{{$relation->relation_name_eng}}</option>
                                        @endforeach
                                    </select>
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
                                            <input name="feducation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your education" />
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
                                            <input name="foccupation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your occupation" />
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
                                            <input name="fmobile_no" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mobile number" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="">Blood Group</span>
                                </label>

                                <div class="col-lg-8 fv-row">
                                <select name="fblood_grp" id="blood_grp" aria-label="Select a Blood Group" data-control="select2" data-placeholder="Select a Blood Group" class="form-select form-select form-select-lg fw-semibold">
                                    <option value="">Select a Blood Group...</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">City Name</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="fcity_name" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter city name" />
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
                                            <input name="fmosad" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your mosad" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">
                                    <span class="required">Piyar</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="fpiyar" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your piyar" />
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
                                            <input name="fbirth_date" type="date" class="form-control form-control-lg form-control mb-3 mb-lg-0" />
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
                                            <select name="fmarried_status" aria-label="Select a maritual status" data-control="select2" data-placeholder="Select a maritual status" class="form-select form-select form-select-lg fw-semibold">
                                                <option value="">Select</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="divorced">Divorced</option>
                                            </select>
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
                                            <input name="foccupation" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter father occupation" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="">Email</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="femail_id" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter your email" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="">Business Address</span>
                                </label>

                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input name="fbussiness_address" type="text" class="form-control form-control-lg form-control mb-3 mb-lg-0" placeholder="Enter business address" />
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
{!! JsValidator::formRequest('App\Http\Requests\StoreFamilyMemberRequest','#member_form') !!}
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

            $uploadCrop.croppie('result', {
                type: 'base64',
                size: 'original',
                format: 'png'
            }).then(function(resp) {
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
        if ($("#member_form").valid()) {
            var formData = new FormData($("#member_form")[0]);
            $.ajax({
                url: "{{route('family.store')}}",
                type: 'POST',
                data: formData,
                processData: false, // Important!
                contentType: false, // Important!
                success: function(response) {
                    $("#toast_area").show();
						
						if(response.status){
							$('#member_form input[type="text"], #member_form input[type="email"], #member_form input[type="date"]').val('');
							$('#member_form input[type="text"], #member_form input[type="email"], #member_form input[type="date"]').removeClass('is-valid');

							$('#member_form')[0].reset();
                            
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