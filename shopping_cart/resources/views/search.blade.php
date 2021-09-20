@extends('master')
@section('content')
<div class="costum-product">
    <div class="col-sm-4">
        <a href="">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wapper">
            <h4>Result for Products</h4>
              @foreach ($products as $item)
              <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                <img class="trinding-img" src="{{$item['gallery']}}" >
                <div class="">
                  <h2>{{$item['name']}}</h2>
                  <h5>{{$item['description']}}</h5>
                </div>
                </a>
              </div>
              @endforeach   
          </div>
    </div>
</div>
@endsection


