<aside class="right_widget r_cat_widget">
    <div class="r_w_title">
        <h3>Danh mục</h3>
    </div>
    <ul>
        @foreach ($recentInfo02 as $item)
        <li><a href="{{route('client.page_news.list',['id' => $item['id']])}}">{{$item['cnttCateName']}}</a></li>
        @endforeach
    </ul>
</aside>