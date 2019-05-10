@extends('cntt_client/master')
@section('content')
<!--================Slider Area =================-->
<section class="main_slider_area">
    <div class="containerBox">
        <img src="{{asset('public/upload/imgCover/'.$infoGet['cnttInfoCoverImage'])}}"
        class="rev-slidebg width-100 height-banner-mobile-300">
        {{-- <div id="CarouselS1" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators" style="bottom: 10px;">
                @for ($i = 0; $i < count($slider); $i++) @if ($i==0) <li data-target="#CarouselS1" data-slide-to={{$i}}
                    class="active">
                    </li>
                    @else
                    <li data-target="#CarouselS1" data-slide-to={{$i}}></li>
                    @endif

                    @endfor

            </ul>
            <div class="carousel-inner">
                @foreach ($slider as $item)
                @if ($loop->first)
                <div class="carousel-item active carousel-item-height-img">
                    @else
                    <div class="carousel-item carousel-item-height-img">
                        @endif
                        <img src="{{asset('public/upload/imgSlide/'.$item['cnttSliderImage'])}}"
                            class="rev-slidebg width-100 height-banner-mobile-300">
                        <div class="centered text-silder">
                            <p class="h1 text-silder">{{$item['cnttSliderTitle']}} </p>
                            <p class="h3 text-align-center text-silder"> {!! Str::limit($item['cnttSliderIntro'], 50)!!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#CarouselS1" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#CarouselS1" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div> --}}
        {{-- "Image static" --}}
    </div>
</section>
<!--================End Slider Area =================-->

<!--================Creative Feature Area =================-->
<section>
    <div class="container">
        <!--================TIEU DE =================-->
        <div class="section-heading">
            <div class="row">
                <div class="col-8 col-md-8 ">

                    <h5 class="line-height-42 pl-25">Tiêu Đề</h5>

                </div>
                <div class="col-4 col-md-4 text-align-right">
                    <a href="#CarouselFN" data-slide="prev"><i class="ti-angle-left owl-prev"></i></a>
                    <a href="#CarouselFN" data-slide="next"><i class="ti-angle-right owl-next"></i></a>
                </div>
            </div>
        </div>
        <div class="row" id="daotao">
            <div id="CarouselFN" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    @foreach ($FeatureNews as $item)
                    @if ($loop->first)
                    <div class="carousel-item active">
                        <div class="row">
                            @endif
                            @if( $loop->iteration % 4 == 0)
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            @endif

                            <div class="col-lg-4">
                                <figure class="snip1190">
                                    <img src="{{asset('public/upload/imgNewsFeature/'.$item['cnttNewsImage'])}}"
                                        alt="sample64" />
                                    <figcaption>
                                        <div class="square">
                                            <div></div>
                                        </div>
                                        <h2>{{$item['cnttNewsTitle']}}</h2>
                                        <p>{!! Str::limit($item['cnttNewsDesc'], 50)!!}</p>
                                    </figcaption>
                                    <a href="{{route('client.page_news.detail',['id' => $item['id']])}}"></a>
                                </figure>
                            </div>

                            @if ($loop->last == true)
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--================End TIEU DE =================-->

        <!--================Area Dao Tao =================-->

        <div class="section-heading">
            <div class="row">
                <h5 class="line-height-42 pl-25">Đào Tạo</h5>

            </div>
        </div>
        <div class="mt-10">
            <p>Khoa CNTT Đại học BÌnh Dương đã và đang đào tạo được 20 Khóa Đại học và 15 khóa Cao đẳng, trong đó
                đã có 16 khóa Đại học và 12 khóa Cao đẳng với khoảng 3000 sinh viên đã ra trường và đang làm việc
                tốt cho các công ty Việt Nam, công ty nước ngoài, các cơ quan, doanh nghiệp Nhà nước trên địa bàn
                tỉnh Bình Dương và các tỉnh/thành lân cận. Với các chuyên ngành đào tạo:
            </p>
        </div>

        <!--================End Dao Tao =================-->


        <!--================Element Feature =================-->
        <div class="row mt-10">
            @foreach ($major as $item)
            <div class="col-md-3 border-bottom border-right pb-10 pt-10">
                <a href="{{route('client.page_major.detail',['id' => $item['id']])}}"><img class="center-block" src="{{asset('public/upload/imgMajor/'.$item['cnttMajorImage'])}}"></a>
                <h4 class="text-align-center mt-10">{{$item['cnttMajorTitle']}}</h4>
                
            </div>
            @endforeach
        </div>
        <!--================End Element Feature =================-->
    </div>
    <!--================Our Team =================-->
    <section class="team_area mt-10 team_area_2" id="nghiencuu">
        <div class="container">
            <h2>Hợp tác</h2>
            <div class="row mt-10">
                <div class="col-lg-10  mt-10">
                    <p>Đại học Bình Dương liên doanh với nhiều trường Đại học, doanh nghiệp trong và ngoài nước</p>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 mt-10 text-align-right position-icon-arrow-mobile">
                            <a href="#CarouselCN" data-slide="prev"><i
                                    class="far fa-arrow-alt-circle-left icon-arrow-30-gray pr-10"></i></a>
                            <a href="#CarouselCN" data-slide="next"><i
                                    class="far fa-arrow-alt-circle-right icon-arrow-30-red"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="CarouselCN" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                @foreach ($cooperate as $item)
                @if ($loop->first)
                    <div class="carousel-item active">
                        <div class="grid">
                @endif
                @if( $loop->iteration  % 7 == 0)
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid">
                @endif
                
                <figure class="effect-steve p-10">
                        <img src="{{asset('public/upload/imgCooperate/'.$item['cnttCooperateImage'])}}">
                        <figcaption>
                            <h2>{{$item['cnttCooperateName']}} </h2>
                            {{-- <span> {{$item['cnttLecturerFullName']}}</span> --}}
                            {{-- <p>Originally from Miami. I love black and white classics, chillout music and green
                                tea.</p> --}}
                        </figcaption>
                    </figure>

                @if ($loop->last == true)
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Our Team =================-->

    <!--================Silder  =================-->
    <section class="mt-10">
            <div class="container">
                <div class="row pl-15 pr-15">
                    <div class="col-lg-1 white-bg text-align-center mt-10" >
                            {{-- <div class="" style="bottom: 10px;">
                        @for ($i = 0; $i < count($slider); $i++) 
                        @if ($i==0) 
                            <i class="far fa-circle p-10 active" data-slide-to="{{$i}}" data-target="#CarouselS2"></i>
                        @else
                            <i class="far fa-circle p-10 " data-slide-to="{{$i}}" data-target="#CarouselS2"></i>
                        @endif
                        @endfor
                            </div> --}}
                        {{-- <h5 class="rotate number-silder"> 1/3 </h5> --}}
                        <div class="arrow-silder">
                            <a href="#CarouselS2" data-slide="prev"><i
                                    class="fas fa-arrow-left icon-arrow-20-gray pr-20"></i></a>
                            <a href="#CarouselS2" data-slide="next"><i
                                    class="fas fa-arrow-right icon-arrow-20-gray"></i></a>
                        </div>
                    </div>
    
                    <div id="CarouselS2" class="carousel slide col-lg-11 mt-10" data-ride="carousel"
                        style="padding: 0px 0px 0px 1px;">
                        <div class="carousel-inner">
                            @foreach ($slider as $item)
                            @if ($loop->first)
                            <div class="carousel-item active ">
                            @else
                            <div class="carousel-item ">
                            @endif
                                <img src="{{asset('public/upload/imgSlide/'.$item['cnttSliderImage'])}}" class="width-100">
                                <div class="transbox pl-40">
                                    <div class=" align-middle css-text-silder">
                                        {{-- <a href="#">#SinhvienBDU</a> --}}
                                        <h3 class="mt-30 title-text-silder-sv">{{$item['cnttSliderTitle']}}</h3>
                                        <p style="width: 50%" class="mt-10 dot-text-1-line-mobile">{!!$item['cnttSliderIntro']!!}</p>
                                        <button class="style-button-silder mt-30">
                                            <a href="{{ route('client.page_slider.detail',['id' => $item['id']]) }}"> Xem Thêm <i
                                                    class="far fa-arrow-alt-circle-right icon-arrow-30-red align-middle pl-15"></i></a>
                                        </button>
    
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            </div>
        </section>
    <!--================End Silder   =================-->


    <!--================Post Sinh viên =================-->
    <div class="container" id="sinhvien">

        <div class="row">
            <div class="col-12 col-md-8">
                <div class="section-heading">
                    <h5 class="line-height-42 pl-25">Sinh viên</h5>

                </div>
                <div class="row">
                    @foreach ($SVNews as $item)
                    <div class="col-lg-6 mb-30">
                        <img src="{{asset('public/upload/imgNewsFeature/'.$item['cnttNewsImage'])}}" class="width-100">
                        <h5 class="dot-text-3-line mt-20">{{$item['cnttNewsTitle']}}</h5>
                        <p class="dot-text-2-line mt-20">{!!Str::limit($item['cnttNewsDesc'],150)!!} </p>
                        <a class="mt-10" href="{{route('client.page_news.detail',['id' => $item['id']])}}">Xem thêm >></a>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="section-heading">
                    <h5 class="line-height-42 pl-25">Bài viết khác</h5>
                </div>

                <div class="row">
                    @foreach ($SVRecentNews as $item)
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="{{asset('public/upload/imgNewsFeature/'.$item['cnttNewsImage'])}}" alt="" style="width: 90px;height:90px;"></a>
                        </div>
                        <div class="post-data">
                            <a href="{{route('client.page_news.detail',['id' => $item['id']])}}" class="post-catagory">{{$item['cnttNewsTitle']}}</a>
                            <div class="post-meta">

                                {{-- <h6 class="dot-text-2-line">{!!$item['cnttNewsDesc']!!}</h6> --}}

                                <p class="post-date"><span> {{date('H : i A',strtotime($item['updated_at']))}} </span> | <span> {{date('M d',strtotime($item['updated_at']))}} </span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget mt-30">
                        <h4>Newsletter</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <form action="#" method="post">
                            <input type="text" name="text" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <button type="submit" class="btn w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!--================End Post Sinh viên  =================-->
    <!--================Our Staff =================-->
    <section class="team_area mt-10" id="giangvien">
        <div class="container">
            <h2>Giảng viên</h2>
            <div class="row mt-10">
                <div class="col-lg-10">
                    <p>Tập thể trẻ đầy năng động, nhiệt huyết, sáng tạo, kỷ luật và tinh thần tiên phong, đam mê
                        công nghệ, các thành viên luôn đem hết tâm huyết tạo nên những sản phẩm hỗ trợ tốt nhất. </p>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-lg-12 mt-10 text-align-right position-icon-arrow-mobile">
                            <a href="#CarouselGV" data-slide="prev"><i
                                    class="far fa-arrow-alt-circle-left icon-arrow-30-gray pr-10"></i></a>
                            <a href="#CarouselGV" data-slide="next"><i
                                    class="far fa-arrow-alt-circle-right icon-arrow-30-red"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="CarouselGV" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                        @foreach ($lecturer as $item)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <div class="grid">
                            @endif
                            @if( $loop->iteration  % 7 == 0)
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="grid">
                            @endif
                            
                            <figure class="effect-steve p-10">
                                    <img src="{{asset('public/upload/imgLecturer/'.$item['cnttLecturerImage'])}}">
                                    <figcaption>
                                        <h2>{{$item['cnttLecturerFullName']}} </h2>
                                        {{-- <span> {{$item['cnttLecturerFullName']}}</span> --}}
                                        {{-- <p>Originally from Miami. I love black and white classics, chillout music and green
                                            tea.</p> --}}
                                    </figcaption>
                                </figure>
        
                            @if ($loop->last == true)
                                    </div>
                                </div>
                            @endif
                            @endforeach
            </div>
        </div>
    </section>
    <!--================End Our Staff =================-->

    <!--================ Video =================-->
    <section class="video-area mt-10">
        <div class="container">
            <div class="white-color style-div-text-video">
                <h4 class="p-10">Why Virtual Reality &
                    Augmented Reality are more important than you think?</h4>
                <div class="p-10">
                    <i class="fas fa-play-circle icon-arrow-30-white pl-15 icon-play-video"></i>
                    <h5>PHÁT VIDEO</h5>
                    <p class="pt-10">The Beauty of Zermatt Switzerland</p>
                </div>
            </div>
        </div>

    </section>

    <!--================End  Video =================-->

    <!--================tin tuc =================-->
    <div class="container mt-10" id="tintuc">
        <div>

            <div class="section-heading">
                <h5 class="line-height-42 pl-25">Tin tức</h5>

            </div>
            <div class="row mt-10">
                <div class="col-lg-10">
                    <p>SpaceMax is designed to pioneer the plasma architecture, the leading scalability solution
                        for Ethereum is a stakeholder and infinitely scalable.</p>
                </div>

            </div>

            <div class="row py-4 mt-30">
                <div class="col-md-12">
                    <ul id="tabsJustified" class="nav nav-tabs">

                        @foreach ($RecentNews as $item)
                        <li class="nav-item">
                            <a href="" data-target="#{{ str_replace(' ', '_', $item['cnttCateName'])}}" data-toggle="tab"
                                class="nav-link small text-uppercase {{ ($loop->first) ? "active" : "  "}} ">{{$item['cnttCateName']}}</a></li>
                        @endforeach
                    </ul>
                    <br>
                    <div id="tabsJustifiedContent" class="tab-content">
            
                        @foreach ($RecentNews as $item)
                        <div id="{{str_replace(' ', '_', $item['cnttCateName'])}}" class="tab-pane fade {{ ($loop->first) ? "active show" : "  "}}">
                            @foreach ($item['news_relate'] as $news)
                                    <div class="col-md-12">
                                        <div class="post post-row">
                                            <a class="post-img" href="{{route('client.page_news.detail',['id' => $news['id']])}}"><img
                                                    src="{{asset('public/upload/imgNewsFeature/'.$news['cnttNewsImage'])}}"
                                                    alt=""></a>
                                            <div class="post-body">
                                                <div class="post-meta">
                                                    <a class="post-category cat-2" href="{{route('client.page_news.list',['id' => $news['cnttNewsCateID']])}}">{{$item['cnttCateName']}}</a>
                                                    <span class="post-date">{{date('M d, Y',strtotime($news['updated_at']))}}</span>
                                                </div>
                                                <h3 class="post-title"><a href="{{route('client.page_news.detail',['id' => $news['id']])}}">{{$news['cnttNewsTitle']}}</a></h3>
                                                <p>{!!Str::limit($news['cnttNewsDesc'],300)!!}</p>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <div class="col-md-12">
                                <div class="text-center">
                                    <a href="{{route('client.page_news.list',['id' => $news['cnttNewsCateID']])}}"><button type="button" class="btn btn-primary button-style">Xem Thêm</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--================ End tin tuc =================-->


</section>
<!--================ contact =================-->
<section class="contact-area mt-10">
    <div class="container white-color style-div-text-contact">
        <h4>ĐẠI HOC 4.0 LỰA CHỌN CỦA TƯƠNG LAI</h4>
        <div class="row mt-30">
            <div class="col-lg-6">
                <div class="input-group mb-3 customerize-input">
                    <input type="text" class="form-control customerize-input"
                        placeholder="Nhập email để nhận thêm thông tin" aria-label="Nhập email để nhận thêm thông tin"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <a><i class="far fa-arrow-alt-circle-right icon-arrow-30-red"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End  contact =================-->
<!--================End Creative Feature Area =================-->
@endsection