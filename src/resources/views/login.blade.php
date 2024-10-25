@extends('layouts/register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <main>
        <div class="login">
            <div class="login_content">
                <div class="content_ttl">
                    <span class="ttl_logo">Login</span>
                </div>
                <div class="content_form">
                    <form action="" class="login-form">
                        <div class="form_mail">
                            <p class="form_mail-ttl">メールアドレス</p>
                            <input type="email" name="email" value="" class="email_input"
                                placeholder="test@exemple.com">
                        </div>
                        <div class="form_password">
                            <p class="form_password-ttl">パスワード</p>
                            <input type="text" name="password" id="" class="password_input"
                                placeholder="例&colon;coachtech1106">
                        </div>
                        <div class="form_button">
                            <button class="form_button-login" type="submit">ログイン</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection