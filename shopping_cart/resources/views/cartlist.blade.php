@extends('master')
@section('content')
<div class="costum-product">
    <div class="col-sm-10">
        <div class="trending-wapper">
            <h4>Result for Products</h4>
              @foreach ($products as $item)
              <div class="row searched-item">
                <div class="col-sm-3">
                        <img class="trinding-img" src="{{$item->gallery}}" >
                    </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                          <h2>{{$item->name}}</h2>
                          <h5>{{$item->description}}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-danger">Remove</button>
                </div>
              </div>
              @endforeach   
          </div>
    </div>
</div>
@endsection


