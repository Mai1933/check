@extends('layouts/layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<main>
    <div class="contact">
        <div class="contact_content">
            <div class="content_ttl">
                <span class="ttl_logo">Contact</span>
            </div>
            <form action="/confirm" method="post">
                @csrf
                <div class="contact-form">
                    <div class="name-row">
                        <div class="name_ttl">
                            <p class="name_ttl-logo">お名前</p>
                            @error('last_name')
                                <p style="color:#FF9494">{{ $errors->first('last_name') }}</p>
                            @enderror
                            @error('first_name')
                                <p style="color:#FF9494">{{ $errors->first('first_name') }}</p>
                            @enderror
                        </div>
                        <input type="text" name="last_name" placeholder="例&colon;山田" value="{{ old('last_name') }}">
                        <input type="text" name="first_name" placeholder="例&colon;太郎" value="{{ old('first_name') }}">
                    </div>
                    <div class="gender-row">
                        <div class="gender_ttl">
                            <p class="gender_ttl-logo">性別</p>
                            @error('gender')
                                <p style="color:#FF9494">{{ $errors->first('gender') }}</p>
                            @enderror
                        </div>
                        <p class="radio_options">
                        <div class="radio_m">
                            <input type="radio" name="gender" value="1" class="gender_radio gender_radio_m" checked
                                {{old('gender') == 1 ? 'checked' : ''}}> 男性
                        </div>
                        <div class="radio_f">
                            <input type="radio" name="gender" value="2" class="gender_radio radio_f"
                                {{old('gender') == '2' ? 'checked' : ''}}> 女性
                        </div>
                        <div class="radio_o">
                            <input type="radio" name="gender" value="3" class="gender_radio radio_o"
                                {{old('gender') == '3' ? 'checked' : ''}}> その他
                        </div>
                        </p>
                    </div>
                    <div class="email-row">
                        <div class="email_ttl">
                            <p class="email_ttl-logo">メールアドレス</p>
                            @error('email')
                                <p style="color:#FF9494">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com"
                            class="email_input">
                    </div>
                    <div class="tell-row">
                        <div class="tell_ttl">
                            <p class="tell_ttl-logo">電話番号</p>
                            @error('tell3')
                                <p style="color:#FF9494">{{ $errors->first('tell3') }}</p>
                            @enderror
                        </div>
                        <div class="tell_input">
                            <input type="text" maxlength="5" pattern="^[0-9]+$" name="tell1" placeholder="080"
                                value="{{ old('tell1') }}">
                            <span class="tell">-</span>
                            <input type="text" maxlength="5" name="tell2" pattern="^[0-9]+$" placeholder="1234"
                                value="{{ old('tell2') }}">
                            <span class="tell">-</span>
                            <input type="text" maxlength="5" name="tell3" pattern="^[0-9]+$" placeholder="5678"
                                value="{{ old('tell3') }}">
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="address_ttl">
                            <p class="address_ttl-logo">住所</p>
                            @error('address')
                                <p style="color:#FF9494">{{ $errors->first('address') }}</p>
                            @enderror
                        </div>
                        <input class="address_input" type="text" name="address" value="{{ old('address') }}"
                            placeholder="例&colon;東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                    <div class="row building-row">
                        <div class="building_ttl">
                            <p class="building_ttl-logo">建物名</p>
                            @error('building')
                                <p style="color:#FF9494">{{ $errors->first('building') }}</p>
                            @enderror
                        </div>
                        <input class="building_input" type="text" name="building" value="{{ old('building') }}"
                            placeholder="例&colon;千駄ヶ谷マンション101">
                    </div>
                    <div class="category-row">
                        <div class="category_ttl">
                            <p class="category_ttl-logo">お問い合わせの種類</p>
                            @error('category_id')
                                <p style="color:#FF9494">{{ $errors->first('category_id') }}</p>
                            @enderror
                        </div>
                        <select class="category_input" name="category_id">
                            <option value="" disabled selected style="display:none;">選択してください</option>
                            <option value="1" {{old('category_id') == '1' ? 'selected' : ''}}>商品のお届けについて</option>
                            <option value="2" {{old('category_id') == '2' ? 'selected' : ''}}>商品の交換について</option>
                            <option value="3" {{old('category_id') == '3' ? 'selected' : ''}}>商品トラブル</option>
                            <option value="4" {{old('category_id') == '4' ? 'selected' : ''}}>ショップへのお問い合わせ</option>
                            <option value="5" {{old('category_id') == '5' ? 'selected' : ''}}>その他</option>
                        </select>
                    </div>
                    <div class="row content-row">
                        <div class="content_ttl-content">
                            <p class="content_ttl-logo">お問い合わせ内容
                            </p>
                            @error('detail')
                                <p style="color:#FF9494">{{ $errors->first('detail') }}</p>
                            @enderror
                        </div>
                        <textarea class="content_input" rows="5" cols="40" name="detail"
                            placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
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