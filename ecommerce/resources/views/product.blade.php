@extends('master')
@section('content')
<div class=" costum-product">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        @foreach ($products as $item)
            <div class="carousel-item {{$item['id'] ==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
            <img class="slider_image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h3 class="name">{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
                </div>
            </a> 
            </div>
        @endforeach
        </div>
        <a>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        </a>
        <a>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
        </a> 
        
    </div>
    
        <div class="trending-wrapper"> 
                <h3>Trending Products</h3>
            @foreach ($products as $item)
                <div class="trending_item">
                <a href="detail/{{$item['id']}}">
                <img class="trending_image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                    <div>
                        <h2 class="name">{{$item['name']}}</h2>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
</div>
@endsection


