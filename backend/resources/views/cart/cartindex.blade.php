<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Shop</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main>
        <div class="container">
            <div class="cartindex-btn">
                <button type="button" class="btn btn-gray" onclick="location.href='/cart/mycart'">カート確認</button>
            </div>
            <div class="cartindex-title">
                <p>ようこそ</p>
                <h2>商品一覧</h2>
            </div>
            
            <div class="itemlist">    
            <ul>
            @foreach($products as $product)
                <li>
                    <a href="/cart/{{ $product->p_id }}/detail"><img src="{{ asset('storage/upload/') }}/{{$product->image1}}" alt="{{$product->image1}}"></a>
                    <div class="item-body">
                        <h4>{{ $product->p_name }}</h4>
                        <p>{{ $product->p_price }} 円</p>
                    </div>
                </li>
            @endforeach  
            </ul>
            </div>
        </div>
    </main>
</body>
</html>
