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
                        <div class="select_gender-group">
                            <select name="gender" id="" class="select_gender">
                                <option value="男性">男性</option>
                                <option value="女性">女性</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="select_category-group">
                            <select name="category" id="" class="select_category">
                                <option value="">あ</option>
                                <option value="">い</option>
                            </select>
                        </div>
                        <input type="date" class="input_date" name="date">
                        <button class="search_button" type="submit">検索</button>
                        <button class="reset_button" type="reset">リセット</button>
                    </div>
                </div>
                <div class="second_inputs">
                    <button class="export_button" type="submit">エクスポート</button>
                    <ul class="pagination">
                        <li><a class="pagination_number" href="">&lt;</a></li>
                        <li><a class="pagination_number" href="page/1">1</a></li>
                        <li><a class="pagination_number" href="page/2">2</a></li>
                        <li><a class="pagination_number" href="page/3">3</a></li>
                        <li><a class="pagination_number" href="page/4">4</a></li>
                        <li><a class="pagination_number" href="page/5">5</a></li>
                        <li><a class="pagination_number" href="">&gt;</a></li>
                    </ul>
                </div>
            </form>
            <div class="details">
                <table class="details_table">
                    <tr class="details_table-header">
                        <th class="name">お名前</th>
                        <th class="gender">性別</th>
                        <th class="email">メールアドレス</th>
                        <th class="category">お問い合わせの種類</th>
                        <th class="button"></th>
                    </tr>
                    <tr class="details_table-content">
                        <td class="name">山田　太郎</td>
                        <td class="gender">男性</td>
                        <td class="email">test@example.com</td>
                        <td class="category">商品の交換について</td>
                        <td class="button">
                            <button class="detail_button" popovertarget="modal" popoveraction="show">詳細</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="admin_modal" popover id="modal">
            <div class="admin_modal_content">
                <div class="close_button">
                    <button class="close_button-x" popovertarget="modal" popoveraction="hidden">×</button>
                </div>
                <form action="" class="info-form">
                    <table class="info">
                        <tr class="info_name">
                            <th>お名前</th>
                            <td>山田　太郎</td>
                        </tr>
                        <tr class="info_gender">
                            <th>性別</th>
                            <td>男性</td>
                        </tr>
                        <tr class="info_email">
                            <th>メールアドレス</th>
                            <td>test@example.com</td>
                        </tr>
                        <tr class="info_tell">
                            <th>電話番号</th>
                            <td>08012345678</td>
                        </tr>
                        <tr class="info_address">
                            <th>住所</th>
                            <td>東京都渋谷区千駄ヶ谷1-2-3</td>
                        </tr>
                        <tr class="info_building">
                            <th>建物名</th>
                            <td>千駄ヶ谷マンション101</td>
                        </tr>
                        <tr class="info_category">
                            <th>お問い合わせの種類</th>
                            <td>商品の交換について</td>
                        </tr>
                        <tr class="info_content">
                            <th>お問い合わせ内容</th>
                            <td>届いた商品が注文した商品ではありませんでした。<br>商品の交換をお願いします。</td>
                        </tr>
                    </table>
                    <div class="delete_button">
                        <button class="delete_button-submit" type="submit">削除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection