@extends('layouts/logout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<main>
    <div class="admin">
        <div class="admin_content">
            <div class="content_ttl">
                <span class="ttl_logo">Admin</span>
            </div>
            <form action="" class="search_form">
                @csrf
                <div class="inputs">
                    <div class="inputs_row">
                        <input class="input_name" type="text" name="search" id="" placeholder="名前やメールアドレスを入力してください">
                        <select name="gender" id="" class="select_gender">
                            <option value="男性">男性</option>
                            <option value="女性">女性</option>
                            <option value="その他">その他</option>
                        </select>
                        <select name="category" id="" class="select_category">
                            <option value="">あ</option>
                            <option value="">い</option>
                        </select>
                        <input type="data" class="input_data" name="data">
                        <button class="search_button" type="submit">検索</button>
                        <button class="reset_button" type="reset">リセット</button>
                    </div>
                </div>
                <div class="second_inputs">
                    <button class="export_button" type="submit">エクスポート</button>
                    <ul>
                        <li><a href="page/1"></a></li>
                        <li><a href="page/2">2</a></li>
                        <li><a href="page/3">3</a></li>
                        <li><a href="page/4">4</a></li>
                        <li><a href="page/5">5</a></li>
                    </ul>
                </div>
            </form>
            <div class="details">
                <table class="details_table">
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                    </tr>
                    <tr>
                        <td>山田　太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <button class="detail_button" type="submit">詳細</button>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection