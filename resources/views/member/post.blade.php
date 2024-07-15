@extends('layouts.master')

@section('title', 'Post')

@section('content')

<nav class="nav-2">
  <div class="content">
    <ul class="nav-li">
      <li><a class="active" href="javascript:void(0)" onclick="showSection('post', this)">投稿する</a></li>
      <li><a href="javascript:void(0)" onclick="showSection('chat', this)">AIに聞く</a></li>
    </ul>
    <div class="btn-wrap">
      <a class="js-modal-open n-btn b-wh" href="" data-target="save">一時保存</a>
      <a class="js-modal-open n-btn" href="" data-target="confirm">提出する</a>
    </div>
  </div>
</nav>
  
<section class="sec bg-pale" id="post">
	<div class="content">
    <input class="title" type="text" placeholder="投稿タイトル">
    <textarea class="message" placeholder="本文を入力"></textarea>
	</div>
</section>
<section class="sec bg-pale" id="chat" style="display: none;">
  <div class="content">
    <ul class="chat">
      <li class="your-message">
        <p>
          {{ __('デジタル技術の導入と運用コストについて、課題を3つ簡潔に要点をおさえて教えて') }}
        </p>
      </li>
      <li class="ai-message">
        <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AI">
        <p>
          1. {{ __('高初期投資') }}<br>
          {{ __('最新のデジタル技術を導入するためには、設備やソフトウェアの購入、インフラ整備などに多額の初期投資が必要です。') }}<br>
          <br>
          2. {{ __('継続的なメンテナンスとアップデート') }}<br>
          {{ __('導入後も機器やソフトウェアのメンテナンス、定期的なアップデートが必要であり、これには継続的な費用がかかります。') }}<br>
          <br>
          3. {{ __('スタッフのトレーニング') }}<br>
          {{ __('新しい技術を効果的に活用するためには、スタッフのトレーニングが不可欠であり、これも時間とコストがかかります。') }}<br>
        </p>
      </li>
      <li class="your-message">
        <p>
          {{ __('ありがとうございます') }}
        </p>
      </li>
      <li class="ai-message">
        <img class="icon" src="{{ asset('images/ico-ai.png') }}" alt="AI">
        <p>
          {{ __('どういたしまして！他に何かお手伝いできることがあれば、いつでもお知らせください。') }}
        </p>
      </li>
    </ul>
  </div>

  <div class="send-message bg-pale">
    <div class="content">
      <form>
        <textarea placeholder="{{ __('テキストを入力') }}"></textarea>
        <button type="submit"><img src="{{ asset('images/ico-submit.svg') }}" alt="{{ __('送信') }}"></button>
      </form>
      <small>{{ __('回答は必ずしも正しいとは限りません。重要な情報は確認するようにしてください。') }}</small>
    </div>
  </div>
</section>
<!-- モーダルウィンドウの中身 -->
<div id="save" class="modal js-modal post-popup">
  <div class="modal_bg js-modal-close"></div>
  <div class="modal_content">
    <img class="check" src="{{ asset('images/check_bl.png') }}" alt="{{ __('') }}">
    <p>{{ __('一時保存しました') }}</p>
  </div>
</div>

<div id="confirm" class="modal js-modal post-popup">
  <div class="modal_bg js-modal-close"></div>
  <div class="modal_content">
    <p>{{ __('このアイデアを提出しますが<br>よろしいですか？') }}</p>
    <a class="js-modal-open n-btn" href="#" data-target="complete">{{ __('提出する') }}</a>
    <a class="cancel js-modal-close" href="#">{{ __('キャンセル') }}</a>
  </div>
</div>

<div id="complete" class="modal js-modal post-popup">
  <div class="modal_bg js-modal-close"></div>
  <div class="modal_content">
    <img class="check" src="{{ asset('images/check_gr.png') }}" alt="{{ __('') }}">
    <p>{{ __('一時保存しました') }}</p>
  </div>
</div>

<script>
  function showSection(sectionId, element) {
    var postSection = document.getElementById('post');
    var chatSection = document.getElementById('chat');
    
    if (sectionId === 'post') {
      postSection.style.display = 'block';
      chatSection.style.display = 'none';
    } else {
      postSection.style.display = 'none';
      chatSection.style.display = 'block';
    }

    var links = document.querySelectorAll('.nav-li a');
    links.forEach(function(link) {
      link.classList.remove('active');
    });

    element.classList.add('active');
  }
</script>

@endsection
