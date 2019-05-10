@extends('cntt_client/master_blog')

@section('banner')
<div class="banner_text_inner">
    <h4>{{$detailSlider['cnttSliderTitle']}}</h4>
    <ul>
        <li><a href="{{route('client.page_home')}}"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a></li>
        {{-- <li><a href="{{route('client.page_home')}}#tintuc"><i class="fa fa-angle-right" aria-hidden="true"></i>Tin tức</a></li> --}}
        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chi tiết </a></li>
    </ul>
</div>
@endsection

        
@section('content')
<!--================Static Area =================-->

            <div class="col-lg-9">
                <div class="static_main_content">
                    <div class="static_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="row p-15">
                        <div class="static_img">
                            <img class="img-fluid" src="{{asset('public/upload/imgSlide/'.$detailSlider['cnttSliderImage'])}}" alt="">
                        </div>
                        <div class="static_text">
                            {!! $detailSlider['cnttSliderDetail'] !!}
                        </div>
                    </div>
                </div>
            </div>

            @include('cntt_client.sidebar_right.sidebar',[
                    'recentBlade' => 'recent_slides',
                    'recentInfo' => $recentSlider,

                    'recentBlade02' => 'example',
                    'recentInfo02' => 'Lorem Ipsum Generator',
                ])
            
<!--================End Static Area =================-->

@endsection