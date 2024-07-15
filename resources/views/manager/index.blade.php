@extends('layouts.manager')

@section('title', 'detail')

@section('content')

        <section class="sec">
            <div class="content">
                <div class="ttl-wrap">
                    <h2 class="ttl-1">受領したアイデア</h2>
                    <div class="sort pc">
                        <select name="絞り込み">
                            <option value="全て表示" selected>全て表示</option>
                            <option value="サービス改善">サービス改善</option>
                            <option value="セキュリティ対策">セキュリティ対策</option>
                            <option value="新サービス企画">新サービス企画</option>
                        </select>
                    </div>
                </div>

                <ul class="idea-li">
                    <li class="head pc">
                        <div>名前</div>
                        <div>ステータス</div>
                    </li>
                    <li>
                        <a href="{{ route('manager.post', ['id' => 0]) }}">
                          <span class="ttl">
                            <h3>患者満足度向上のための待ち時間削減策</h3>
                            <div class="name">山田 太郎</div>
                            <span class="date">2024/05/01　サービス改善</span>
                          </span>
                          <span class="status b-yellow">NEW</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('manager.post', ['id' => 0]) }}">
                          <span class="ttl">
                            <h3>セキュリティを強化するデータ保護の対策と新サービスの提案</h3>
                            <div class="name">島田 京介</div>
                            <span class="date">2024/04/01　セキュリティ対策</span>
                          </span>
                          <span class="status b-bk">保留</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('manager.post', ['id' => 0]) }}">
                          <span class="ttl">
                            <h3>治療時間のオンライン共有</h3>
                            <div class="name">長谷部 馨</div>
                            <span class="date">2024/03/01　サービス改善</span>
                          </span>
                          <span class="status b-green">承認</span>
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('manager.post', ['id' => 0]) }}">
                          <span class="ttl">
                            <h3>リマインダーサービスの提案</h3>
                            <div class="name">土田 純</div>
                            <span class="date">2024/02/01　新サービス企画</span>
                          </span>
                          <span class="status b-red">差戻し</span>
                        </a>
                      </li>
                </ul>
            </div>
        </section>

    @endsection
