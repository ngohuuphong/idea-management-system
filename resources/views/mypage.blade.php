@extends('layouts.master')

@section('content')
<section class="sec">
	<div class="content">
    <h2 class="ttl-1">マイページ</h2>
    
    <form class="form">
      <label>名前</label>
      <input type="text" name="" value="山田太郎">
      <div class="error">内容に誤りがあります。</div>

      <label>メールアドレス</label>
      <input type="text" name="" value="yamada@sco.co.jp">

      <div class="btn-wrap">
        <input type="submit" value="変更内容を保存">
        <ul>
          <li><a href="{{ route('account.resetPassword') }}">パスワードを変更する</a></li>
          <li><a href="#">ログアウト</a></li>
        </ul>
      </div>
    </form>
	</div>
</section>
@endsection
