@extends('layouts/login')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<main>
    <div class="register">
        <div class="register_alert">
            @if ($errors->any())
                <div class="register_alert-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="register_content">
            <div class="content_ttl">
                <span class="ttl_logo">Register</span>
            </div>
            <div class="content_form">
                <form action="/register" method="post" class="register-form">
                    @csrf
                    <div class="form_name">
                        <p class="form_name-ttl">お名前</p>
                        <input type="text" name="name" value="{{ old('name') }}" class="name_input" placeholder="例&colon;山田　太郎">
                    </div>
                    <div class="form_mail">
                        <p class="form_mail-ttl">メールアドレス</p>
                        <input type="email" name="email" value="{{ old('email') }}" class="email_input" placeholder="test@exemple.com">
                    </div>
                    <div class="form_password">
                        <p class="form_password-ttl">パスワード</p>
                        <input type="password" name="password" class="password_input"
                            placeholder="例&colon;coachtech1106">
                    </div>
                    <div class="form_button">
                        <button class="form_button-register" type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection