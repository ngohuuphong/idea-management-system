<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="ja" itemscope itemtype="http://schema.org/Product">
<head prefix="og:http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <title>Smart Checkout</title>
    <meta name="robots" content="noindex">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>
<body ontouchstart="" class="detail content-w116">

<div id="wrapper">
    {{-- resources/views/layouts/partials/nav.blade.php --}}

<nav class="nav-1">
    <div class="content">
        <a class="logo" href="{{ route('manager.index') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

        <ul class="nav-li">
            <li class="pc"><a href="{{ route('manager.index') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
            <li class="pc"><a href="{{ route('manager.myPage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="">マイページ</a></li>
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

    <!-- Content Sections -->
    @yield('content')

   
</div><!-- wrapper -->

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>
