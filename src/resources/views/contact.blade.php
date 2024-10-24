@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact2.css') }}">
@endsection

@section('content')
<main>
    <div class="contact">
        <div class="contact_content">
            <div class="content_ttl">
                <span class="ttl_logo">Contact</span>
            </div>
            <form action="">
                @csrf
                <div class="contact-form">
                    <div class="name-row">
                        <div class="name_ttl">
                            <p class="name_ttl-logo">お名前</p>
                        </div>
                        <input type="text" name="last_name" value="" placeholder="例&colon;山田">
                        <input type="text" name="first_name" value="" placeholder="例&colon;太郎">
                    </div>
                    <div class="gender-row">
                        <div class="gender_ttl">
                            <p class="gender_ttl-logo">性別</p>
                        </div>
                        <p class="radio_options">
                        <div class="radio_m">
                            <input type="radio" name="gender" value="男性" class="gender_radio" checked> 男性
                        </div>
                        <div class="radio_f">
                            <input type="radio" name="gender" value="女性" class="gender_radio radio_f"> 女性
                        </div>
                        <div class="radio_o">
                            <input type="radio" name="gender" value="その他" class="gender_radio radio_o"> その他
                        </div>
                        </p>
                    </div>
                    <div class="email-row">
                        <div class="email_ttl">
                            <p class="email_ttl-logo">メールアドレス</p>
                        </div>
                        <input type="email" name="email" value="" placeholder="test@example.com" class="email_input">
                    </div>
                    <div class="tell-row">
                        <div class="tell_ttl">
                            <p class="tell_ttl-logo">電話番号</p>
                        </div>
                        <div class="tell_input">
                            <input type="number" maxlength="5" name="tell1" placeholder="080">
                            <span class="tell">-</span>
                            <input type="number" maxlength="5" name="tell2" placeholder="1234">
                            <span class="tell">-</span>
                            <input type="number" maxlength="5" name="tell3" placeholder="5678">
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="address_ttl">
                            <p class="address_ttl-logo">住所</p>
                        </div>
                        <input class="address_input" type="text" name="address" value=""
                            placeholder="例&colon;東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                    <div class="row building-row">
                        <div class="building_ttl">
                            <p class="building_ttl-logo">建物名</p>
                        </div>
                        <input class="building_input" type="text" name="building" value="例&colon;千駄ヶ谷マンション101">
                    </div>
                    <div class="category-row">
                        <div class="category_ttl">
                            <p class="category_ttl-logo">お問い合わせの種類</p>
                        </div>
                        <input class="category_input" type="list" name="category_content" placeholder="選択してください">
                    </div>
                    <div class="row content-row">
                        <div class="content_ttl">
                            <p class="content_ttl-logo">お問い合わせ内容
                            </p>
                        </div>
                        <textarea class="content_input" rows="3" cols="40" value=""
                            placeholder="お問い合わせ内容をご記載ください"></textarea>
                    </div>
                </div>
                <div class="form_button">
                    <button class="button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection