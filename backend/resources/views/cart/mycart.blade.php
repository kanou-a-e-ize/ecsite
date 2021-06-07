<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('cart/layout')
    @section('content')
    <div class="container ops-main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="ops-title">カート確認</h3>
        </div>
    </div>

    @if($orders->isNotEmpty())
        <div class="col-md-11 col-md-offset-1">
        
            <table class="table text-center">
                <tr>
                    <th class="text-center">商品名</th>
                    <th class="text-center">単価（税抜）円</th>
                    <th class="text-center">数量</th>
                    <th class="text-center">合計（税込）円</th>
                    <th class="text-center">削除</th>
                </tr>
            
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->order_p_name }}</td>
                    <td>{{ $order->order_p_price }}</td>
                    <td>{{ $order->order_p_number }}</td>
                    <td>{{ $order->order_p_number*$order->order_p_price}}</td>
                    
                    <td>
                        <form action="/cart/{{ $order->id }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>

    @else
        <p class="text-center">注文情報がありません...!</p>
    @endif
    
            <a href="/cart/address" class="btn btn-default">住所入力</a>
            <a href="/cart">商品一覧に戻る</a>  
        </div> 

    @endsection
</html>