@extends('layout')

@section('content')

<h1>User Registration</h1>
<div class="container bg-secondary br-5">

    <form action="{{ route('register_user') }}" method="POST">
        @csrf
    
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" value="{{old('firstName')}}">
            <span class="text-danger">@error('firstName') {{ $message }} @enderror</span>
        </div>

        <div class="mb-3 ">
            <label for="LastName" class="form-label">Last Name</label>
            <input type="text" class="form-control"  name="LastName" value="{{old('LastName')}}" >
            <span class="text-danger">@error('LastName') {{$message }}@enderror</span>
        </div>

        <div class="mb-3 ">
          <label for="exampleInputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" name="exampleInputEmail1"  value="{{old('exampleInputEmail1')}}">
          <span class="text-danger">@error('exampleInputEmail1') {{$message }}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="exampleInputPassword2" class="form-control" >
          <span class="text-danger">@error('exampleInputPassword2') {{$message }}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="confirmInputPassword2" class="form-label">Confirm Password1</label>
            <input type="password" name="confirmInputPassword2" class="form-control" >
            <span class="text-danger">@error('confirmInputPassword2') {{$message }}@enderror</span>
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection

