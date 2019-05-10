<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo" style="max-width: 250px;">
                <a class="navbar-brand" href="{{route('client.page_home')}}"><img src="{{asset('public/upload/imgLogo/'.$infoGet['cnttInfoLogo01'])}}" alt="" class="size-logo-mobile" style="width: 100%;"></a>
        </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item "><a class="nav-link" href="{{route('client.page_home')}}">Giới Thiệu</a></li>
                <li class="nav-item"><a class="nav-link js-anchor-link" href="#daotao">Đào Tạo</a></li>
                <li class="nav-item"><a class="nav-link js-anchor-link" href="#nghiencuu">Nghiên Cứu</a></li>
                <li class="nav-item"><a class="nav-link js-anchor-link" href="#sinhvien">Sinh Viên</a></li>
                <li class="nav-item"><a class="nav-link js-anchor-link" href="#giangvien">Giảng Viên</a></li>
                <li class="nav-item"><a class="nav-link js-anchor-link" href="#tintuc">Tin Tức</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="contact-us.html">Liên Hệ</a></li> --}}
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->
