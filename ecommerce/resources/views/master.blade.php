<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ecommerce</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
    
    .costum-product{
        
        height:600px;
        padding-top:20px;
    }
    
    img.slider_image{
        width:100%;
        height:400px;
        margin:auto;
    }
    img.trending_image{
        height:60%;
        width:90%;

    }
    .trending_item{
        float:left;
        width:25%;
    }
    .trending-wrapper{
        margin:30px;
    }
    .detail_image{
        height: 80%;
        margin: 5%;
    }
    .shop{
        width: 100%;
    }
    .search-box{
        width: 500px;
        ]}
    .search-item{
        float: left;
        height:10%;
        width:30%;
    }
    .cart_list_devider{
        border-bottom:1px solid black ;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

</style>

<body style="background-color:white;">
    {{View::make('header')}}
    @yield('content')
    {{-- <script>
        $(document).ready(function()
        {
            $("button").click(function(){
                alert("all set")
            })
        })
    </script> --}}
    {{View:: make('footer')}}
</body>
</html>