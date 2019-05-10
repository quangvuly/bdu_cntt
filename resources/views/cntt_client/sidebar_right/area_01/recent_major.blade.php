<aside class="right_widget r_news_widget">
        <div class="r_w_title">
            <h3>Ngành đào tạo</h3>
        </div>
        <div class="news_inner">
            @foreach ($recentInfo as $item)
            <div class="news_item">
                <a href="{{ route('client.page_major.detail',['id' => $item['id']])}}"><h4>{{$item['cnttMajorTitle']}}</h4></a>
                <a href="#"><h6>{{date('M d, Y',strtotime($item['updated_at']))}}</h6></a>
            </div>
            @endforeach
        </div>
    </aside>