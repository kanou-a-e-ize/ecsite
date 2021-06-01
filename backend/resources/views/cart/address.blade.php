<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('cart/layout')
    @section('content')
    <div class="container ops-main">
        <div class="row">
            <div class="col-md-12">
                <h3 class="ops-title">住所入力</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
            @include('Cart/message')
                <form action="/cart/post" method="post" onSubmit="return checkSubmit()" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="c_name">お名前</label>
                        <input type="text" class="form-control" name="c_name" value="{{ $customer->c_name }}">
                    </div>
                    <div class="form-group">
                        <label for="c_name_kana">お名前フリガナ（全角カナ）</label>
                        <input type="text" class="form-control" name="c_name_kana" value="{{ $customer->c_name_kana }}">
                    </div>
                    <div class="form-group">
                        <label for="postcode">郵便番号（ハイフン不要）</label>
                        <input type="text" class="form-control" name="postcode" value="{{ $customer->postcode }}">
                    </div>
                    <div class="form-group">
                        <label for="prefecture">都道府県</label>
                        <input type="text" class="form-control" name="prefecture" value="{{ $customer->prefecture }}">
                    </div>
                    <div class="form-group">
                        <label for="city">市区町村</label>
                        <input type="text" class="form-control" name="city" value="{{ $customer->city }}">
                    </div>
                    <div class="form-group">
                        <label for="street">それ以降の住所</label>
                        <input type="text" class="form-control" name="street" value="{{ $customer->street }}">
                    </div>
                    <div class="form-group">
                        <label for="c_phone">電話番号（ハイフン不要）</label>
                        <input type="text" class="form-control" name="c_phone" value="{{ $customer->c_phome }}">
                    </div>
                    <div class="form-group">
                        <label for="c_mail">メールアドレス</label>
                        <input type="text" class="form-control" name="c_mail" value="{{ $customer->c_mail }}">
                    </div>

                    <button type="submit" class="btn btn-default">注文確定</button>
                    <a href="/cart/mycart">カート内容確認に戻る</a>
                </form>
            </div>
        </div>
    </div>
    @endsection
</div>
</html>