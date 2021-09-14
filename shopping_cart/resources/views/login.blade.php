@extends('master')
@section('content')
<div class="container costom-login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h4>User Login</h4>
            <hr>  
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail">E-mail</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password"class="form-control" placeholder="Enter password">
                </div>
                <button type="submit" class ="btn btn-block btn-primary">Login</button>
                <br>
                <a href="register">Creat a new Acount now!</a>    
            </form>
        </div>
    </div>
</div>
@endsection