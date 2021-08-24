@extends('master')
@section('content')
<div class=" costum-product">
    <div class="trending-wrapper"> 
        <h3>Research Products</h3>
        @foreach ($products as $item)
            <div class="search-item">
            <a href="detail/{{$item['id']}}">
            <img class="trending_image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                <div>
                    <h2>{{$item['name']}}</h2>
                    {{-- <h5>{{$item['description']}}</h5> --}}
                 </div>
            </a>
            </div>
        @endforeach
     </div>
</div>
@endsection


