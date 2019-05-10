<aside class="right_widget r_news_widget">
        <div class="r_w_title">
            <h3>Tin gần đây</h3>
        </div>
        <div class="news_inner">
            @foreach ($recentInfo as $item)
            <div class="news_item">
                <a href="{{ route('client.page_news.detail',['id' => $item['id']])}}"><h4>{{$item['cnttNewsTitle']}}</h4></a>
                <a href="#"><h6>{{date('M d, Y',strtotime($item['updated_at']))}}</h6></a>
            </div>
            @endforeach
        </div>
    </aside>