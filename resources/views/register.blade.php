
@extends('layouts.site')

@section('title','Register | Pullshoes')

@section('content')
  	<!-- New Arrivals section start -->
      <div class="collection_text">Register</div>
        <div class="collection_section layout_padding">
            <div class="container">
                <h1 class="new_text"><strong>Register now!</strong></h1>
                <p class="consectetur_text">
                Register with us and take the advantage of lateast fashion updates , order history and much more.
                </p>
            </div>
        </div>
        <div class="layout_padding gallery_section">
            <div class="container">
<form action="{{ route('register') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" 
    name="name"
    id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter Name"
    value="{{old('name') ? old('name') : ''}}"
    >
    @if($errors->has('name'))
       <div class="text-danger">{{ $errors->first('name') }}</div>
    @endif
  </div>

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
         value="{{old('password') ? old('email') : ''}}"
         >
    @if($errors->has('password'))
       <div class="text-danger">{{ $errors->first('password') }}</div>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" 
        name="password_confirmation"
        class="form-control" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
         placeholder="Enter Confirm Password"
         value="{{old('password_confirmation') ? old('password_confirmation') : ''}}"
         >
    @if($errors->has('password_confirmation'))
       <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
@endsection