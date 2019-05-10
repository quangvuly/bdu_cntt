<div class="col-lg-3">
    <div class="right_sidebar_area">

        @include('cntt_client.sidebar_right.area_01.'.$recentBlade,['recentInfo' => $recentInfo])

        @include('cntt_client.sidebar_right.area_02.'.$recentBlade02,['recentInfo02' => $recentInfo02])

        @include('cntt_client.sidebar_right.area_03.connect')

    </div>
</div>
{{-- </div> --}}