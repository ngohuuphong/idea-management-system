{{-- resources/views/layouts/partials/nav.blade.php --}}

<nav class="nav-1">
    <div class="content">
        <a class="logo" href="{{ url('index.html') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

        <ul class="nav-li">
            <li class="pc"><a href="{{ url('index.html') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
            <li class="pc"><a href="{{ url('mypage.html') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="">マイページ</a></li>
            <li class="nav-news">
                <button class="accttl"><img src="{{ asset('images/ico-news.svg') }}" alt="お知らせ"></button>
                <ul class="accshow">
                    <li>
                        <p><b>「治療時間のオンライン共有」</b>のアイデアが<b class="green">承認</b>されました。</p>
                        <div class="date">2024/03/01</div>
                    </li>
                    <li>
                        <p><b>「リマインダーサービスの提案」</b>のアイデアが<b class="red">不採用</b>になりました。</p>
                        <div class="date">2024/03/01</div>
                    </li>
                </ul>
                <div class="close-bg"></div>
            </li>
        </ul>
    </div>
</nav>

<nav class="nav-2">
    <div class="content">
        <a class="back-btn" href="{{ url()->previous() }}">一覧に戻る</a>
        <div class="status-wrap">
            <a class="status b-bk" href="">保留</a>
            <a class="js-modal-open status b-red" href="" data-target="remand">差戻し</a>
            <a class="js-modal-open status b-green" href="" data-target="approval">承認</a>
        </div>
    </div>
</nav>

{{-- 
<nav class="nav-3 sp">
    <a href="{{ url('index.html') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
    <a href="{{ url('mypage.html') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ"></a>
</nav> 
--}}
