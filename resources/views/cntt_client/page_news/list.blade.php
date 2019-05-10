@extends('cntt_client/master_blog')
@section('banner')

    <div class="banner_text_inner">
        <h4>{{$cateName['cnttCateName']}}</h4>
        <ul>
            <li><a href="{{route('client.page_home')}}"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a></li>
            <li><a href="{{route('client.page_home')}}#tintuc"><i class="fa fa-angle-right" aria-hidden="true"></i>Danh mục</a></li>
            <!--  <li><a href="static.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Static Page</a></li> -->
        </ul>
    </div>

@endsection



<!--================Static Area =================-->
@section('content')
<div class="col-lg-9">
    <div class="static_main_content">
        {{-- <div class="static_social">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
            </ul>
        </div> --}}

        <div class="row">
            @foreach ($listFTNewsSameCate as $item)
            <div class="col-lg-6 mt-20">
                <div class="box-shadwon-news-box p-20">
                    <div class="mb-20">
                        {{-- <span class="p-10 style-small-sub-title">Mobile</span>
                        <span class="p-10 style-small-sub-title">News</span> --}}
                    </div>
                    <img class="mb-20 width-100" src="{{asset('public/upload/imgNewsFeature/'.$item['cnttNewsImage'])}}" >
                    <span>{{date('M d, Y',strtotime($item['updated_at']))}}</span>
                    <h4 class="dot-text-3-line">{!! $item['cnttNewsTitle'] !!}</h4>
                    <a class="mt-10" href="{{ route('client.page_news.detail',['id' => $item['id']])}}"> Xem Thêm >> </a>
                </div>
            </div>
                
            @endforeach

        </div>
    </div>
</div>

@include('cntt_client.sidebar_right.sidebar',[
    'recentInfo' => $listRCNewsSameCate,
    'recentInfo02' => $cateList,
    'recentBlade' => 'recent_news',
    'recentBlade02' => 'category_list',
    ])
            
<!--================End Static Area =================-->

@endsection
