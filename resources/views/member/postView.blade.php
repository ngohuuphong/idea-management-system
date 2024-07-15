
@extends('layouts.member')

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
    <h2 class="ttl-1">医療現場の感染対策へのニーズに、ソリューション提案で応える</h2>
    <p>
      医療現場における感染対策は、従来から重視されてきたテーマです。さまざまな場面に潜む感染リスクをいかにして未然に防ぐか、どの医療機関においても検討され、対策が行われてきました。病院内で感染対策を適切に行うには、院内の動線やゾーニングの設計やリソース配分の面で患者さんを受け入れるための態勢の構築、感染防止や環境整備に関わるルールの運用徹底など、複雑で多岐にわたる課題が存在します。<br>
      <br>
      しかし、このたびの新型コロナウイルス感染症（COVID-19）の拡大により、感染リスクはより的確に迅速に対処しなければ医療機関の機能や経営をも揺るがしかねない課題となりました。テルモは、コロナ禍においてさらに意識が高まっている感染対策の一助となるべく、ホスピタルカンパニーを中心に「感染対策イニシアチブ」を立ち上げ、課題の抽出から運用、フォローに至るまで、総合的なソリューション提案に力を入れています。<br>
      <br>
      病院がその機能を維持するためには普遍的で基本的な感染対策が必要であり、「標準予防策」が最も重要と言われています。標準予防策とは、平時から、すべての患者さん・家族、医療従事者に対して用いる、基礎的な感染対策で、患者さんの体液や排泄物、傷のある皮膚や粘膜を感染の可能性のある物質とみなして対応することを指します。<br>
      <br>
      今回のCOVID-19の感染拡大により、医療機関では改めてこの標準予防策の重要性を再認識することとなりました。中でも手指衛生は感染性病原体の伝播を減少させる特に重要な対策である一方、常に多忙な医療現場で周知徹底することが難しい現状がありました。テルモは、手指消毒剤を始めとする、手指衛生に貢献する製品を提供するとともに、院内の運用の徹底に向け、感染対策の推進を担う医療従事者と連携して院内の課題を洗い出し、教育の工夫や徹底のためのトレーニングを一緒に作り上げていく活動を進めています。<br>
    </p>
    
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


