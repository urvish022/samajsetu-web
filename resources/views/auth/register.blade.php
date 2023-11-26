<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../" />
	<title>{{env('APP_NAME')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />

	<!--end::Global Stylesheets Bundle-->
	<style type="text/css">
		.select2.select2-container.select2-container--bootstrap5+.invalid-feedback::after {
			display: block;
			color: red;
			/* Customize the color as needed */
			/* Additional styling for the error message */
			margin-top: 5px;
			font-size: 12px;
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center" style="background-image: url(assets/media/misc/auth-bg.png)">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
					<!--begin::Logo-->
					<a href="https://samajsetu.com" class="mb-0 mb-lg-20">
						<img alt="Logo" src="assets/media/logos/web_logo.png" class="h-40px h-lg-100px" />
					</a>
					<!--end::Logo-->
					<!--begin::Image-->
					<img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="assets/media/logos/splash.png" alt="" />
				</div>
				<!--end::Content-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
				<!--begin::Form-->
				<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10">
						
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="register_form">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Register</h1>
								<!--end::Title-->
							</div>

							<!--begin::Alert-->
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
							<!--end::Alert-->
							<!--begin::Heading-->
							<input type="hidden" id="crop_photo" name="crop_photo">
							<div class="fv-row mb-3">
								<input type="text" placeholder="Enter Your Full Name" name="full_name_eng" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<select name="village_id" id="village_id" aria-label="Select a Village" data-control="select2" data-placeholder="Select a village" class="form-select form-select form-select-lg fw-semibold">
									<option value="">Select a Village...</option>
									@foreach ($villages as $village)
									<option value="{{$village->village_id}}">{{$village->eng_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="fv-row mb-3">
								<select name="country_id" id="country_id" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country" class="form-select form-select form-select-lg fw-semibold">
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
							<div class="fv-row mb-3">
								<input type="text" placeholder="Enter Your Phone Number Without Country Code" name="mobile_no" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<input type="text" placeholder="Enter Your Email" name="email_id" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<input type="date" placeholder="Enter Your Birth Date" name="birth_date" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<select name="blood_grp" id="blood_grp" aria-label="Select a Blood Group" data-control="select2" data-placeholder="Select a Blood Group" class="form-select form-select form-select-lg fw-semibold">
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
							<div class="fv-row mb-3">
								<input type="text" placeholder="Enter Your City Name" name="city_name" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<input type="text" placeholder="Enter Your Home Address" name="address" autocomplete="off" class="form-control bg-transparent" />
							</div>
							<div class="fv-row mb-3">
								<input type="file" id="fileInput" name="photo" accept=".png, .jpg, .jpeg" />
							</div>
							<a href="#" id="hiddenModalTrigger" style="display: none;" data-bs-toggle="modal" data-bs-target="#cropie_modal"></a>
							<!--end::Input group=-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
							</div>
							<!--end::Wrapper-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="button" id="register_btn" class="btn btn-primary">
									<!--begin::Indicator label-->
									<span class="indicator-label">Register</span>
									<!--end::Indicator label-->
									<!--begin::Indicator progress-->
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator progress-->
								</button>
							</div>
							<!--end::Submit button-->
							<div class="text-gray-500 text-center fw-semibold fs-6">
								Already have an account?
								<a href="{{url('login')}}" class="link-primary fw-semibold">
									Login
								</a>
							</div>
						</form>
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
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
	{!! JsValidator::formRequest('App\Http\Requests\RegisterRequest','#register_form') !!}
	<script type="text/javascript">
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

			$('#crop').on('click', function (ev) {
				
				$uploadCrop.croppie('result', {type: 'base64', size: 'original', format: 'png'}).then(function(resp) {
					$("#crop_photo").val(resp);
				});

				$('#cropie_modal').modal('hide');
			});


			function readFile(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (e) {
						$uploadCrop.croppie('bind', {
							url: e.target.result
						});
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$('#fileInput').on('change', function () { 
				
				readFile(this);

				$('#cropie_modal').modal('show');

			});

		});

		$(document).ready(function () {
			$('#cropie_modal').modal({
				backdrop: 'static',
				keyboard: false
			})
		});
		
		$("#register_btn").click(function() {
			if ($("#register_form").valid()) {
				var formData = new FormData($("#register_form")[0]);
				$.ajax({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: '/register-ajax',
					type: 'POST',
					data: formData,
					processData: false,  // Important!
					contentType: false,  // Important!
					success: function(response) {
						$("#toast_area").show();
						
						if(response.status){
							$('#register_form input[type="text"], #register_form input[type="email"], #register_form input[type="date"]').val('');
							$('#register_form input[type="text"], #register_form input[type="email"], #register_form input[type="date"]').removeClass('is-valid');

							$('#register_form')[0].reset();

							$("#blood_grp").val('').trigger('change');
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
</body>

</html>