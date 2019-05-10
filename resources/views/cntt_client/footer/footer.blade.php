<!--================Footer Area =================-->
<footer class="footer_area">
        <div class="footer_widgets_area">
            <div class="container">
                <div class="f_widgets_inner row">
                    <div class="col-lg-4 col-md-6">
                        <aside class="f_widget widget-binh-duong ">
                            <div class="f_w_title white-color">
                                <h3>TẠI {{$contact[0]['cnttContactBase']}}</h3>
                                <p>Địa Chỉ: {{$contact[0]['cnttContactAddress']}}</p>
                                <p> {{$contact[0]['cnttContactCity']}}</p>
                                <p>Điện thoại: {{$contact[0]['cnttContactPhoneNo1'].' - '.$contact[0]['cnttContactPhoneNo2']}}</p>
                                <p> Email: {{$contact[0]['cnttContactEmail']}} | Website: {{$contact[0]['cnttContactWebsite']}}</p>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6 align-middle footer-logo">
                        <aside class="f_widget text-align-center ">
                            <img src="{{asset('public/upload/imgLogo/'.$infoGet['cnttInfoLogo02'])}}" class="width-50 pb-30" alt="">
                            <h6>ĐẠI HỌC BÌNH DƯƠNG</h6>
                        </aside>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <aside class="f_widget" style="text-align: left;">
                            <div class="f_w_title white-color">
                                <h3>TẠI {{$contact[1]['cnttContactBase']}}</h3>
                                <p>Địa Chỉ: {{$contact[1]['cnttContactAddress']}}</p>
                                <p> {{$contact[1]['cnttContactCity']}}</p>
                                <p>Điện thoại: {{$contact[1]['cnttContactPhoneNo1'].' - '.$contact[1]['cnttContactPhoneNo2']}}</p>
                                <p> Email: {{$contact[1]['cnttContactEmail']}} | Website: {{$contact[1]['cnttContactWebsite']}}</p>
                            </div>
                        </aside>
                    </div>d
                </div>
            </div>
        </div>
        <div class="copy_right_area ">
            <div class="container">
                <div class="float-md-left">
                    <h5 class="white-color">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> {{$infoGet['cnttInfoCopyright']}} 
                        {{-- <i class="fa fa-heart-o" aria-hidden="true"></i> 
                        by <a href="https://colorlib.com" target="_blank"></a> --}}
                    </h5>
                </div>
                <div class="float-md-right" style="line-height: 50px;">
                    <ul class="nav ">
                        @foreach ($comm as $item)
                            <li class="nav-item">
                                <i class="{{$item['cnttCommIcon']}} icon-arrow-30-white align-middle"></i>
                            </li>
                        @endforeach
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->