@extends('layouts.master')

@section('title', 'Post')

@section('content')

@section('content')
  <section class="sec">
    <div class="content">
      <div class="ttl-wrap">
        <h2 class="ttl-1">投稿したアイデア</h2>
        <a class="n-btn pc" href="{{ route('member.newPost') }}">＋新規作成</a>
      </div>

      <ul class="idea-li">
        <li class="head pc">
          <div>名前</div>
          <div>ステータス</div>
        </li>
        
        <li>
          <a href="{{ route('member.post', ['id' => 0]) }}">
            <span class="ttl">
              <h3>患者満足度向上のための待ち時間削減策</h3>
              <span class="date">2024/05/01</span>
            </span>
            <span class="status b-gray">下書き</span>
          </a>
        </li>
        <li>
          <a href="{{ route('member.post', ['id' => 0]) }}">
            <span class="ttl">
              <h3>セキュリティを強化するデータ保護の対策と新サービスの提案</h3>
              <span class="date">2024/04/01</span>
            </span>
            <span class="status b-bk">提出済</span>
          </a>
        </li>
        <li>
          <a href="{{ route('member.post', ['id' => 0]) }}">
            <span class="ttl">
              <h3>治療時間のオンライン共有</h3>
              <span class="date">2024/03/01</span>
            </span>
            <span class="status b-green">承認</span>
          </a>
        </li>
        <li>
          <a href="{{ route('member.post', ['id' => 0]) }}">
            <span class="ttl">
              <h3>リマインダーサービスの提案</h3>
              <span class="date">2024/02/01</span>
            </span>
            <span class="status b-red">不採用</span>
          </a>
        </li>
      </ul>
    </div>
  </section>
@endsection

