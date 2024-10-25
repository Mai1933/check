@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<main>
    <div class="confirm">
        <div class="confirm_content">
            <div class="content_ttl">
                <span class="ttl_logo">Confirm</span>
            </div>
            <form class="confirm_form" action="">
                @csrf
                <table class="table">
                    <tr>
                        <th>お名前</th>
                        <td>山田　太郎</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>男性</td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>test@example.com</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>08012345678</td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>東京都渋谷区千駄ヶ谷</td>
                    </tr>
                    <tr>
                        <th>建物</th>
                        <td>千駄ヶ谷マンション101</td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        <td>商品の交換について</td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>届いた商品が注文した商品ではありませんでした。<br>商品の取り換えをお願いします。</td>
                    </tr>
                </table>
                <div class="confirm_button">
                    <button class="confirm_button-submit" type="submit">送信</button>
                    <a href="">修正</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection