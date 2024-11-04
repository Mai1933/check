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
            <form class="confirm_form" method="post">
                @csrf
                <table class="table">
                    <tr>
                        <th>お名前</th>
                        <td>
                            <input type="text" class="input-name-last" name="last_name"
                                value="{{ $contact['last_name'] }}" readonly>
                            <input type="text" name="first_name" class="input-name-first"
                                value="{{ $contact['first_name'] }}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        @if($contact['gender'] = 1)
                            <td>
                                <input type="text" value="男性" readonly>
                                <input type="hidden" value="1" name="gender">
                            </td>
                        @elseif($contact['gender'] = 2)
                            <td>
                                <input type="text" value="女性" readonly>
                                <input type="hidden" value="2" name="gender">
                            </td>
                        @elseif($content['gender'] = 3)
                            <td>
                                <input type="text" value="その他" readonly>
                                <input type="hidden" value="3" name="gender">
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            <input type="text" class="input-email" name="email" value="{{ $contact['email'] }}"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>
                            <input type="text" class="input-tell" name="tell" value="{{ $tell }}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>
                            <input type="text" class="input-address" name="address" value="{{ $contact['address'] }}"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>建物</th>
                        <td>
                            <input type="text" class="input-building" name="building" value="{{ $contact['building'] }}"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        @if($contact['category_id'] = 1)
                            <td>
                                <input type="text" value="商品のお届けについて" readonly>
                                <input type="hidden" value="1" name="category_id">
                            </td>
                        @elseif($contact['category_id'] = 2)
                            <td>
                                <input type="text" value="商品の交換について" readonly>
                                <input type="hidden" value="2" name="category_id">
                            </td>
                        @elseif($content['category_id'] = 3)
                            <td>
                                <input type="text" value="商品トラブル" readonly>
                                <input type="hidden" value="3" name="category_id">
                            </td>
                        @elseif($content['category_id'] = 4)
                            <td>
                                <input type="text" value="ショップへのお問い合わせ" readonly>
                                <input type="hidden" value="4" name="category_id">
                            </td>
                        @elseif($content['category_id'] = 5)
                            <td>
                                <input type="text" value="その他" readonly>
                                <input type="hidden" value="5" name="category_id">
                            </td>
                        @endif
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>
                            <textarea name="detail" readonly>{{ $contact['detail'] }}</textarea>
                        </td>
                    </tr>
                </table>
                <div class="confirm_button">
                    <button class="confirm_button-submit" type="submit" formaction="/confirm/store">送信</button>
                    <button class="confirm_button-correction" type="submit" formaction="/confirm/correct">修正</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection