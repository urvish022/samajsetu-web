@if($count == 0)
<div data-kt-search-element="empty" class="text-center card">
    <div class="pt-10 pb-10">
        <i class="ki-duotone ki-file fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
    </div>
    <!--end::Icon-->

    <!--begin::Message-->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No data found</h3>
        <div class="text-muted fs-7"><a href="{{url()->previous()}}">Go Back</a></div>
    </div>
    <!--end::Message-->
</div>
@endif