@extends('layout.app')
@push('style')
<style>
    .carousel {
        padding-top: 20px;
        width: 357px;
        overflow: hidden;
        height: 50px;
        position: relative;
    }

    .carousel ul {
        position: relative;
        list-style: none;
        list-style-type: none;
        margin: 0;
        height: 50px;
        padding: 0;
    }

    .carousel ul li {
        position: absolute;
        height: 25px;
        width: 50px;
        float: left;
        margin-right: 1px;
        background: #f2f2f2;
        text-align: center;
        padding-top: 25px;
    }
</style>
@endpush
@push('page')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center me-3 mb-4 mb-lg-0">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Home
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <!-- <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                
                <div class="col-xl-12">
                
                    <div class="card card-flush">
                        <a href="javascript:void(0);" class="btnPrevious">Previous</a>
                        <a href="javascript:void(0);" class="btnNext">Next</a>
                        <div class="card-body pt-0 px-0">
                
                            <div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px">

                                <div class="carousel">
                                    <ul>
                                        @foreach ($sliders as $slider)
                                    <li><img src="{{config('url.slider')}}{{$slider->slider_photo}}"></li>
                                @endforeach
                                        <ul>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div> -->
            
            <div class="row g-5 g-xl-10">

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('matrimony.index',['type'=>'male'])}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/matrimony.png')}}" class="w-60px" alt="Matrimony" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Matrimony</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('directory.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/directory.png')}}" class="w-60px" alt="Directory" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Directory</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('business.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/business.png')}}" class="w-60px" alt="Businesses" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Businesses</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('memorial.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/memorial.png')}}" class="w-60px" alt="Memorial" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Memorial</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('achievements.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/achievements.png')}}" class="w-60px" alt="Achievements" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Achievements</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('history.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/village.png')}}" class="w-60px" alt="Village History" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">History</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row g-5 g-xl-10">

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('gallery.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/gallery.png')}}" class="w-60px" alt="Gallery" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Gallery</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('news.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/news.png')}}" class="w-60px" alt="News" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">News</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('donors.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/blood.png')}}" class="w-60px" alt="Blood" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Blood Donor</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="https://www.youtube.com/@ashvinbamrolia" target="_blank">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/channel.png')}}" class="w-60px" alt="Youtube Channel" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Channel</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('events.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/events.png')}}" class="w-60px" alt="Events" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Events</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <a href="{{route('transactions.index')}}">
                        <div class="card h-lg-100">
                            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                                <div class="m-0">
                                    <img src="{{url('assets/media/common/paytm.png')}}" class="w-60px" alt="Paytm" />
                                </div>

                                <div class="d-flex flex-column my-7">
                                    <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">Transactions</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endpush

@push('script')
<script type="text/javascript">
    $(function() {
        var carousel = $('.carousel ul');
        var carouselChild = carousel.find('li');
        var clickCount = 0;
        var canClick = true;

        itemWidth = carousel.find('li:first').width() + 1; //Including margin

        //Set Carousel width so it won't wrap
        carousel.width(itemWidth * carouselChild.length);

        //Place the child elements to their original locations.
        refreshChildPosition();

        //Set the event handlers for buttons.
        $('.btnNext').click(function() {
            if (canClick) {
                canClick = false;
                clickCount++;

                //Animate the slider to left as item width 
                carousel.stop(false, true).animate({
                    left: '-=' + itemWidth
                }, 300, function() {
                    //Find the first item and append it as the last item.
                    lastItem = carousel.find('li:first');
                    lastItem.remove().appendTo(carousel);
                    lastItem.css('left', ((carouselChild.length - 1) * (itemWidth)) + (clickCount * itemWidth));
                    canClick = true;
                });
            }
        });

        $('.btnPrevious').click(function() {
            if (canClick) {
                canClick = false;
                clickCount--;
                //Find the first item and append it as the last item.
                lastItem = carousel.find('li:last');
                lastItem.remove().prependTo(carousel);

                lastItem.css('left', itemWidth * clickCount);
                //Animate the slider to right as item width 
                carousel.finish(true).animate({
                    left: '+=' + itemWidth
                }, 300, function() {
                    canClick = true;
                });
            }
        });

        function refreshChildPosition() {
            carouselChild.each(function() {
                $(this).css('left', itemWidth * carouselChild.index($(this)));
            });
        }
    });
</script>
@endpush