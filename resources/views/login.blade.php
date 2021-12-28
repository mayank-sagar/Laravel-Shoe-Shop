
@extends('layouts.site')

@section('title','Register | Pullshoes')

@section('content')
  	<!-- New Arrivals section start -->
      <div class="collection_text">Login</div>
        <div class="collection_section layout_padding">
            <div class="container">
                <h1 class="new_text"><strong>Login</strong></h1>
                <p class="consectetur_text">
                Login here or if you haven't registered yet register <a href="{{route('register')}}">here.</a>
                </p>
            </div>
        </div>
        <div class="layout_padding gallery_section">
            <div class="container">
<form action="{{ route('login') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" 
        name="email"
        class="form-control" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
         placeholder="Enter Email"
         value="{{old('email') ? old('email') : ''}}"
         >
    @if($errors->has('email'))
       <div class="text-danger">{{ $errors->first('email') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" 
        name="password"
        class="form-control" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
         placeholder="Enter Password"
         value="{{old('password') ? old('password') : ''}}"
         >
    @if($errors->has('password'))
       <div class="text-danger">{{ $errors->first('password') }}</div>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
            </div>
        </div>
@endsection