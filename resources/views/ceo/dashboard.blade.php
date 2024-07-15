@extends('layouts.ceo')

@section('content')

<nav class="nav-1">
  <div class="content">
    <a class="logo" href="{{ route('ceo.dashboard') }}"><img src="{{ asset('images/logo.png') }}" alt="Smart Checkout"></a>

    <ul class="nav-li tab-s">
      <li class="pc"><a class="blue" href="{{ route('ceo.dashboard') }}"><img src="{{ asset('images/ico-dashboard_b.svg') }}" alt="">ダッシュボード</a></li>
      <li class="pc"><a href="{{ route('ceo.idealList') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="">アイデア</a></li>
      <li class="pc"><a href="{{ route('ceo.report') }}"><img src="{{ asset('images/ico-analysis.svg') }}" alt="">傾向と分析</a></li>
      <li class="pc"><a href="{{ route('ceo.myPage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="">マイページ</a></li>
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

<!-- <nav class="nav-2">
  <div class="content">
    <ul class="nav-li">
      <li><a class="active" href="{{ url('/ceo/post') }}">投稿する</a></li>
      <li><a href="{{ url('/ceo/ai') }}">AIに聞く</a></li>
    </ul>
    <div class="btn-wrap">
      <a class="n-btn b-wh" href="#">一時保存</a>
      <a class="n-btn" href="#">提出する</a>
    </div>
  </div>
</nav> -->

<nav class="nav-3 sp">
  <a href="{{ route('ceo.dashboard') }}"><img src="{{ asset('images/ico-dashboard_b.svg') }}" alt="ダッシュボード"></a>
  <a href="{{ route('ceo.idealList') }}"><img src="{{ asset('images/ico-idea.svg') }}" alt="アイデア"></a>
  <a href="{{ route('ceo.report') }}"><img src="{{ asset('images/ico-analysis.svg') }}" alt="傾向と分析"></a>
  <a href="{{ route('ceo.myPage') }}"><img src="{{ asset('images/ico-mypage.svg') }}" alt="マイページ"></a>
</nav>

<section class="sec bg-pale">
  <div class="content">
    <div class="dash-box">
      <div class="sort-2 w24">
        <button class="accttl">今週のレポート</button>
        <ul class="accshow">
          @foreach(['すべて', '今日', '今週', '先週', '今月', '先月'] as $week)
            <li><a href="">{{ $week }}</a></li>
          @endforeach
        </ul>
        <div class="close-bg"></div>
      </div>

      <picture>
        <source srcset="{{ asset('images/idea-chart_sp.png') }}" media="(max-width:768px)">
        <img class="chart" src="{{ asset('images/idea-chart.png') }}" alt="">
      </picture>
    </div>
    
    <div class="dash-box">
      <div class="img-grid">
        <img class="img pc" src="{{ asset('images/idea-img.png') }}">
        <div class="txt">
          <h2 class="ttl-1">最近の投稿アイデアの傾向</h2>
          <p>
            最近のアイデアにおける傾向分析によれば、患者満足度向上を目指す取り組みが顕著な成果を示しています。特に待ち時間削減策やオンライン治療計画の提案などが、患者の関心を引き付けています。また、セキュリティを強化するデータ保護の提案も注目を集めており、プライバシーに対する懸念が高まる中で、施設の信頼性を高める効果が期待されます。これらの傾向から、今後は患者満足度向上やセキュリティ対策に重点を置いたアイデアの展開が期待されます。<br>
          </p>
          <a class="n-btn w16" href="{{ route('ceo.report') }}">詳しく見る</a>
        </div>
      </div>
    </div>
    
    <div class="dash-box">
      <h2 class="ttl-1">承認されたカテゴリーの傾向</h2>
      <div class="tag-wrap">
        @foreach(['業務改善', 'サービス改善', 'セキュリティ対策', '新サービス企画'] as $category)
          <span class="tag">{{ $category }}</span>
        @endforeach
      </div>
    </div>
    
    <div class="dash-box">
      <h2 class="ttl-1">新着アイデア</h2>
    
      <ul class="idea-li ceo-idea-li">
        <li class="head pc">
          <div>名前</div>
          <div>投稿者</div>
          <div>承認者</div>
        </li>
        {{-- @foreach($ideas as $idea) --}}
        <li>
          <a href="#">
            <span class="ttl">
              <h3>患者満足度向上のための待ち時間削減策</h3>
              <span class="date">2024/05/01　サービス改善</span>
              <span class="name"><span class="sp">投稿者</span>山田 太郎</span>
              <span class="authorizer"><span class="sp">承認者</span>高島 花子</span>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="ttl">
              <h3>セキュリティを強化するデータ保護の対策と新サービスの提案</h3>
              <span class="date">2024/04/01　セキュリティ対策</span>
              <span class="name"><span class="sp">投稿者</span>島田 京介</span>
              <span class="authorizer"><span class="sp">承認者</span>高島 花子</span>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="ttl">
              <h3>治療時間のオンライン共有</h3>
              <span class="date">2024/03/01　サービス改善</span>
              <span class="name"><span class="sp">投稿者</span>長谷部 馨</span>
              <span class="authorizer"><span class="sp">承認者</span>高島 花子</span>
            </span>
          </a>
        </li>
        {{-- @endforeach --}}
      </ul>

      <a class="n-btn w16" href="{{ route('ceo.idealList') }}">アイデア一覧</a>
    </div>

    <div class="dash-wrap">
      <div class="dash-box">
        <h2 class="ttl-1">採用率の高い従業員</h2>
        <dl class="employee-dl">
          <dt>山田 太郎</dt><dd>100</dd>
          <dt>島田 京介</dt><dd>96</dd>
          <dt>長谷部 馨</dt><dd>72</dd>
        </dl>
      </div>
      
      <div class="dash-box">
        <h2 class="ttl-1">投稿数の高い従業員</h2>
        <dl class="employee-dl">
          <dt>山田 太郎</dt><dd>100</dd>
          <dt>島田 京介</dt><dd>96</dd>
          <dt>長谷部 馨</dt><dd>72</dd>
        </dl>
      </div>
    </div>
  </div>
</section>


@endsection
