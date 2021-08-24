@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail_image" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <hr>
            <a href="/">繼續逛逛</a>
            <h2>{{$product['name']}}</h2>
            <br><br>
            <h4>說明:   {{$product['description']}}</h4>
            <h3>$ {{$product['price']}}</h3>
            <h6>類別: {{$product['category']}}</h6>
            <br><br>
            <br><br>
            <br><br>
            <form action="/add_to_cart" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary shop">加入購物車</button>
            </form>
            <br><br>
            <button class="btn btn-danger shop">直接結帳</button>
        </div>
    </div>
</div>
@endsection


